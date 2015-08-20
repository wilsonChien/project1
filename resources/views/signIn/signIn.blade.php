@extends('layout')

@section('scripts')
<link rel="stylesheet" href="/assets/css/signIn.css">
@stop

@section('content')
<?php //session_destroy(); ?>
<div class="inviBox"></div>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">  
</fb:login-button>
<div id="status">  
</div>

<div class="container content" id="signContainer">     
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <form class="reg-page">
                <div class="reg-header">            
                    <h2>Login to your account</h2>
                </div>

                <!-- <div class="input-group margin-bottom-15">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" placeholder="Username" class="form-control">
                </div>                    
                <div class="input-group margin-bottom-15">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" placeholder="Password" class="form-control">
                </div>   -->          

                <div class="row" id="row_middle">
                    <div class="col-md-12 checkbox">
                        <center><label><input type="checkbox"> 同意<a href="#" target="_blank">隱私權政策</a>和<a href="#" target="_blank">使用者條款</a> </label>    </center>                    
                    </div>
                </div>

                <div class="row" id="row_middle">
                    <!--<div class="col-md-12">
                        <button class="btn-u pull-left" type="submit">Login</button>                        
                    </div>-->
                    <div class="col-md-12" id="special">
                        <a href="login.php?type=facebook" class="btn btn-block btn-social btn-facebook">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                    </div>
                    <div class="col-md-12" id="special">
                        <a href="login.php?type=google" class="btn btn-block btn-social btn-google-plus">
                            <i class="fa fa-google-plus"></i> Sign in with Google
                        </a>
                    </div>

                    <!--<div class="col-md-12" id="special">
                        <button type="reset" onclick="location.href='login.php?type=facebook'" class="btn-u pull-right special"><i class="fa fa-facebook fa-lg color-dark-blue"></i></button>                        
                    </div>
                    <div class="col-md-12" id="special">
                        <button type="reset" onclick="location.href='login.php?type=google'" class="btn-u pull-right special"><i class="fa fa-google-plus fa-lg color-red"></i></button>                     
                    </div>-->
                </div>
            </form>            
        </div>
    </div><!--/row-->
</div>
@stop