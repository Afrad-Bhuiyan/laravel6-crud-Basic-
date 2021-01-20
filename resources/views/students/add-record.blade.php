@extends('students.layout')

@section('pageTitle')
Add a record
@endsection

@section('pageStylSheets')
<link rel="stylesheet" href="{{asset('public/css/index.min.css')}}">
@endsection

@section('mainContent')
    <div class="col-12 col-lg-8 mx-auto mb-3">
        <div class="col-wrap">
            <h4 class='text-center'>Add a Record</h4>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-6 mx-auto">
        <div class="col-wrap">
            @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-6 mx-auto">
        <form action="{{route('students.store')}}" method="POST" class="col-wrap">
        
            <div class="row mb-5">
                <div class="col-lg-6">
                    @csrf
                    <input class='form-control form-control-lg' type="text" name="fname" placeholder='First Name'>
                </div>
                <div class="col-lg-6">
                    <input class="form-control form-control-lg" type="text" name="lname" placeholder='Last Name'>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <input class='form-control form-control-lg' type="text" name="age" placeholder='Age'>
                </div>
            </div>
            
            <div class="row mb-5">
                <div class="col-12">
                    <select class='form-control form-control-lg' name="gender">
                        <option value="">Select one</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <input class='form-control form-control-lg' type="text" name="mobile" placeholder='Mobile'>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <button class='btn btn-lg btn-block btn-success' type='submit'>Add</button>
                </div>
            </div>
            
            
        </form>
    </div>
@endsection