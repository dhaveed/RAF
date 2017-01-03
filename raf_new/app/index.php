<?php
  session_start();
  if(!empty($_SESSION)){
    //do something
  }
  else{
    header("Location: login");
  }
?>
<!DOCTYPE html>
<html lang="en" ng-app="rafApp">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/plugins/images/favicon.png">
<title>Ralph Ventures</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="plugins/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="plugins/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="plugins/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!--Owl carousel CSS -->
<link href="plugins/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="plugins/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/green.css" id="theme"  rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./plugins/plugins/bower_components/sweetalert/sweetalert.css">
<script src="./plugins/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body ng-controller="mainCtrl">
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div><br>
  <div class="text-primary text-center" style="margin-top: 27%;">The app is loading...Please Wait</div>

</div>
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse #logo"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="main">
      <!--This is dark logo icon--><!--This is light logo icon--><h3 style="color:black; padding: 2.4%;" align="center" class="hidden-xs hidden-md hidden-sm">Project Ralph</h3><!--This is light logo text--></span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        <li>
          <form role="search" class="app-search hidden-xs">
            <input type="text" ng-model="search" placeholder="Search..." class="form-control">
            <a href="#"><i class="fa fa-search"></i></a>
          </form>
        </li>
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"><i class="ti-shopping-cart"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu dropdown-cart dropdown-tasks animated slideInUp">
            <li>
                <div class="cart-img"><img src="plugins/plugins/images/chair.jpg"/></div>
                <div class="cart-content"><h5>Rounded Chair</h5><small>$153</small></div>
            </li>
            <li class="divider"></li>
            <li>
                <div class="cart-img"><img src="plugins/plugins/images/chair2.jpg"/></div>
                <div class="cart-content"><h5>Rounded Chair</h5><small>$153</small></div>
            </li>
            <li class="divider"></li>
            <li>
                <div class="cart-img"><img src="plugins/plugins/images/chair3.jpg"/></div>
                <div class="cart-content"><h5>Rounded Chair</h5><small>$153</small></div>
            </li>
            <li class="divider"></li>
            <li> <a class="text-center" href="#/book"> <strong>Checkout</strong> <i class="fa fa-angle-right"></i> </a> </li>
          </ul>
          <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        
        <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
  <!-- Left navbar-header -->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
      <div class="user-profile">
        <div class="dropdown user-pro-body">
          <div><img src="plugins/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
          <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>{{user.fullName}}</span> <span class="caret"></span></a>
              <ul class="dropdown-menu animated flipInY">
                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                <li><a href="#"><i class="ti-wallet"></i> My Orders</a></li>
                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="login"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
        </div>
      </div>
      <div ng-controller="sidebarCtrl">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
          <!-- input-group -->
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
          <!-- /input-group -->
        </li>
        <li class="nav-small-cap m-t-10">--- Main Menu</li>
        <li> <a href="#" class="waves-effect"><i class="icon-home fa-fw"></i> <span class="hide-menu"> Home</span></a>
        </li>
        <li><a href="#/products" class="waves-effect"><i class="icon-grid fa-fw"></i> <span class="hide-menu">Products</span></a></li>
        <li><a href="#/book" class="waves-effect"><i class="icon-briefcase fa-fw"></i> <span class="hide-menu">Bookings</span></a></li>
        <li><a href="#/settings" class="waves-effect"><i class="icon-settings fa-fw"></i> <span class="hide-menu">Account Settings</span></a></li>
        <li><a href="#/help" class="waves-effect"><i class="icon-info fa-fw"></i> <span class="hide-menu">Help</span></a></li>
        <li><a href="logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Logout</span></a></li>
      </ul>
      </div>
    </div>
  </div>
  <!-- Left navbar-header end -->
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Home</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Ralph App</a></li>
            <li class="active">Home</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->

      <!-- Main View Start -->

      <div ui-view></div>

      <!-- Main View End -->
          </div>  
      </div>

      <!-- .right-sidebar -->
      <div class="right-sidebar">
        <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
          <div class="r-panel-body">
            <ul>
              <li>Layout Options</li>
              <li>
                <div class="checkbox checkbox-info">
                  <input id="checkbox1" type="checkbox" class="fxhdr" checked="">
                  <label for="checkbox1"> Fix Header </label>
                </div>
              </li>
              <li>
                <div class="checkbox checkbox-warning">
                  <input id="checkbox2" type="checkbox" class="fxsdr" checked="">
                  <label for="checkbox2" > Fix Sidebar </label>
                </div>
              </li>
              <li>
                <div class="checkbox checkbox-success">
                  <input id="checkbox4" type="checkbox" class="open-close">
                  <label for="checkbox4" > Toggle Sidebar </label>
                </div>
              </li>
            </ul>
            <ul id="themecolors" class="m-t-20">
              <li>With Light sidebar</li>
              <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
              <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
              <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
              <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
              <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
              <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
              <li>With Dark sidebar</li>
              <br/>
              <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
              <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
              <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

              <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
              <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
              <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2016 &copy; RAF Ventures | Developed by <a href="">Revolve Syndications</a> </footer>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
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
<!--Morris JavaScript ->
<script src="plugins/plugins/bower_components/raphael/raphael-min.js"></script>
<script src="plugins/plugins/bower_components/morrisjs/morris.js"></script>-->
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>

<!-- Sparkline chart JavaScript -->
<script src="plugins/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<!--<script src="js/dashboard1.js"></script>-->
<!--Style Switcher -->
<script src="plugins/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

<!-- App's main angular Javascript Files -->
<script src="js/angular.js"></script>
<script src="js/angular-ui-router.js"></script>
<script src="js/app.js"></script>
<script src="js/routes.js"></script>
<script src="js/services.js"></script>
<script src="js/controllers.js"></script>
</body>
</html>
