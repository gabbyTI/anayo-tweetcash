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

<br>
<br>
<section class="panel panel-default">
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
<? echo $matauang?> <? echo $r["money"];?> </strong></span>
                      <small class="text-muted text-uc">Account Balance</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                   <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                      <i class="fa fa-trophy fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="getbonus">
                      <span class="h3 block m-t-xs"><strong>
<? echo $matauang?> <? echo $r["moneys"];?> </strong></span>
                      <small class="text-muted text-uc">Reward Balance</small>
                    </a>
                  </div>
                </div>
              </section>
<div class="row">
<div class="col-lg-6">
<a href="providehelp" class="ordin_button" style="
					font-weight:bold;
					height:88px;
					color: #416AA3;
					cursor: pointer;
					font-size: 30px;
					font-weight: bold;
					text-decoration: none;
					text-shadow: 1px 2px 3px #FFFFFF;
					min-height: 50px;
					display:block;
				">
					<div style="
						padding: 20px 0px 10px 10px;
						min-height: 50px;
					">
						<span>
<center><? echo $phname; ?></span>
</center>
					</div>
				</a>

</div>
<div class="col-lg-6">
<a href="gethelp" class="ordout_button" style="
					font-weight:bold;
					height:88px;
					color: #416AA3;
					cursor: pointer;
					font-size: 30px;
					font-weight: bold;
					text-decoration: none;
					text-shadow: 1px 2px 3px #FFFFFF;
					min-height: 50px;
					display:block;
				">
					<div style="
						padding: 20px 0px 10px 10px;
						min-height: 50px;
					">
						<span>
<center><? echo $ghname; ?></span>
</center>
					</div>
				</a>

</div>
</div>


<div class="row">
			<div class="col-md-3 col-xs-3 col-sm-3" style="margin-top:2px;text-align:right;">
				Participant :
			</div>
			<form method="post" action="dashboard">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div style="margin-right:52px;margin-left:-20px;">
						<select style="width:100%" class="form-control" name="participant">



							<?
$lole=$_COOKIE["usNick"];
$tabla = mysql_query("SELECT * FROM tb_users where referer='$lole' ORDER BY id DESC limit 0,1000000"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<option value=\"". $registro["username"] ."\">". $registro["namalengkap"] ." (". $registro["username"] .") - ". $registro["phone"] ."</option>

";}
?>



													</select>
					</div>
				</div>

				<div class="col-md-3 col-xs-3 col-sm-3">
					<div style="margin-left:-65px;">
						<button type="submit" name="submit_filter" class="btn btn-primary" >Filter</button>
					</div>
				</div>
			</form>
<br><br>
		</div>
		<div style="height:10px;"></div>
<?
$user=$r["username"]; 
$tablab = mysql_query("SELECT * FROM tb_users where username='$user'"); 
$registrob = mysql_fetch_array($tablab);
$deriz=$registrob["referer"];
$mangr=$registrob["manager"];
if($mangr!='1'){
$error = 1;
$errormsg .= "<b>Error - </b> You Cannot View This Transaction Member!<br />";
}

if($error == 1)
{
print $errormsg;
} else {
}
?>


<?
if ($_POST) {
$id=saiful($_POST["id"]);
$username=saiful($_POST["participant"]);
$tablab = mysql_query("SELECT * FROM tb_users where username='$username'"); 
$registrob = mysql_fetch_array($tablab);
$deriz=$registrob["referer"];
$mangr=$registrob["manager"];
$kamilah=$r["username"];


if($deriz!=$kamilah){
$error = 1;
$errormsg .= "<b>Error - </b> You Cannot View This Transaction Member!<br />";
}
if($error == 1)
{
print $errormsg;
} else {
?>


<div class="row">
	
<div class="col-lg-8">


<a id="toggle" onclick="showorhide('phorder')"  class="btn btn-default" >Show / Hide <? echo $phname; ?> Transactions History</a>

<br><br>
<div id="phorder">
<? include ("phtrx2.php"); ?>
</div>

<br><br>

<a id="toggle" onclick="showorhide('dporder')"  class="btn btn-default" >Show / Hide DP Transactions History</a>

<br><br>
<div id="dporder">
<? include ("dptrx2.php"); ?>
</div>

<br><br>
<a id="toggle" onclick="showorhide('ghorder')"  class="btn btn-default" >Show / Hide <? echo $phname; ?> Transactions History</a>

<br><br>
<div id="ghorder">
<? include ("ghtrx2.php"); ?>
</div>
</div>
<div class="col-lg-4">
<div class="ui green buttons">
<a id="toggle" onclick="showorhide('phlist')" class="btn btn-default" >Show / Hide <? echo $skph; ?> Request</a>
</div>
<br>
<div id="phlist">
<? include ("listph2.php"); ?>
</div><br>
<div class="ui green buttons">
<a id="toggle" onclick="showorhide('dplist')" class="btn btn-default" >Show / Hide <? echo $skph; ?> Request</a>
</div>
<br>
<div id="dplist">
<? include ("listdp2.php"); ?>
</div><br>
<div class="ui orange buttons">
<a id="toggle" onclick="showorhide('ghlist')"  class="btn btn-default" >Show / Hide <? echo $skgh; ?> Request</a>
</div>
<br><br>
<div id="ghlist">
<? include ("listgh2.php"); ?>
</div>
</div></div>
<?
}}
?>
<? include "foot.php";
?>