<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
$Page = $_SERVER['REQUEST_URI'];

//if()
 
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIIT Property System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/AdminLTE-master/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/AdminLTE-master/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/AdminLTE-master/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/AdminLTE-master/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/AdminLTE-master/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/AdminLTE-master/plugins/iCheck/flat/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    nav>a{
      background-color: #3b1f62;
      transition-duration: 0.6s;
    }
    nav>a:hover {
      background-color: #632E9B;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:#fff">
<div class="wrapper" style="background-color:#CCC">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../AdminLTE-master/index2.html" class="logo" style="background-color:#632E9B">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>IIT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php bloginfo('template_url'); ?>/images/header/logo1.png" style="height: 40px;" ></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#3b1f62">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="icon-admin" href=""  style="padding:10px 20px; float: left; color: white;"><i class="fa fa-home fa-2x" ></i> </a>

      <a class="icon-admin" href=""  style="padding:10px 20px; float: right; color: white;"><i class="fa fa-sign-out fa-2x" ></i> </a>
      <a class="icon-admin" href=""  style="padding:10px 20px; float: right; color: white; "><i class="fa fa-user fa-2x" ></i></a>
      <a href=""  style="padding:10px 20px; float: right; color: white; font-weight: bold; text-decoration: none; font-size: 21px; ">Hello P'Mod</a>



      
    </nav>
  </header>
  
  <aside class="main-sidebar" style="background-color:#3b1f62">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
	  	<li class="treeview <?php if($Page == '/property/campus-menu/' || $Page == '/property/create-campus/'){?>active<?php }?>">
          <a href="#">
            <i class="fa fa-building"></i> <span>Campus</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($Page == '/property/campus-menu/'){?>class="active"<?php }?>><a href="http://localhost/property/campus-menu"><i class="fa fa-circle-o"></i>All Campus</a></li>
            <li <?php if($Page == '/property/create-campus/'){?>class="active"<?php }?>><a href="http://localhost/property/create-campus"><i class="fa fa-circle-o"></i>Add Campus</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Properties</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li <?php if($Page == '/property/reservation-menu/'){?>class="active"<?php }?>><a href="http://localhost/property/reservation-menu"><i class="fa fa-circle-o"></i>All Property</a></li>
            <li <?php if($Page == '/property/contract-menu/'){?>class="active"<?php }?>><a href="http://localhost/property/contract-menu"><i class="fa fa-circle-o"></i>Add Property</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($Page == '/property/reservation-menu/' || $Page == '/property/contract-menu/'){?>active<?php }?>">
          <a href="#">
            <i class="fa fa-book"></i> <span>Contract and Reservation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($Page == '/property/reservation-menu/'){?>class="active"<?php }?>><a href="http://localhost/property/reservation-menu"><i class="fa fa-circle-o"></i>Reservation</a></li>
            <li <?php if($Page == '/property/contract-menu/'){?>class="active"<?php }?>><a href="http://localhost/property/contract-menu"><i class="fa fa-circle-o"></i>Contract</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li <?php if($Page == '/property/reservation-menu/'){?>class="active"<?php }?>><a href="http://localhost/property/reservation-menu"><i class="fa fa-circle-o"></i>All User</a></li>
            <li <?php if($Page == '/property/contract-menu/'){?>class="active"<?php }?>><a href="http://localhost/property/contract-menu"><i class="fa fa-circle-o"></i>Add User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Expense</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../AdminLTE-master/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../AdminLTE-master/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../AdminLTE-master/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../AdminLTE-master/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
    <br>
    <br>
    <br>
  </aside>
  
  
		<div id="content" class="site-content">
		<div class="inner-wrap">

<!-- jQuery 3 -->
<script src="<?php bloginfo('template_url'); ?>/AdminLTE-master/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php bloginfo('template_url'); ?>/AdminLTE-master/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php bloginfo('template_url'); ?>/AdminLTE-master/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php bloginfo('template_url'); ?>/AdminLTE-master/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php bloginfo('template_url'); ?>/AdminLTE-master/dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="<?php bloginfo('template_url'); ?>/AdminLTE-master/plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
<script src="<?php bloginfo('template_url'); ?>/AdminLTE-master/dist/js/demo.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
