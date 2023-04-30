<!DOCTYPE html>
<html lang="en">
<?php
ini_set("display_errors",0);
?>
<?php
session_start();
if($_SESSION['id'])
{
 $id=$_SESSION['id'];
}
?>	
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>BVR SOFTWARE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/icon/bvr.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- preloader area end -->
    <!-- header area start -->
	<form action="../lib/action.php" enctype="multipart/form-data" method="post" name="dropdownmenu">
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="menu-area">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="logo">
                            <a href="#"><img src="../assets/img/icon/logo.png" alt="BVR Software"></a>
                        </div>
                    </div>
                    <div class="col-md-9 hidden-xs hidden-sm">
                        <div class="main-menu">
                            <nav class="nav-menu">
                                <ul>
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="gellary.php">Gellary</a></li>
									<li><a href="documents.php">My All Documents</a></li>
                                    <li><a href="#contact">Contact</a></li>
									<?php
									if($_SESSION['id'])
										{
										  ?>
											 <li class="dropdown">
											 <img src="../upload/sanjeev.jpg" class="img-circle dropdown-toggle" data-toggle="dropdown" height="30"                                               width="50" alt="Cinque Terre"><span class="caret"></span>
											<ul class="dropdown-menu">
											<li style="width:100%;"><a href="#" style="padding-top: 3px; padding-right: 20px;padding-bottom: 3px;padding-left: 10px; color:#000000">profile</a></li>
											<li style="width:100%;"><a href="#" style="padding-top: 3px; padding-right: 20px;padding-bottom: 3px;padding-left: 10px; color:#000000">change password</a></li>
											<li style="width:100%;" class="last"><a href="javascript:logout111(<?=$id?>)" style="padding-top: 3px; padding-right: 20px;padding-bottom: 3px;padding-left: 10px; color:#000000">Log Out</a></li>
										  </ul>		
											 </li>
											 <?php
										}
										else
										{
											 ?>
											 <li><a href="login.php">Login/singup</a></li>
											 <?php
										}
									?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 visible-sm visible-xs">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	                                        <input type="hidden" name="act" />
                                            <input type="hidden" name="id" />
											</form>
    <!-- header area end -->
