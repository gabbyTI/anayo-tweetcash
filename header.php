<?
session_start();
require('config.php');
require('data.php');
require('fungsi.php');

$webreg="select * from settweb where id='1'";
$webresg=mysql_query($webreg) or die(mysql_error());
$webreg=mysql_fetch_array($webresg);
$webredl=$webreg['loginen'];
$webredr=$webreg['registeren'];
$webredt=$webreg['testimony'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title><? echo $title ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
</head>
<body>
<section id="ext_menu-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.php" class="navbar-logo"><img src="assets/images/logo.png" alt=""></a>
                        <a class="navbar-caption" href="index.php"><? echo $siname ?><br>Be Financially Liberated<br></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.php">HOME</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#ACCOUNT" data-toggle="dropdown-submenu" aria-expanded="false">ACCOUNT</a><div class="dropdown-menu"><a class="dropdown-item" href="login.php"><span class="mbri-play mbr-iconfont mbr-iconfont-btn" style="color: rgb(122, 198, 115);"></span>LOGIN</a><a class="dropdown-item" href="register.php"><span class="mbri-play mbr-iconfont mbr-iconfont-btn" style="color: rgb(122, 198, 115);"></span>SIGN UP</a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-warning-outline btn-warning" href="ideology.php">IDEOLOGY</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="support.php">SUPPORT</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-secondary" href="about.php">ABOUT</a></li> <?

    if ($testimony==1)
{
    ?>
 <li class="nav-item nav-btn"><a class="nav-link btn btn-secondary" href="testimony.php">TESTIMONIES</a></li><?}?></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
