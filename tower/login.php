<?
session_start();

include "../config.php";
include "../fungsi.php";
global $c;
include "../data.php";
global $config;

if ($_GET["action"]=="logout") {
if(isset($_COOKIE["useradmin"]) && isset($_COOKIE["passadmin"]))
{
$HTTP_COOKIE_VARS["useradmin"] = "";
setcookie(username,"x",time() - 7776000);
$HTTP_COOKIE_VARS["passadmin"] = "";
setcookie(password,"x",time() - 7776000);
header("Location: index.php");
$HTTP_COOKIE_VARS["username"] = "";
setcookie(username,"x",time() - 7776000);
$HTTP_COOKIE_VARS["password"] = "";
setcookie(password,"x",time() - 7776000);
header("Location: index.php");
$HTTP_COOKIE_VARS["usNick"] = "";
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


if($_POST['captcha'] != $_SESSION['captcha']){
header("Location: login.php?error=3");
}else{


if ($username==NULL) {
header("Location: login.php?error=1");
}else{

if ($password==NULL) {
header("Location: login.php?error=2");
}else{

$query = mysql_query("SELECT username,password FROM settweb WHERE username = '$username'") or die(mysql_error());
if(mysql_num_rows($query) == 0)
{
header("Location: login.php?error=5");
} else {
$data = mysql_fetch_array($query);
if($data['password'] != $password) {
header("Location: login.php?error=4");
}else{
$query = mysql_query("SELECT username,password FROM settweb WHERE username = '$username'") or die(mysql_error());
$row = mysql_fetch_array($query);
$nicke=$row['username'];
$passe=$row['password'];


setcookie("usNick",$nicke,time()+3600);
setcookie("usPass",$passe,time()+3600);

setcookie("useradmin",$nicke,time()+3600);
setcookie("passadmin",$passe,time()+3600);


$lastlogdate=time();
$browser=$_SERVER['HTTP_USER_AGENT']; 
$refer= $_SERVER['HTTP_REFERER'];
$lastip = $_SERVER['REMOTE_ADDR'];

$querybt = "UPDATE settweb SET lastlogdate='$lastlogdate', lastiplog='$lastip' WHERE username='$nicke'";
mysql_query($querybt) or die(mysql_error());
$queryteryoked = "INSERT INTO logadmin (date, ip, browser,refer) 
VALUES('$lastlogdate','$lastip','$browser','$refer')";
mysql_query($queryteryoked)or die(mysql_error());
header("Location:index.php");

}
}
}}

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login Admin</title>

        <link href="css/style.default.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body class="signin">
        
        
        <section>
            
            <div class="panel panel-signin">
                <div class="panel-body">
                    <div class="logo text-center">
                        <img src="images/logo-primary.png" alt="Chain Logo" >
                    </div>
                   
  <div class="mb30"></div>
    <form action="login.php" method="post" class="form">
      

             
<?
if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
{
?>
<a href="index.php" onclick="window.location.reload()">You Are login, click here to Dashboard</a> or <a href="logout"> Logout </a></div></div>
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


if($_GET['error'] == 5)
{
print "<b>Error</b> - Account Not Found<br /><br />";
}
?>

 <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div><!-- input-group -->

 <div class="input-group mb15">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div><!-- input-group -->
<div class="input-group mb15">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                           <input type="text" placeholder="Captcha" name="captcha" class="form-control" required>
                        </div><!-- input-group -->
 
<img src="captcha.php" />

           
            <div class="clearfix"></div>
 <div class="clearfix">
                            <div class="pull-left">
                                <div class="ckbox ckbox-primary mt10">
                                
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success">Sign In <i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>                      
                  
    </form>
 </div><!-- panel-body -->
                <div class="panel-footer">
                  
                </div><!-- panel-footer -->
            </div><!-- panel -->
            
        </section>


        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>

        <script src="js/custom.js"></script>

    </body>
</html>
