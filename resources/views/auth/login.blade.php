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
        @if(Session::has('error_message'))
			<div class="alert alert-success" role="alert">{{Session::get('error_message')}}</div>
		@endif
        <form method="POST" action="{{route('User.login')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" >            
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" class="form-control" name="password" >         
            </div>
            <input type="submit" class="btn btn-primary" value="Login" name="submit">
        </form>
            <p><a href="/register">Signup</a> if not a member already!<br>Or did you <a href="forgot.html">forgot your password</a> ?</p>
        </div>

    <!-- END #inner-content -->
    </div>

<!-- END .wrapper -->
</div>

<!-- BEGIN #content -->
</main>

@endsection