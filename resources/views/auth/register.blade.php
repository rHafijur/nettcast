@extends('main.layouts.master')
@section('content')

<!-- BEGIN #content -->
<!--<main id="content" class="has-back-layer"> -->
<main id="content">

<!-- BEGIN .wrapper -->
<div class="wrapper">

    <!-- BEGIN #inner-content -->
    <div id="inner-content">
        
        <div class="ot-form-login">
        <form method="POST" action="{{route('User.register')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" name="name" >
                @error('name') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <input type="text" class="form-control" name="username" >
                @error('username') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" >
                @error('email') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" class="form-control" name="password" >
               @error('password') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Confirm Password</label>
               <input type="password" class="form-control" name="password_confirmation" >
               @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <input type="submit" class="btn btn-primary" value="SignUp" name="submit">
        </form>

            <p><a href="/login">Login</a> if already a member!<br>Or did you <a href="forgot.html">forgot your password</a> ?</p>
        </div>

    <!-- END #inner-content -->
    </div>

<!-- END .wrapper -->
</div>

<!-- BEGIN #content -->
</main>

@endsection