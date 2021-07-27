<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="GH History";
include "head.php";
?>
   
  <section class="panel panel-default" class="mbr-cards mbr-section mbr-section-nopadding mbr-parallax-background mbr-after-navbar" id="features3-10" style="background-image: url(assets/images/jumbotron.jpg);">
                <div class="row m-l-none m-r-none bg-light lter">
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-gift fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="hph">
                      <span class="h3 block m-t-xs"><strong><?
$namauser=$_COOKIE["usNick"] ;
$sqle = "SELECT SUM(paket) AS cnt FROM tb_ph WHERE username='$namauser'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

echo " $matauang ". number_format($pend,$desimal) ." ";

?></strong></span>
                      <small class="text-muted text-uc">Total <? echo $skph; ?></small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-money fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="hgh">
                      <span class="h3 block m-t-xs"><strong><?
$namauser=$_COOKIE["usNick"] ;
$sqle = "SELECT SUM(paket) AS cnt FROM tb_gh WHERE username='$namauser'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

echo " $matauang ". number_format($pend,$desimal) ." ";

?></strong></span>
                      <small class="text-muted text-uc">Total <? echo $skgh; ?></small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
                     <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                      <i class="fa fa-dollar fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="gethelp">
                      <span class="h3 block m-t-xs"><strong>
<? echo $matauang?> <?
$user=$r["username"];
$queryfqgggg="select * from tb_ph where username='$user' and status='sukses' and getprofit='0' and refund='1' order by id ASC limit 0,1";
$resultgggg=mysql_query($queryfqgggg);
while ($rowfgggg=mysql_fetch_array($resultgggg)) {
$idey=$rowfgggg["id"];
$autogh=$rowfgggg["readygh"];
echo "
". number_format($autogh) .""; } ?> </strong></span>
                      <small class="text-muted text-uc">Ready for <? echo $skgh;?></small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                   <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                      <i class="fa fa-trophy fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="reward">
                      <span class="h3 block m-t-xs"><strong>
<? echo $matauang?> <? echo number_format($r["moneys"]);?> </strong></span>
                      <small class="text-muted text-uc">Reward Balance</small>
                    </a>
                  </div>
                </div>
              </section>   
<div class="row">

<div class="col-lg-12">

                                        <div class="panel panel-red">
                                            <div class="panel-heading"><? echo $ghname ; ?> History</div>
                                            <div class="panel-body">
			

<table class="table table-hover table-bordered">

   <thead><tr>
                                                                                          
                                             <th><center>Id Trx</center></th>
                                                <th><center>Date</center></th>
                                                <th><center>Amount</center></th>                                               
<th><center>Pair</center></th>        
<th><center>Not Pair</center></th>        
     
                                              
                                                
                                         
                                               
                                                <th><center>Stats</center></th>
                                                <th colspan="2"><center>Option</center></th>

</tr>

                                        </thead>
<br>
                                        <tbody>

<?
$lole=$_COOKIE["username"];
$tabla = mysql_query("SELECT * FROM tb_gh where username='$lole'  and status!='ditahan' ORDER BY id DESC limit 0,1000000"); 
while ($registro = mysql_fetch_array($tabla)) { 
$yereka=$registro["verify"];
$perek=$registro["username"];
$pereka=$registro["id"];
$derek=$registro["paket"];
$dereka=$registro["sisa"];
$derekas=$registro["saldo"];
$ferpax=$registro["id"];
$ferpaxd=$registro["username"];
$derekb=$derek - $dereka;
$derekc=$derek - $derekas;
$frozenStatus = $registro['status'];
$derekasu=$registro["profit"];
$derekasur=$registro["totalprofit"];
$wedokan=$derekasu * $derekasur;
$profitallday=$derek + $wedokan;
  if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';} else
  if($frozenStatus=='dilock'){$button='warning'; $mystats='Wait Transfer DP';}
  if($frozenStatus=='dikunci'){$button='warning'; $mystats='Wait To Open Pair';}

 $hari = date("H");
  $token=md5($frozenIdTrx.$hari);
			echo "
<tr>

<td>". $registro["idtrx"] ."</td>
<td>". date("d M Y H:i:s",$registro["date"]) ."</td>
<td>$matauang ". number_format($registro["paket"]) ." </td>
<td>$matauang ". number_format($derekc) ." </td>
<td>$matauang ". number_format($registro["saldo"]) ." </td>
<td>". $mystats ."</td>
<td><div data-target=\"#DETAIL$ferpax\" data-toggle=\"modal\" class=\"btn btn-success btn-xs\" style=\"float:center;\"><center>DETAIL</center></div>
</td></tr>
</tbody></table>
 ";

?>

     </div>
                </div>     </div>
  


<div id="DETAIL<? echo $registro["id"];?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Detail Transactions</h4></div>
                            <div class="modal-body">

              

<? echo showGhOrderMemberKananModal($ferpaxd,$ferpax); ?>
<br>
<? echo showGhOrderMemberKananModalList($ferpaxd,$ferpax); ?>


    
 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
</div>
<?
}
?>
<?
include "foot.php";
?> 