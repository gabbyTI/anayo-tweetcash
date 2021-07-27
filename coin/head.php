<?
$kstatre="select * from settph where id='1'";
$kstatres=mysql_query($kstatre) or die(mysql_error());
$kstatre=mysql_fetch_array($kstatres);
$kstatred=$kstatre['statr'];


$kstattwp="select * from tb_users WHERE username='$user'";
$kstattwwp=mysql_query($kstattwp) or die(mysql_error());
$kstattwp=mysql_fetch_array($kstattwwp);
$kstattpuser=$kstattwp["statr"];

if ($kstatred == YES){

if ($kstattpuser == 0){
    $myphname=$phname;
}
if ($kstattpuser == NO){
    $myphname=$rphname;
}
}
else{
$myphname=$phname;
}

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="MY PORTAL">
  <title><? echo $title ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="box.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
   <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  
  
  
     <!--
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
     <!-- <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  <!--<link href="box.css" rel="stylesheet">
<script type="text/javascript" language="JavaScript">
function showorhide(id){
   if(document.getElementById(id)){    //check the element exists and can be accessed
       var ele = document.getElementById(id);    //get hold of the element
       if(ele.style.display=="none"){   //see if display property is set to none
           ele.style.display="block";       
       }else{
           ele.style.display="none";     
       }
   }
} 
 
</script>
-->




  
  
  
</head>
<body>
<section id="ext_menu-8">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                         <a href="../index.php" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="../index.php"><? echo $siname ?><br>Be Financially Liberated<br></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index">Dashboard</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#PROVIDE HELP" aria-expanded="false" data-toggle="dropdown-submenu"><? echo $phname; ?></a><div class="dropdown-menu"><a class="dropdown-item" href="providehelp"><? echo $phname; ?> Request</a><a class="dropdown-item" href="hph"><? echo $phname; ?> History</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#GET HELP" aria-expanded="false" data-toggle="dropdown-submenu"><? echo $ghname; ?></a><div class="dropdown-menu"><a class="dropdown-item" href="gethelp"><? echo $ghname; ?> Request</a><a class="dropdown-item" href="hgh"><? echo $ghname; ?> History</a></div></li><li class="nav-item dropdown open"><a class="nav-link link dropdown-toggle" href="#PROFILE" data-toggle="dropdown-submenu" aria-expanded="true">Profile</a><div class="dropdown-menu"><a class="dropdown-item" href="profile">Profile</a><a class="dropdown-item" href="changeavatar">Change Picture</a><a class="dropdown-item" href="network">Referrals</a><?
$user=$r["username"]; 
$tablab = mysql_query("SELECT * FROM tb_users where username='$user'"); 
$registrob = mysql_fetch_array($tablab);
$deriz=$registrob["referer"];
$mangr=$registrob["manager"];
if($mangr=='1'){ 
echo "
 <li><a href=\"managerview\"> View Trx My Downline</a></li>
"; }
else {}
?><a class="dropdown-item" href="changepass">Change Password</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#MORE" aria-expanded="false" data-toggle="dropdown-submenu">More</a><div class="dropdown-menu"><a class="dropdown-item" href="information">News</a><a class="dropdown-item" href="support">Support</a><a class="dropdown-item" href="supportdetail">Support Tickets</a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-secondary" href="logout">Logout</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
  <section id="container">
<section class="vbox" style="background-image: url(assets/images/jumbotron.jpg);">          
            <section class="scrollable padder">
<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><h2>Welcome to Member Area <? echo $r["username"]; ?></h2></li>
                
              </ul>
              <div class="m-b-md">
                <h3 class="m-b-none">Dashboard</h3>
                <small><h5>Welcome back, <? echo $r["username"]; ?></h5></small>
</section>
              </div>