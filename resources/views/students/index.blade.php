@extends('students.layout')

@section('pageTitle')
All students
@endsection

@section('pageStylSheets')
<link rel="stylesheet" href="{{asset('public/css/index.min.css')}}">
@endsection


@section('mainContent')
    <div class="row mt-5">
        <div class="col-md-12 col-lg-8 mx-auto mb-3">
            <div class="col-wrap d-flex">
                <a class='btn btn-lg btn-success ml-auto' href="{{route('students.create')}}">Add Record</a>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 mx-auto mb-3">
            <div class="col-wrap">
                <h4 class='text-center'>All Students List</h4>
                @if(Session::has('success'))
                <p>
                    {{Session::get('success')}}
                </p>
                @endif
            </div>
        </div>
        <div class="col-md-12 col-lg-8 mx-auto">
            <div class="col-wrap">
            
                @if(count($all_student_list) > 0)
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($all_student_list as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->fname}}</td>
                            <td>{{$row->lname}}</td>
                            <td>{{$row->age}}</td>
                            <td>{{$row->gender}}</td>
                            <td>{{$row->mobile}}</td>
                            <td>
                                <a href="{{route('students.edit', $row->id)}}" class='btn btn-lg btn-success'>Edit</a>
                            </td>
                            <td>
                                <form action="{{route('students.destroy', $row->id)}}" method='POST' onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class='btn btn-lg btn-success' type='submit'>Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h2>No Records were added yet</h2>
                @endif
            </div>
        </div>
    </div>
@endsection