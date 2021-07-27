<?php
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
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
      
<div class="row">
<div class="col-lg-12">
<div class="panel panel-green">
    <a href="#" class="btn btn-success btn-block">YOUR ACCOUNT HAS BEEN SUSPENDED</a>

</div>

<form method="post" action="blocked">
<center><div class="panel panel-red">
    <a href="#" class="btn btn-success btn-block">REQUEST UNBLOCK</a></div>
<br>
<br><br>
</center>
						
<div class="table-responsive">
<table class="table table-hover table-bordered">


						<tbody>


<tr>
<td colspan="2">

<?
if ($_POST) {
$id=saiful($_POST['id']);
$name=saiful($_POST["username"]);
$email=saiful($_POST["email"]);
$subject=saiful($_POST["subject"]);
$comments=saiful($_POST["comments"]);

if($name==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input your name<br />";

}
if($email==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input Your Email<br />";

}

if ($subject==""){

$error = 1;

$errormsg .= "<b>Error - </b> Please Select a Topic !<br />";

}

if ($comments==""){

$error = 1;

$errormsg .= "<b>Error - </b> Please Input Your Messages!<br />";

}

if($error == 1)

{

print $errormsg;

} else {

$eltiempo=time();
$query = "INSERT INTO support (name, email, subject, comments,date) VALUES('$name','$email','$subject','$comments','$eltiempo')";

mysql_query($query) or die(mysql_error());
echo "Support Has Been Sent. Thanks<br><br>";
include("foot.php"); ?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=supportdetail">
<?
           
exit();

}

}

?>
</td>
</tr>



								
								<tr>
									<td style="padding-left:20px;">UserName</td>
									<td><input type="text" class="form-control" name="username" required value="<? echo $r["username"]; ?>" readonly/></td>
								</tr>
<tr>
									<td style="padding-left:20px;">Email</td>
									<td><input type="text" class="form-control" name="email" required value="<? echo $r["email"]; ?>" readonly/></td>
								</tr>
								<tr>
									<td style="padding-left:20px;">Subject</td>
									<td>Pls Select a Topic :<br> <select name="subject"> <option value="Participant Is Blocked">Participant Is Blocked</option> </select></td>
								</tr>
								
								
								<tr>
									<td style="padding-left:20px;">Message</td>
									<td><textarea type="text" class="form-control" required name="comments" /></textarea></td>
								</tr>

								<tr>
									<td colspan="2" style="text-align:center;">
										<button type="submit" class="btn btn-primary">Submit Report</button>
									</td>
								</tr>
							</tbody>
						</table>
</div>
					</form>
</div>
			</div>

 
          <a href="logout" class="btn btn-default btn-block">BACK TO HOME</a>
        </form>
    </div>
  </section>
  
      <section class="panel panel-default bg-white m-t-lg">

<div class="row">
<div class="col-lg-12">
<div class="panel panel-green">
    <a href="#" class="btn btn-success btn-block">REPLY FROM CRO</a>

                                          
<div class="table-responsive">
<table class="table table-hover table-bordered">
   <thead><tr>
                                               
                                             <th width="10%">Date</th>
                                                <th width="50%">Messages</th>
                                                <th width="30%">Reply From CRO</th>
                                                
</tr>

                                        </thead>

                                        <tbody>
<?
$lole=$r["username"];
$tabla = mysql_query("SELECT * FROM support where name='$lole' ORDER BY id DESC limit 0,1000000"); 
while ($registro = mysql_fetch_array($tabla)) { 
		echo "
<tr>
<td>". date("d M Y ",$registro["date"]) ."</td>
<td>". $registro["comments"] ."</td>
<td>". $registro["reply"] ."</td>

</tr>";
		}
		?>
</tbody>
</table>
</div>

<br> <br> 
</div></div></div>

</div></div></div>
</div></div></div>
</div></div></div>
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