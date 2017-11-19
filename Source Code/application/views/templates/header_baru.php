<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('assets/'); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/'); ?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo base_url('assets/'); ?>fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/font.css" type="text/css"/>
<link href="<?php echo base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url('assets/'); ?>js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="<?php echo site_url('home'); ?>" class="logo">
        Cinema 21
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
                <li>
                    <?php echo tanggal() ?>
                </li>
                
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
 
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url('assets/'); ?>images/1.png">
                <span class="username">Dea Pricillia</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo site_url('Login/logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->       
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo site_url('film/film_control'); ?>">
                        <i class="fa fa-film"></i>
                        <span>Data Film</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('customer/customer_control'); ?>">
                        <i class="fa fa-users"></i>
                        <span>Data Customer</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('pesan/pesan_control'); ?>">
                        <i class="fa fa-inbox "></i>
                        <span>Pesan </span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('izin/izin_control'); ?>">
                        <i class="fa fa-inbox "></i>
                        <span>Izin </span>
                    </a>
                </li>
        </div>

        
        <!-- sidebar menu end-->
    </div>
</aside>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">

    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        
    </div>
  </div>
</div>
</section>