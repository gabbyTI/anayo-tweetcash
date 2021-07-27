<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Referrals";
include "head.php";
?>
    
<div class="row">

<div class="col-lg-12">

<center>
<a href="#" class="btn btn-danger">My URL Affiliate : <input type="text" class="form-control" size="50" value="http://<? echo $namaweb;?>/<? echo $r["username"];?>" /></a>
</center>
<br>

                                        <div class="panel panel-red">
                                            <div class="panel-heading">My Downline</div>
                                            <div class="panel-body">

<form method="post" action="registration">
						
				
<div class="table-responsive">
<table class="table table-hover table-bordered">

   <thead><tr>
                                                                                     <th><center>UserName</center></th>       
                                             <th><center>Full Name</center></th>
                                                <th><center>Email</center></th>
                                                <th><center>Phone</center></th>
                                               
                                              
                                                
                                                <th><center>Register Date</center></th>
                                                <th><center>Referral</center></th>
                                                <th><center>Option</center></th>

</tr>

                                        </thead>
<br>
                                        <tbody>

<?
$lole=$_COOKIE["usNick"];
$referals1=mysql_num_rows(mysql_query("SELECT * FROM tb_users WHERE referer='$lole'"));
$tabla = mysql_query("SELECT * FROM tb_users where referer='$lole' ORDER BY id DESC limit 0,1000000"); 
while ($registro = mysql_fetch_array($tabla)) { 
$derek=$registro["suspend"];
if($derek=='1'){$account="Suspend";} else {$account="Active";}
			echo "
<tr>
<td>". $registro["username"] ."</td>
<td>". $registro["namalengkap"] ."</td>
<td>". $registro["email"] ."</td>
<td>". $registro["phone"] ."</td>
<td>". date("d M Y ",$registro["joindate"]) ."</td>
<td><a href=\"dtree.php?username=". $registro["username"] . "\" class=\"btn btn-primary btn-xs\"> ". $referals1 ." Reffs </a></td>"; ?>
<td><div data-target="#DETAIL<? echo $registro["id"]; ?><? echo $registro["joindate"];?>" data-toggle="modal" class="btn btn-primary btn-xs" style="float:center;"><center>Detail</center></div>

<div id="DETAIL<? echo $registro["id"];?><? echo $registro["joindate"];?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Detail Member</h4></div>
                            <div class="modal-body">
                                <div class="row">

<div class="table-responsive">
<table class="table table-hover table-bordered">
						<tbody>

<tr><td>Username : 	</td><td><? echo $registro["username"]; ?></td></tr>
<tr><td>Full Name : 	</td><td><? echo $registro["namalengkap"]; ?></td></tr>
<tr><td>Email : 	</td><td><? echo $registro["email"]; ?></td></tr>
<tr><td>Phone : 	</td><td><? echo $registro["phone"]; ?></td></tr>
<tr><td>Join Date : 	</td><td><? echo date("d M Y ",$registro["joindate"]); ?></td></tr>
<tr><td>Last Login Date : 	</td><td><? echo date("d M Y ",$registro["lastlogdate"]); ?></td></tr>
<tr><td>Address : 	</td><td><? echo $registro["alamat"]; ?></td></tr>
<tr><td>City : 	</td><td><? echo $registro["kota"]; ?></td></tr>
<tr><td>Country : 	</td><td><? echo $registro["country"]; ?></td></tr>
</tbody>
</table>
 </div>
                            </div>

 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                            </div>
                        </div>
                    </div>
                </div>


<?


		}
		?>

</td>
</tr>

</tbody>
</table>
<br> <br> 
     </div>
                </div>     </div>
                </div>




<?include "foot.php";?>