<?
session_start();
session_destroy();
require('../config.php');
require('../data.php');
require('../fungsi.php');
$title="LOGOUT";
?>
<?
if(isset($_COOKIE["username"]) && isset($_COOKIE["username"]))
{

$_COOKIE["username"] = "";
setcookie(username,"x",time() - 7776000);

$_COOKIE["password"] = "";
setcookie(password,"x",time() - 7776000);

}


if(isset($_COOKIE["usNick"]) && isset($_COOKIE["usPass"]))
{

$_COOKIE["usNick"] = "";
setcookie(usNick,"x",time() - 7776000);

$_COOKIE["usPass"] = "";
setcookie(usPass,"x",time() - 7776000);

}



?>
<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title><? echo $title ?></title>
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
 <form action="login" method="post" class="panel-body wrapper-lg">
<br>
<center>
You are Logout....
</center>
<br>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=../login.php?action=logout">

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