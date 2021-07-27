<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Tickets";
include "head.php";
?>
 
<div class="row">
<div class="col-lg-12">
<div class="panel panel-green">
                                            <div class="panel-heading">List Support</div>
                                            <div class="panel-body">

					
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
$lole=$_COOKIE["usNick"];
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

<?include "foot.php";?>