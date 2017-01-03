<?php
  session_start();
  if(!empty($_SESSION['key'])){
    header("Location: main");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/plugins/images/favicon.png">
<title>RAF Ventures Client Login</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/aloader.css">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme"  rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./plugins/plugins/bower_components/sweetalert/sweetalert.css">
<script src="./plugins/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body ng-app="rafApp">

<section id="wrapper" class="login-register">
  <div class="login-box animated rubberBand">
    <div class="white-box">
    <div ng-controller="loginCtrl">
      <form class="form-horizontal form-material" id="loginform" ng-submit="loginFunc(login)">
        <h3 class="box-title m-b-20">Sign In</h3>
        <div class="form-group ">
        <span class="ti-email col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="text" required="" placeholder="Email" ng-model="login.email">
          </div>
        </div>
        <div class="form-group">
        <span class="icon-lock col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="password" required="" placeholder="Password" ng-model="login.password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox" ng-model="login.remember" checked>
              <label for="checkbox-signup"> Remember me</label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" ng-disabled="loading == true" type="submit"><span ng-hide="loading == true" >Log In </span>
            <span ng-show="loading == true">
              <div class='uil-ellipsis-css' style='transform:scale(0.7);'><div class="ib"><div class="circle"><div></div></div><div class="circle"><div></div></div><div class="circle"><div></div></div><div class="circle"><div></div></div></div></div>
            </span></button>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
            <div class="social" data-animate="bounceIn">
              <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> 
                <i aria-hidden="true" class="fa fa-facebook"></i>
                 </a>
              <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google">
                <i aria-hidden="true" class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="signup" class="text-primary m-l-5"><b>Sign Up</b></a></p>
          </div>
        </div>
      </form>
      </div>
      <form class="form-horizontal" id="recoverform" action="">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted text--center">Enter your Email and instructions on how to reset your password will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
        <span class="ti-email col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Wanna try to login again? <a href="login" class="text-primary m-l-5"><b>Login</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="plugins/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="plugins/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<!--Style Switcher -->
<script src="plugins/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

<!-- App's main angular Javascript Files -->
<script src="js/angular.js"></script>
<script src="js/angular-ui-router.js"></script>
<script src="js/app.js"></script>
<script src="js/routes.js"></script>
<!-- <script src="js/services.js"></script> -->
<script src="js/controllers.js"></script>

</body>
</html>
