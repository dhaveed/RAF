<!DOCTYPE html>
<html lang="en">
<head>
	<title>RAF ventures</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" sizes="16x16" href="plugins/plugins/images/favicon.png">
	<!-- Bootstrap Core CSS -->
	<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- animation CSS -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<!-- color CSS -->
	<link href="css/colors/default.css" id="theme"  rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
  

<link rel="stylesheet" type="text/css" href="./plugins/plugins/bower_components/sweetalert/sweetalert.css">
<script src="./plugins/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
</head>

<body ng-app="rafApp">

<style type="text/css">
	.login-register {
  background: url(img/signbg.jpg) no-repeat center center / cover !important;
  height: 100%;/*
  margin-top: -2%;*/
  position: fixed;
}
</style>

<section id="wrapper" class="login-register" ng-controller="signupCtrl">
  <div class="login-box animated zoomInDown" style="margin-top: 0.5%; min-height: 70%;">
    <div class="white-box">
      <form name="signupForm" class="form-horizontal form-material animated bounceIn" id="loginform" ng-submit="signUp(user)" method="POST">
        <h3 class="box-title m-b-20">Sign up</h3>
        <div class="form-group ">
        <span class="ti-user col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="text" required="" placeholder="Full Name *" name="fullname" ng-model="user.fullname">
          </div>
        </div>
        <div class="form-group ">
        <span class="ti-email col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="email" required="" placeholder="Email *" name="email" ng-model="user.email">
          </div>
        </div>

        <div class="form-group" ng-show="user.email.$invalid">  
          <div class="col-xs-11">
            <p class="text-danger">Invalid email</p>
          </div>
        </div>

        <div class="form-group">
        <span class="icon-lock col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="password" required="" placeholder="Password *" name="pass1" ng-model="user.pass1">
          </div>
        </div>
        <div class="form-group">
        <span class="icon-lock col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="password" required="" placeholder="Confirm Password *" name="pass2" ng-model="user.pass2">
          </div>
        </div>

        <div class="form-group" ng-show="user.pass1 != user.pass2">  
          <div class="col-xs-11">
            <p class="text-danger">Passwords don't match</p>
          </div>
        </div>

        <div class="form-group">
        <span class="icon-phone col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="text" required="" placeholder="Phone 1 *" name="phone1" ng-model="user.phone1">
          </div>
        </div>

        <div class="form-group">
        <span class="icon-phone col-xs-1" style="margin-top: 4%;"></span>  
          <div class="col-xs-11">
            <input class="form-control" type="text" required="" placeholder="Phone 2 " name="phone2" ng-model="user.phone2">
          </div>
        </div>

        <div class="form-group" ng-show="user.phone1 == user.phone2 && user.phone1 != null">  
          <div class="col-xs-11">
            <p class="text-danger">Phone Number cannot be the same</p>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox" ng-model="user.acceptTAC" ng-checked="false">
              <label for="checkbox-signup"> I agree to all <a href="#">Terms & Conditions</a></label>
            </div>
          </div>
        </div>
        
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button ng-disabled="signupForm.$invalid || user.acceptTAC != true" class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Already a member ? <a href="login" class="text-primary m-l-5"><b>Login</b></a></p>

            <br>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

	<!-- Preloader -->
<!-- 	<div class="preloader">
  	<div class="cssload-speeding-wheel"></div><br>
  	<div class="text-primary text-center" style="margin-top: 27%;">The app is loading...Please Wait</div>

</div> -->




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