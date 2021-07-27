<?
session_start();
session_destroy();
require('../config.php');
require('../data.php');
require('../fungsi.php');
?>

<?
if(isset($_COOKIE["useradmin"]) && isset($_COOKIE["useradmin"]))
{
$_COOKIE["useradmin"] = "";
$_COOKIE["passadmin"] = "";
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
    </head>

    <body class="signin">
        
        
        <section>
            
            <div class="panel panel-signin">
                <div class="panel-body">
                    <div class="logo text-center">
                        <img src="images/logo-primary.png" alt="Chain Logo" >
                    </div>
                   
  <div class="mb30"></div>
     


<center>
Logout...
<br><br>
</center>

	
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=login.php?action=logout">

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
