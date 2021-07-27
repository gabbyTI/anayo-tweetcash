<?
session_start();
include "../config.php";
global $c;
include "../data.php";
include "../fungsi.php";
global $config;

?>
<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Member Area</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
           <section class="panel panel-default bg-white m-t-lg">
       <header class="panel-heading text-center">
          <img src="../images/logo.png" width="200">
        </header>
 <form action="" method="post" class="panel-body wrapper-lg">

<?php

if($_POST)
{

$username = $_POST["username"];
$usernamex = mysql_query("SELECT COUNT(*) AS cnt FROM tb_users WHERE username='{$_POST['username']}'");
$usernamex = mysql_fetch_array($usernamex);
$usernamex = $usernamex["cnt"];
$password=rand(11111111,99999999);
$pass=md5($password);

if($_POST['captcha'] != $_SESSION['captcha']){
$error = 1;
$errormsg= "<b>Error -</b> Captcha Wrong<br />";
}

if(!$username)
{
$error = 1;
$errormsg= "<b>Error -</b> Input Username<br />";
}

if(!$usernamex)
{
$error = 1;
$errormsg= "<b>Error -</b> Username Not Found.<br />";
}



$_SESSION['string'] = false;
if($error=='1')
{

print $errormsg;

?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=recover">

<?
exit();
} else {

mysql_query("UPDATE tb_users SET password='$pass' WHERE username='$username'") or die(mysql_error());

$s = mysql_query("SELECT * FROM tb_users WHERE username='{$_POST['username']}'");
$x = mysql_fetch_array($s);
$phonec=$x["phone"];
$userc=$x["username"];
$emailc=$x["email"];


$to = $emailc; 
$subject = "Reset Password ". $namaweb ."";
$from = $emailweb;
     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$emailweb."\r\n".

        'Reply-To: '.$emailweb."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     
    // Compose a simple HTML email message
	$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Reset Password {$namaweb}</div>
    <br />

Reset Password {$namaweb}.<br />
Please find your login details below.<br />
<br />

Username: <b>{$username}</b><br />
Password: <b>{$password}</b><br />

<br>
Support {$emailweb}<br />
</div></BODY></HTML>";

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '';

    } else{

        echo '';

    }

    

print "
<div id=\"container\">
<div class=\"form_wrap\"><center>
<BR>Reset Password Success. Please check Your Inbox / Spam Folder <br />
</div>
</div>
";
     
    
       ?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=../login">

<?  

exit();

}

}

?>
 <div class="form-group">
            <label class="control-label">Username</label>
            <input type="text" placeholder="username" name="username" required class="form-control input-lg">
          </div>
          

<div class="form-group pull-left">
<img src="captcha.php" />

            </div>
            <div class="form-group pull-right">
                <div class="input-icon right"><input type="text" placeholder="Captcha" name="captcha" class="form-control" required></div>
            </div>

<br>
          
          <button type="submit" class="btn btn-warning btn-block">Reset Password</button>
          <div class="line line-dashed"></div>
          
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="../register" class="btn btn-default btn-block">Create an account</a>
<a href="../login" class="btn btn-success btn-block">Login Member</a>
        </form>
      </section>
    </div>
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
  
</body>
</html>