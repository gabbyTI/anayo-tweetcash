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

$idb=saiful($_POST["idb"]);
$messages=saiful($_POST["messages"]);
$kamiduh=$r["username"];
$autoapp=$eltiempo + 86400;
$tablab = mysql_query("SELECT * FROM tb_users where username='$username'"); 
$registrob = mysql_fetch_array($tablab);
$derizb=$registrob["phone"];
$derizab=$registrob["email"];

$tablabb = mysql_query("SELECT * FROM tb_users where username='admin'"); 
$registrobb = mysql_fetch_array($tablabb);
$derizbb=$registrobb["phone"];
$derizabb=$registrobb["email"];

$tablabbb = mysql_query("SELECT * FROM tb_fee where id='$idb'"); 
$registrobbb = mysql_fetch_array($tablabbb);
$derizbbb=$registrobbb["konfirmasi"];
$paketbbb=$registrobbb["paket"];



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


mysql_query("UPDATE tb_fee SET konfirmasi='1', messages='$messages', pic='proof/$name' WHERE id='$idb'") or die(mysql_error());



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

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php">

<?


exit();

}
?>


<?
$id=$_GET["id"];
$q="select * from tb_fee WHERE id='$id'";
$hsl=mysql_query($q) or die(mysql_error());
$qx=mysql_fetch_array($hsl);
?>

 <form class="form-horizontal" method="post" action="confirmrf" enctype="multipart/form-data">
<input type="hidden" class="form-control" name="username" value="<? echo $qx["username"];?>" />
<input type="hidden" class="form-control" name="idb" value="<? echo $qx["id"];?>" />
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
                                        </div> </div> </div>
                                   
</div>
<?include "foot.php";?>