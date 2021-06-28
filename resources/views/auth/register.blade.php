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
            <p><input type="text" autocomplete="off" value="" placeholder="Username"></p>
            <p><input type="email" autocomplete="off" value="" placeholder="E-mail"></p>
            <p><input type="password" autocomplete="off" value="" placeholder="Password"></p>
            <p><input type="password" autocomplete="off" value="" placeholder="Password repeat"></p>
            <p class="text-center"><br><label><input type="checkbox" class="ot-transform-checkbox built"><span class="ot-checkbox-placeholder"></span>You need to agree our <a href="#">Terms of Service</a> to sign up.</label><br><br></p>
            <p class="submit"><input type="submit" value="Signup" class="button"></p>
            <p><a href="login.html">Login</a> if already a member!<br>Or did you <a href="forgot.html">forgot your password</a> ?</p>
        </div>

    <!-- END #inner-content -->
    </div>

<!-- END .wrapper -->
</div>

<!-- BEGIN #content -->
</main>

@endsection