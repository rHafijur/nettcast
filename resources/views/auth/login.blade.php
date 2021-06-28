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
            <p><input type="password" autocomplete="off" value="" placeholder="Password"></p>
            <p class="submit"><input type="submit" value="Member Login" class="button"></p>
            <p><a href="signup.html">Signup</a> if not a member already!<br>Or did you <a href="forgot.html">forgot your password</a> ?</p>
        </div>

    <!-- END #inner-content -->
    </div>

<!-- END .wrapper -->
</div>

<!-- BEGIN #content -->
</main>

@endsection