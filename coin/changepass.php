<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Change Password";
include "head.php";
?>
     <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Change Password
                        </header>
                        <div class="panel-body">
<form method="post" action="changepass">
<table class="ui striped celled table customtable feedbacktable">

							<tbody>
<tr>
<td colspan="2">
<?php

if ($_POST) {
$username =saiful($_POST["username"]);
$pass=saiful($_POST["pass"]);
$password =md5(saiful($_POST["password"]));
$passme=md5(saiful($_POST["pass"]));

if(strlen($pass) < 6)
{
$error = 1;
$errormsg .= "<p><br><br><b>Error -</b> Password min 6 characters.</p>";
}


if($password!=$r['password']){ 

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Old Password WRONG<br />";

}
if($password==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input Old Password<br />";

}
if($pass==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input Password<br />";

}

if($error == 1)
{
print $errormsg."<br /><br />";
} else {

$queryb = "UPDATE tb_users SET password='$passme' WHERE username='$username'";
mysql_query($queryb) or die(mysql_error());

$emailku=$r["email"];
$userku=$r["username"];

$to = $emailku; 
$subject = "Password Change ". $namaweb ."";
$from = $emailweb;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$emailweb."\r\n". 
            'Reply-To: '.$emailweb."\r\n" .
            'X-Mailer: PHP/' . phpversion();

$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Password Change {$namaweb}</div>
    <br />

Congratulation! Edit Password Complete.<br />
Your Detail Account : <br>
<br />
Email: <b>{$emailku}</b><br />
Username: <b>{$userku}</b><br />
Password: <b>{$pass}</b><br />


<br><br>
Support {$namaweb}<br />
</div></BODY></HTML>";

if(mail($to, $subject, $message, $headers)){
echo ''; } else{ echo ''; }




?>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=logout">
<?

echo " Change Password Success ";
exit();
}

}



$uzer=$_COOKIE["usNick"];

$pazz=$_COOKIE["usPass"];



$sql = "SELECT * FROM tb_users WHERE username='$uzer'";

$result = mysql_query($sql);        

$row = mysql_fetch_array($result);



if ($pazz != $row["password"]){ exit(); }



?>


</td>
</tr>
								
								
								<tr>
									<td style="padding-left:20px;" width="30%">Username</td>
									<td  width="70%"><input type="text" class="form-control" name="username" value="<? echo $r["username"];?>" readonly /></td>
								</tr>
								
<tr>
									<td style="padding-left:20px;">New Password</td>
									<td><input type="password" name="pass" class="form-control" placeholder="Input Your New Password" required value="" /></td>
								</tr>
<tr>
									<td style="padding-left:20px;">Your Password</td>
									<td><input type="password" name="password" class="form-control" placeholder="Input Your Old Password" required value="" /></td>
								</tr>


								
								
								<tr>
									<td colspan="2" style="text-align:center;">
										<button type="submit"  class="btn btn-info"><i class="edit icon"></i>Change Password
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	

<?
include "foot.php";
?>
