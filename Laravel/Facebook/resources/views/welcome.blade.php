@extends('layouts.master')

@section('title')
<<<<<<< HEAD
    welcome!
=======
  welcome!

>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
@endsection

@section('content')

@if(count ($errors) >0)
    <div class="row">

        <div class="col-md-6  col-md-offest-4">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>

        </div>

    </div>

<<<<<<< HEAD
@endif

    <div class="row">
        <div class="col-md-3">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">

=======


@endif


  <div class="row">
        <div class="col-md-3">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
         
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
                <div class="form-group {{$errors->has('email')  ? 'has-error' : '' }} ">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group  {{$errors->has('first_name')  ? 'has-error' : '' }} ">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
<<<<<<< HEAD
                </div>

                <div class="form-group {{$errors->has('password')  ? 'has-error' : '' }} ">
=======
                </div>
            
                <div class="form-group {{$errors->has('password')  ? 'has-error' : '' }} ">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-3">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group  {{$errors->has('email')  ? 'has-error' : '' }} ">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group  {{$errors->has('password')  ? 'has-error' : '' }} ">
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
<<<<<<< HEAD
        <div class="col-md-3">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group  {{$errors->has('email')  ? 'has-error' : '' }} ">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group  {{$errors->has('password')  ? 'has-error' : '' }} ">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>

=======
    </div>



>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
@endsection
