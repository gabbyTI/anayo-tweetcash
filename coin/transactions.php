<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="My Transactions";
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
              </section>   <section class="mbr-cards mbr-section mbr-section-nopadding mbr-parallax-background mbr-after-navbar" id="features3-10" style="background-color:grey ;">

<div class="row">
                                                       <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-8 col-lg-offset-2">

<br>
<div id="phlist">
<? include ("listph.php"); ?>
</div>


                           


<div id="ghlist">
<? include ("listgh.php"); ?>

</div></div></div></div>
</section>
<? include "foot.php";
