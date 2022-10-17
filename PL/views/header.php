<?php
    session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Raise and Rise</title>
<!-- Stylesheets -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/revolution-slider.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/donation.css" rel="stylesheet">
<link rel="stylesheet" href="../css/login.css">
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="../css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
     <header class="main-header site-header">
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="outer-container clearfix">
            	<!--Logo Box-->
                <div class="logo-box">
                	<div class="logo"><a href="index.html"><img src="../images/logo.png" alt="" style="margin-top:40px"></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="fundraiser.php">Donation</a></li>
                                <li><a href="contactus.php">Contact</a></li>
                                <?php
                                    if(!isset($_SESSION['id'])){
                                ?>
                                <li><a href="login.php">Login</a></li>
                                <?php
                                    }
                                ?>
                                <li><a href="manage_donation.php">Manage Donations</a></li>
                                <?php
                                    if(isset($_SESSION['id'])){
                                ?>
                                <li><a href="logout.php">Logout</a></li>
                                <?php
                                    }
                                ?>
                                <li>
                                    <a>
                                        <form method="post" action='search.php'>
                                            <input type="text" id="search" class="form-control me-2" name="search" placeholder="Search..." style="width: 50%">
                                            <input type="submit" value="search" class="theme-btn btn-style-two" id="submit" name="submit" style="width: 30%">
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                    <!--Follow Us-->
                    <div class="follow-us">
                    	<span class="text">Follow us</span> <a href="index.html#"><span class="fa fa-facebook-f"></span></a> <a href="index.html#"><span class="fa fa-twitter"></span></a>
                    </div>
                    
                    
                </div><!--Nav Outer End-->
                
                <!-- Hidden Nav Toggler -->
                <div class="nav-toggler">
                <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                </div><!-- / Hidden Nav Toggler -->
                    </div>
                    
        </div>
    
    </header>
    <!--End Main Header -->
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="../images/logo-2.png" alt=""></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            <!-- .navigation -->
                <ul class="navigation clearfix">

                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="fundraiser.php">Donation</a></li>
                                <li><a href="contactus.php">Contact</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="manage_donation.php">Manage Donations</a></li>
                       
                </ul>
            </div><!-- /.Side-menu -->
        
            <div class="social-icons">
                <ul>
                    <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section><!-- / Hidden Bar -->
    <!-- ---------------------------------------------------------------------------------------------------------------------- -->                    

    
        <!--About Section-->