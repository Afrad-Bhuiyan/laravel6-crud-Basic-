@extends('students.layout')

@section('pageTitle')
    Edit a record
@endsection

@section('pageStylSheets')
    <link rel="stylesheet" href="{{asset('public/css/index.min.css')}}">
@endsection

@section('mainContent')
    <div class="col-12 col-lg-8 mx-auto mb-3">
        <div class="col-wrap">
            <h4 class='text-center'>Edit a Record</h4>
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
        <form action="{{route('students.update',$single_record->id)}}" method="POST" class="col-wrap">
        
            <div class="row mb-5">
                <div class="col-lg-6">
                    @csrf
                    @method('PUT')
                    <input class='form-control form-control-lg' type="text" name="fname" placeholder='First Name' value="{{$single_record->fname}}">
                </div>
                <div class="col-lg-6">
                    <input class="form-control form-control-lg" type="text" name="lname" placeholder='Last Name' value="{{$single_record->lname}}">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <input class='form-control form-control-lg' type="text" name="age" placeholder='Age' value="{{$single_record->age}}">
                </div>
            </div>
            
            <div class="row mb-5">
                <div class="col-12">
                   
                    <?php 
                        $gender=['Male','Female'];
                    ?>
                    
                    <select class='form-control form-control-lg' name="gender">
                        <option value="">Select one</option>
                        @foreach($gender as $value)

                            @if($value == $single_record->gender)
                                <option value="{{$value}}" selected >{{$value}}</option>
                            @else
                                <option value="{{$value}}" >{{$value}}</option>

                            @endif

                        @endforeach
                    
                    </select>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <input class='form-control form-control-lg' type="text" name="mobile" placeholder='Mobile' value="{{$single_record->mobile}}">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <button class='btn btn-lg btn-block btn-success' type='submit'>Update</button>
                </div>
            </div>
            
            
        </form>
    </div>
@endsection