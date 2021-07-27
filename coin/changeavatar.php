<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Change Picture";
?>
<? include "head.php"; ?>    
<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Change Avatar
                        </header>
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

           
            switch ($error) {
                case UPLOAD_ERR_OK:
                    $valid = true;
                    //validate file extensions
                    if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
                        $valid = false;
                        $response = 'Invalid file extension.';
                    }
                    //validate file size
                    if ( $size/512/512 > 2 ) {
                        $valid = false;
                        $response = 'File size is exceeding maximum allowed size.';
                    }
                    //upload file
                    if ($valid) {
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
$trok=$_COOKIE["usNick"];
$laip = $_SERVER['REMOTE_ADDR'];
$queryb = "UPDATE tb_users SET avatar='uploads/$name' WHERE username='$trok'";
mysql_query($queryb) or die(mysql_error());
echo '<br><br><br><strong>Change avatar Success...</strong></font>';
?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=changeavatar.php">

<?

                        exit;
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

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=changeavatar.php">

<?


exit();

}
?>



						


<form action="changeavatar.php" method="post" enctype="multipart/form-data">
		

<table class="ui striped celled table customtable feedbacktable">
							<tbody>


<tr>
<td align="left">Upload Avatar </td>
<td align="center" width="50">:</td>
<td><input type="file" class="file"  name="file">
                    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 256 KB is allowed.</p></td>
</tr>

<tr>
									<td colspan="3" style="text-align:center;">
										<button type="submit" class="btn btn-info"><i class="edit icon"></i>Change Avatar
									</td>
								</tr>
</tbody></table>


		</form>

 </div>
                                        </div>
        </div>                           

<?include "foot.php";?>