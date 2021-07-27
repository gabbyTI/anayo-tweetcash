<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
include "head.php";
?>
   <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Change Profile
                        </header>
                        <div class="panel-body">

<form method="post" action="profile">
<table class="ui striped celled table customtable feedbacktable">
							<tbody>
<tr>
<td colspan="2">
<?php

if ($_POST) {
$username =saiful($_POST["username"]);
$namalengkap =saiful($_POST["namalengkap"]);

$pm =saiful($_POST["pm"]);
$btc =saiful($_POST["btc"]);
$fasapay =saiful($_POST["fasapay"]);

$bank =saiful($_POST["bank"]);
$norek =saiful($_POST["norek"]);
$nama =saiful($_POST["nama"]);

$alamat =saiful($_POST["alamat"]);
$kota =saiful($_POST["kota"]);
$country =saiful($_POST["country"]);
$kodepos =saiful($_POST["kodepos"]);
$password =md5(saiful($_POST["password"]));


if($password!=$r['password']){ 

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Old Password WRONG<br />";

}
if($password==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input Password<br />";

}


if($error == 1)
{
print $errormsg."<br /><br />";
} else {

$queryb = "UPDATE tb_users SET namalengkap='$namalengkap', alamat='$alamat', kota='$kota', country='$country', kodepos='$kodepos', bitcoin='$btc', perfectmoney='$pm', bank='$bank', norek='$norek', nama='$nama'  WHERE username='$username'";
mysql_query($queryb) or die(mysql_error());

$emailku=$r["email"];
$userku=$r["username"];
$hpku=$r["phone"];

$to = $emailku; 
$subject = "Profile Change ". $namaweb ."";
$from = $emailweb;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$emailweb."\r\n". 
            'Reply-To: '.$emailweb."\r\n" .
            'X-Mailer: PHP/' . phpversion();

$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Profile Change {$namaweb}</div>
    <br />

Congratulation! Edit Profile Complete.<br />
Your Detail Account : <br>
<br />

Username: <b>{$userku}</b><br />
Your Name: <b>{$namalengkap}</b><br />
Email: <b>{$emailku}</b><br />
Phone: <b>{$hpku}</b><br />

Bank: <b>{$bank}</b><br />
Account Number: <b>{$norek}</b><br />
Account Holder: <b>{$nama}</b><br />

Perfect Money: <b>{$pm}</b><br />
Bitcoin: <b>{$btc}</b><br />
Fasapay: <b>{$fasapay}</b><br />


<br><br>
Support {$namaweb}<br />
</div></BODY></HTML>";

if(mail($to, $subject, $message, $headers)){
echo ''; } else{ echo ''; }


?>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=index">
<?

echo " Change Profile Success ";
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
									<td width="70%"><input type="text" name="username" class="form-control"  value="<? echo $r["username"];?>" readonly /></td>
								</tr>
								<tr>
									<td style="padding-left:20px;">Email</td>
									<td><input type="text" class="form-control" value="<? echo $r["email"];?>" readonly /></td>
								</tr>
								
								<tr>
									<td style="padding-left:20px;">Country</td>
									<td><input type="text" class="form-control" value="<? echo $r["country"];?>" readonly /></td>
								</tr>
								
                                <tr>
									<td style="padding-left:20px;">Mobile Number</td>
									<td><input type="text" class="form-control" value="<? echo $r["phone"];?>" readonly /></td>
								</tr>
								<tr>
									<td style="padding-left:20px;">Registration Date</td>
									<td><input type="text" class="form-control" value="<? echo date("d M Y ",$r["joindate"]);?>" readonly /></td>
								</tr>
								<tr>
									<td style="padding-left:20px;">Upline Username</td>
									<td><input type="text" class="form-control" value="<? echo $r["referer"];?>" readonly /></td>
								</tr>

<tr>
									<td style="padding-left:20px;">Full Name</td>
									<td><input type="text" class="form-control" name="namalengkap" value="<? echo $r["namalengkap"];?>" readonly /></td>
								</tr>
								
									<tr>
									<td style="padding-left:20px;">Your Bitcoin Wallet Address</td>
									<td><input type="text" name="btc" class="form-control" value="<? echo $r["bitcoin"];?>" /></td>
								</tr>
							<tr>
									<td style="padding-left:20px;">Holder</td>
									<td><input type="text" name="nama" class="form-control" value="<? echo $r["nama"];?>" readonly /></td>
								</tr>
							<tr>
									<td style="padding-left:20px;">Your Password</td>
									<td><input type="password" name="password" class="form-control" value="" /></td>
								</tr>

								<tr>
									<td style="padding-left:20px;">Referral Link</td>
									<td bgcolor="#FFFAEA" class="upp" width="600px" align="left">
										<strong>http://<? echo $namaweb; ?>/<? echo $r["username"];?></strong>
									</td>
								</tr>
							<tr>
									<td colspan="2" style="text-align:center;">
										<button type="submit"  class="btn btn-info"><i class="edit icon"></i>Edit Profile
									</td>
								</tr>
							</tbody>
						</table>
					</form>
</div></div> 

    </div>
<?
include "foot.php";
?>
