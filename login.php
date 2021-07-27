<?
session_start();

include "config.php";
include "fungsi.php";
global $c;
include "data.php";
global $config;

$webreg="select * from settweb where id='1'";
$webresg=mysql_query($webreg) or die(mysql_error());
$webreg=mysql_fetch_array($webresg);
$webredl=$webreg['loginen'];
$webredt=$webreg['testimony'];


if ($_GET["action"]=="logout") {
if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
{
$HTTP_COOKIE_VARS["username"] = "";
setcookie(username,"x",time() - 7776000);
$HTTP_COOKIE_VARS["usPass"] = "";
setcookie(password,"x",time() - 7776000);
header("Location: login.php");
exit();
}
}


if ($_POST['username']) {

$username=saiful($_POST['username']);
//md5
$password=md5(saiful($_POST['password']));
$passwd=saiful($_POST['password']);
$ip = $_SERVER['REMOTE_ADDR'];

if($_POST['captcha'] != $_SESSION['captcha']){
header("Location: login.php?error=3");
}else{


if ($username==NULL) {
header("Location: login.php?error=1");
}else{

if ($password==NULL) {
header("Location: login.php?error=2");
}else{


$query = mysql_query("SELECT * FROM tb_users WHERE username = '$username'") or die(mysql_error());
if(mysql_num_rows($query) == 0)
{
header("Location: login.php?error=5");
} else {
$data = mysql_fetch_array($query);

if($data['password'] != $password) {
header("Location: login.php?error=4");
}else{
$query = mysql_query("SELECT * FROM tb_users WHERE username = '$username'") or die(mysql_error());
$row = mysql_fetch_array($query);
$nicke=$row['username'];
$passe=$row['password'];


setcookie("usNick",$nicke,time()+3600);
setcookie("usPass",$passe,time()+3600);

setcookie("username",$nicke,time()+3600);
setcookie("password",$passe,time()+3600);

$lastlogdate=time();
$lastip = $_SERVER['REMOTE_ADDR'];

$querybt = "UPDATE tb_users SET lastlogdate='$lastlogdate', lastiplog='$lastip' WHERE username='$nicke'";
mysql_query($querybt) or die(mysql_error());
header("Location:coin/index.php");

}
}
}}

}}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>LOGIN</title>
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
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
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

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.php">HOME</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#ACCOUNT" data-toggle="dropdown-submenu" aria-expanded="false">ACCOUNT</a><div class="dropdown-menu"><a class="dropdown-item" href="login.php"><span class="mbri-play mbr-iconfont mbr-iconfont-btn" style="color: rgb(122, 198, 115);"></span>LOGIN</a><a class="dropdown-item" href="register.php"><span class="mbri-play mbr-iconfont mbr-iconfont-btn" style="color: rgb(122, 198, 115);"></span>SIGN UP</a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-warning-outline btn-warning" href="ideology.php">IDEOLOGY</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="support.php">SUPPORT</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-secondary" href="about.php">ABOUT</a></li><?

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
<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding mbr-after-navbar" id="msg-box1-n" style="background-color: rgb(105, 179, 180); padding-top: 120px; padding-bottom: 0px;">

    <div class="container">
        <div class="row">


            


            <div class="mbr-table-md-up">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                    <h2 class="mbr-info-subtitle mbr-section-subtitle"></h2>
                    <h3 class="mbr-info-title mbr-section-title display-2">ENTER YOUR DETAILS TO LOGIN OR </h3>
                </div>

                <div class="mbr-table-cell col-md-4">
                    <div class="text-xs-center"><a class="btn btn-primary" href="register.php">SIGN UP</a></div>
                </div>
            </div>


        </div>
    </div>
</section>

  <section id="content" class="m-t-lg wrapper-md animated fadeInUp" class="mbr-section mbr-parallax-background" id="content5-l" style="background-image: url(assets/images/jumbotron.jpg); padding-top: 0px; padding-bottom: 0px;">   
    <div class="container aside-xxl">
    <?

    if ($loginen==1)
{
    ?>
 
      <section class="panel panel-default bg-white m-t-lg">
        <form action="login.php" method="post" class="panel-body wrapper-lg">
        
<?
if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
{
?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=coin/index.php">
<?
exit();
}
?>



<?
if($_GET['error'] == 1)
{
print "<b>Error</b> - Input Username <br /><br/>";
}

if($_GET['error'] == 2)
{
print "<b>Error</b> - Input Password<br /><br/>";
}

if($_GET['error'] == 3)
{
print "<b>Error</b> - Invalid Captcha<br><br>";
}

if($_GET['error'] == 4)
{
print "<b>Error</b> - Invalid Password<br /><br />";
}
?>

<div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
   
          <div class="form-group">
            <label class="control-label">Username</label>
            <input type="username" placeholder="Username" name="username" required class="form-control input-lg">
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" id="inputPassword" placeholder="Password" required name="password" class="form-control input-lg">
          </div>


<div class="form-group">
<img src="coin/captcha.php" />

             </div>
            <div class="form-group pull-right">
                <div class="input-icon right"><input type="text" placeholder="Captcha" name="captcha" class="form-control" required></div>
            </div>
 
<br>
          
          <button type="submit" class="btn btn-warning btn-block">Sign in</button>
          <div class="line line-dashed"></div>
          <a href="" class="btn btn-success btn-block">Reset Password</a>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="register.php" class="btn btn-warning btn-block">Create an account</a>

        </form>
        </div>
               </div>
                 
      </section>
    </div> <?   }
    else {
        ?>
    <?echo "<font color=\"#cc0000\"><b> <h2><p> LOGIN SYSTEM CURRENTLY NOT AVAILABLE.</p></h2></b></font><br><br>"?>
        <?  }                                 

?>
  </section>
  <section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-e" style="background-color: rgb(46, 46, 46); padding-top: 30px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="assets/images/logo.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-5">
                <p></p><p><strong><a href="about.php">About</a></strong><br><? echo $siname ?> is not a financial institution.<br><? echo $siname ?> only is an online social platform to connect participants and there is no central account..<span style="font-size: 0.875rem; line-height: 1.5;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contacts</strong><br>
Email: <a href="support.php" class="text-success"><? echo $suname ?></a><br><br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p></p><p><strong>Links</strong><br>
<a href="login.php" class="text-success">LOGIN</a><br><a href="register.php" class="text-success">SIGN UP</a></p><br><p><a href="about.php" class="text-success">ABOUT</a><a href="register.php"><br></a><br></p>
            </div>

        </div>
    </div>
    <div><p>&copy; 2017 <? echo $siname ?>. All rights reserved</p><p></p></div>
</section>

  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
     
    </div>
  </footer>
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  
  
  
  
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/593a25594374a471e7c522b3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  

</body>
</html>