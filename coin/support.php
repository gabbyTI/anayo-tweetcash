<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Support";
include "head.php";
?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-green">
                                            <div class="panel-heading">Contact Admin</div>
                                            <div class="panel-body">



<form method="post" action="support">
						
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
									<td>Pls Select a Topic :<br> <select name="subject"> <option value="">Select a Topic</option> <option value="Fake POP">Fake POP Uploaded</option> <option value="Report a Member">Report a Member</option> <option value="Failed to Confirm">Participant Failed to Confirm</option> <option value="Others Issues">Others</option> </select></td>
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
			
	
<?
include "foot.php";
?>
