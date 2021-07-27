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
<div class="panel panel-green">
                                            <div class="panel-heading">Transfer Confirmation</div>
                                            <div class="panel-body">


<?php

 //turn on php error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
            $name     = $_FILES['file']['name'];
            $tmpName  = $_FILES['file']['tmp_name'];
            $error    = $_FILES['file']['error'];
            $size     = $_FILES['file']['size'];
            $ext      = strtolower(pathinfo($name, PATHINFO_EXTENSION));

           



$username=saiful($_POST["username"]);
$userph=saiful($_POST["userph"]);
$idb=saiful($_POST["idb"]);
$idph=saiful($_POST["idph"]);
$usergh=saiful($_POST["usergh"]);
$idj=saiful($_POST["idj"]);
$idgh=saiful($_POST["idgh"]);
$messages=saiful($_POST["messages"]);
$kamiduh=$r["username"];
$autoapp=$eltiempo + 86400;
$tablab = mysql_query("SELECT * FROM tb_users where username='$userph'"); 
$registrob = mysql_fetch_array($tablab);
$derizb=$registrob["phone"];
$derizab=$registrob["email"];

$tablabb = mysql_query("SELECT * FROM tb_users where username='$usergh'"); 
$registrobb = mysql_fetch_array($tablabb);
$derizbb=$registrobb["phone"];
$derizabb=$registrobb["email"];

$tablabbb = mysql_query("SELECT * FROM tb_beli where id='$idb'"); 
$registrobbb = mysql_fetch_array($tablabbb);
$derizbbb=$registrobbb["konfirmasi"];
$paketbbb=$registrobbb["paket"];
$reffbbb=$registrobbb["referer"];


            switch ($error) {
                case UPLOAD_ERR_OK:
                    $valid = true;
                    //validate file extensions
                    if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
                        $valid = false;
                        $response = 'Invalid file extension.';
                    }
                    //validate file size
                    if ( $size/2560/2560 > 2 ) {
                        $valid = false;
                        $response = 'File size is exceeding maximum allowed size.';
                    }
                    //upload file
                    if ($valid) {
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'proof' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
$trok=$_COOKIE["usNick"];
$laip = $_SERVER['REMOTE_ADDR'];

$query = "INSERT INTO confirm (username, userph, idb, idph, usergh, idj, idgh, messages, date, pic) VALUES('$username','$userph','$idb','$idph', '$usergh', '$idj', '$idgh', '$messages', '$eltiempo','proof/$name')";
mysql_query($query) or die(mysql_error());

mysql_query("UPDATE tb_beli SET konfirmasi='1', pesan='$messages', pic='proof/$name', exp='', autoapp='$autoapp' WHERE id='$idb'") or die(mysql_error());



$to = $derizab; 
$subject = "Confirmation ". $namaweb ."";
$from = $emailweb;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$emailweb."\r\n". 
            'Reply-To: '.$emailweb."\r\n" .
            'X-Mailer: PHP/' . phpversion();

$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Confirmation {$namaweb}</div>
    <br />

Your Confirm {$phname} added to our database. Please wait to approve from your pair.
Contact your pair to approve your PH
<br />
<br />
ID: <b>{$idb}</b><br />
Amount: <b>{$paketbbb}</b><br />
Receiver: <b>{$reffbbb}</b><br />


<br><br>
Support {$namaweb}<br />
</div></BODY></HTML>";

if(mail($to, $subject, $message, $headers)){
echo ''; } else{ echo ''; }

$to = $derizabb; 
$subject = "Confirmation ". $namaweb ."";
$from = $emailweb;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$emailweb."\r\n". 
            'Reply-To: '.$emailweb."\r\n" .
            'X-Mailer: PHP/' . phpversion();

$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Confirmation {$namaweb}</div>
    <br />
Your Pair / Sender {$userph} has been transfer and confirm. please chechk your bank and approve it.

<br />
<br />
ID: <b>{$idb}</b><br />
Amount: <b>{$paketbbb}</b><br />
Sender: <b>{$userph}</b><br />


<br><br>
Support {$namaweb}<br />
</div></BODY></HTML>";

if(mail($to, $subject, $message, $headers)){
echo ''; } else{ echo ''; }


echo "Confirmation Has Been Sent. Thanks<br><br></div></div>";
include("foot.php"); ?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php">
<?
           
exit();

}


                    break;
                case UPLOAD_ERR_INI_SIZE:
                    $response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $response = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $response = 'The uploaded file was only partially uploaded.';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $response = 'No file was uploaded.';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $response = 'File upload stopped by extension. Introduced in PHP 5.2.0.';
                    break;
                default:
                    $response = 'Unknown error';
                break;
            }
 
            echo $response;

      

?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=confirm.php">

<?


exit();

}
?>



<?
$id=$_GET["id"];
$q="select * from tb_beli WHERE id='$id'";
$hsl=mysql_query($q) or die(mysql_error());
$qx=mysql_fetch_array($hsl);
$trxd=$qx["token"];
$hslq=mysql_query("select * from tb_jual WHERE token='$trxd'") or die(mysql_error());
$qxq=mysql_fetch_array($hslq);
?>

 <form class="form-horizontal" method="post" action="confirm" enctype="multipart/form-data">
<input type="hidden" class="form-control" name="username" value="<? echo $r["username"];?>" />
<input type="hidden" class="form-control" name="userph" value="<? echo $qx["username"];?>" />
<input type="hidden" class="form-control" name="idb" value="<? echo $qx["id"];?>" />
<input type="hidden" class="form-control" name="idph" value="<? echo $qx["idph"];?>" />
<input type="hidden" class="form-control" name="usergh" value="<? echo $qxq["username"];?>" />
<input type="hidden" class="form-control" name="idj" value="<? echo $qxq["id"];?>" />
<input type="hidden" class="form-control" name="idgh" value="<? echo $qx["iddb"];?>" />

 <div class="form-group"><label for="username" class="control-label col-md-3">Upload Picture</label>

                                            <div class="col-md-9"><input type="file" name="file">
                    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 2 MB is allowed.</p></div>
                                        </div>
 

<div class="form-group"><label for="username" class="control-label col-md-3">TRANSACTION HASH</label>

                                            <div class="col-md-9">
<textarea type="text" class="form-control"  required name="messages"></textarea></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
<br>
                                                <button type="submit" name="submit" class="btn btn-primary">Sent Transfer Confirmation</button>
                                            </div>
                                        </div>
                                    </form>

 </div>
                                        </div>
                                   
</div>
<?include "foot.php";?>