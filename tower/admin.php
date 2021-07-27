<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');

$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
functionUserLockAdminFree();
functionAdminLock();
include "head.php";
?>

<?
if($_COOKIE["useradmin"]==$useradmin)
{
echo "";
}
if($_COOKIE["useradmin"]!=$useradmin)
{
exit();
}


$zzz=mysql_query("select password from settweb where username='$useradmin'");
$zz=mysql_fetch_array($zzz);
$passwd1=$zz["password"];
if ($passwd1 <> $_COOKIE["passadmin"] and $passwd1 <> "")
{

   echo "Server not found";
exit();
}
?>
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<br>

      
<?
$op = $_GET["op"];
switch($op) {
case (1):
?>



<?
break;
case (2):
?>


<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Setting Website</h4>
                                           
                                        </div>
                                        <div class="panel-body">



<?
if ($_POST)
{

$id=saiful($_POST["id"]);
$userweb=saiful($_POST["username"]);
$passweb=md5(saiful($_POST["password"]));
$namaweb=saiful($_POST["nama"]);
$siname=saiful($_POST["siname"]);
$emailweb=saiful($_POST["email"]);
$hpweb=saiful($_POST["phone"]);
$namaadmin=saiful($_POST["namaadmin"]);
$alamatweb=saiful($_POST["alamat"]);
$kotaweb=saiful($_POST["kota"]);
$negaraweb=saiful($_POST["negara"]);
$kodeposweb=saiful($_POST["kodepos"]);
$bbweb=saiful($_POST["bbm"]);
$waweb=saiful($_POST["wa"]);
$lineweb=saiful($_POST["line"]);
$fbweb=saiful($_POST["fb"]);
$twweb=saiful($_POST["twitter"]);
$ymweb=saiful($_POST["ym"]);
$sloganweb=saiful($_POST["tagline"]);
$descweb=saiful($_POST["descweb"]);
$keyweb=saiful($_POST["keyword"]);
$bank1=saiful($_POST["bank1"]);
$bank2=saiful($_POST["bank2"]);
$bank3=saiful($_POST["bank3"]);
$bank4=saiful($_POST["bank4"]);
$bank5=saiful($_POST["bank5"]);
$pmweb=saiful($_POST["pm"]);
$btcweb=saiful($_POST["bitcoin"]);
$payeerweb=saiful($_POST["payeer"]);
$payeerweb=saiful($_POST["payeer"]);
$egopayweb=saiful($_POST["egopay"]);
$stpweb=saiful($_POST["stp"]);
$pecunixweb=saiful($_POST["pecunix"]);
$paypalweb=saiful($_POST["paypal"]);
$usersmsweb=saiful($_POST["usersms"]);
$apismsweb=saiful($_POST["apisms"]);
$sitekey=saiful($_POST["sitekey"]);
$secretkey=saiful($_POST["secretkey"]);
$chatweb=saiful($_POST["chatcode"]);
$matauang=saiful($_POST["ecurrency"]);
$desimal=saiful($_POST["desimal"]);
$maxemail=saiful($_POST["maxemail"]);
$maxrek=saiful($_POST["maxrek"]);
$maxhp=saiful($_POST["maxhp"]);
$uploadweb=saiful($_POST["upload"]);
$autoblock=saiful($_POST["autoblock"]);
$expph=saiful($_POST["expph"]);
$expgh=saiful($_POST["expgh"]);
$expdp=saiful($_POST["expdp"]);
$pairingsistem=saiful($_POST["pairingsistem"]);
$gauthsistem=saiful($_POST["gauthsistem"]);
$tiketsistem=saiful($_POST["tiketsistem"]);
$localec=saiful($_POST["localec"]);
$ratetousd=saiful($_POST["ratetousd"]);
$loginen=saiful($_POST["loginen"]);
$registeren=saiful($_POST["registeren"]);
$testimony=saiful($_POST["testimony"]);
$regpack=saiful($_POST["regpack"]);



$query = "UPDATE settweb SET nama='$namaweb', regpack='$regpack', testimony='$testimony', registeren='$registeren', loginen='$loginen', siname='$siname', email='$emailweb', phone='$hpweb', bbm='$bbweb', wa='$waweb', fb='$fbweb',  tagline='$sloganweb', descweb='$descweb', keyword='$keyweb', usersms='$usersmsweb', apisms='$apismsweb', sitekey='$sitekey', secretkey='$secretkey', ecurrency='$matauang', desimal='$desimal', maxemail='$maxemail', maxrek='$maxrek', maxhp='$maxhp',  autoblock='$autoblock', pairingsistem='$pairingsistem', tiketsistem='$tiketsistem', localec='$localec', ratetousd='$ratetousd' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Setting Web Edited.</b></font><br><br>";

}
?>



 <div class="col-md-6">

<?
$cedeffs=mysql_query("select * from settweb where id='1'");
while($xcvfrsaa=mysql_fetch_array($cedeffs)){
?>

<form class="form-horizontal" action="admin.php?op=2" method="post">


<div class="form-group">
<label class="col-sm-3 control-label">
Domain Name</label>
<div class="col-sm-9">
<input type="text" name="nama" value="<? echo $xcvfrsaa["nama"]; ?>" class="form-control" >
<small>Input your Domain Name. Ex : ExtraCommunity.com </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Site Name</label>
<div class="col-sm-9">
<input type="text" name="siname" value="<? echo $xcvfrsaa["siname"]; ?>" class="form-control" >
<small>Input your Site Name. Ex : ExtraCommunity </small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Email</label>
<div class="col-sm-9">
<input type="text" name="email" value="<? echo $xcvfrsaa["email"]; ?>" class="form-control" >
<small>Input your Email Web . Ex : admin@ExtraCommunity.com </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Phone</label>
<div class="col-sm-9">
<input type="text" name="phone" value="<? echo $xcvfrsaa["phone"]; ?>" class="form-control" >
<small>Input your Phone Web Name. Ex : +001 545436789 </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
BBM</label>
<div class="col-sm-9">
<input type="text" name="bbm" value="<? echo $xcvfrsaa["bbm"]; ?>" class="form-control" >
<small>Input your BBM Pin Web. Ex : 543ABCD </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
WhatsApp</label>
<div class="col-sm-9">
<input type="text" name="wa" value="<? echo $xcvfrsaa["wa"]; ?>" class="form-control" >
<small>Input your WhatsApp. Ex : 08123456789 </small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Facebook</label>
<div class="col-sm-9">
<input type="text" name="fb" value="<? echo $xcvfrsaa["fb"]; ?>" class="form-control" >
<small>Input your Facebook Pages / Group. Ex : http://fb.com/community </small>
</div>
</div>


<hr>

<div class="form-group">
<label class="col-sm-3 control-label">
Tagline</label>
<div class="col-sm-9">
<input type="text" name="tagline" value="<? echo $xcvfrsaa["tagline"]; ?>" class="form-control" >
<small>Input your Web Tagline. Ex : Trusted And Profit Community </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Description</label>
<div class="col-sm-9">
<input type="text" name="descweb" value="<? echo $xcvfrsaa["descweb"]; ?>" class="form-control" >
<small>Input your Web Description. Ex : The Best And The Biggest Community </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Keyword</label>
<div class="col-sm-9">
<input type="text" name="keyword" value="<? echo $xcvfrsaa["keyword"]; ?>" class="form-control" >
<small>Input your Keyword. Ex : Trusted Community, Real Community, Big Community, Profit Community, Social Community </small>
</div>
</div>

<hr>

<div class="form-group">
<label class="col-sm-3 control-label">
Ecurrency</label>
<div class="col-sm-9">
<input type="text" name="ecurrency" value="<? echo $xcvfrsaa["ecurrency"]; ?>" class="form-control" >
<small>Input your Ecurrency Used for Web. Ex: $ for use Dollar, BTC  for use  Bitcoin, Rp  for use  IDR</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Rate</label>
<div class="col-sm-9">
<input type="text" name="ratetousd" value="<? echo $xcvfrsaa["ratetousd"]; ?>" class="form-control" >
<small>Input your input Rate to USD . </small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Decimal for Money Ecurrency</label>
<div class="col-sm-9">
<input type="text" name="desimal" value="<? echo $xcvfrsaa["desimal"]; ?>" class="form-control" >
<small>Input your Decimal Used for Web. Ex: 2. So, Amount will be $100.00 . </small>
</div>
</div>
<label class="col-sm-3 control-label">
SMS Gateaway</label>
<div class="col-sm-9">
<input type="text" name="usersms" value="<? echo $xcvfrsaa["usersms"]; ?>" class="form-control" >
<small>Input your Username SMS Gateaway. </small>
<input type="text" name="apisms" value="<? echo $xcvfrsaa["apisms"]; ?>" class="form-control" >
<small>Input your API SMS Gateaway . </small>
</div>
<hr>
</div>
 
 <div class="col-md-6">




<div class="form-group">
<label class="col-sm-3 control-label">
Maximal Email for Account</label>
<div class="col-sm-9">
<input type="text" name="maxemail" value="<? echo $xcvfrsaa["maxemail"]; ?>" class="form-control" >
<small>Input Maximal Email Can Used for Account. If 1 Email can used for 5 Account, Input 5</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Maximal Bank for Account</label>
<div class="col-sm-9">
<input type="text" name="maxrek" value="<? echo $xcvfrsaa["maxrek"]; ?>" class="form-control" >
<small>Input Maximal 1 Bank Can Used for Account. If 1 Bank can used for 5 Account, Input 5</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Maximal Phone for Account</label>
<div class="col-sm-9">
<input type="text" name="maxhp" value="<? echo $xcvfrsaa["maxhp"]; ?>" class="form-control" >
<small>Input Maximal 1 Phone Can Used for Account. If 1 phone can used for 5 Account, Input 5</small>
</div>
</div>



<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Pairing System</label>
<div class="col-sm-9">
<? if($pairingsistem=='1'){ ?>
<input type="radio" name="pairingsistem" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">First In First Out</label><br>
<input type="radio" name="pairingsistem" id="radioWarning" value="2" />
<label for="radioWarning">Random System</label>
<? } else { ?>
<input type="radio" name="pairingsistem" id="radioWarning" value="1"  />
<label for="radioWarning">First In First Out</label><br>
<input type="radio" name="pairingsistem" id="radioWarning" value="2" checked="checked"/>
<label for="radioWarning">Random System</label>
<? } ?>
<br>
<small>Select Your Pairing System for PH member and GH Member. If First in First Out, Member GH First will Pair First. But if Random, All PH and GH member will b pair with random system</small>
</div>
</div>

<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Login System</label>
<div class="col-sm-9">
<? if($loginen=='1'){ ?>
<input type="radio" name="loginen" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="loginen" id="radioWarning" value="2" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="loginen" id="radioWarning" value="1"  />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="loginen" id="radioWarning" value="2" checked="checked"/>
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Select to Enable Login </small>
</div>
</div>


<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Registration System</label>
<div class="col-sm-9">
<? if($registeren=='1'){ ?>
<input type="radio" name="registeren" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="registeren" id="radioWarning" value="2" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="registeren" id="radioWarning" value="1"  />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="registeren" id="radioWarning" value="2" checked="checked"/>
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Select to Enable Registration </small>
</div>
</div>




<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Package On Registreation</label>
<div class="col-sm-9">
<? if($regpack=='1'){ ?>
<input type="radio" name="regpack" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="regpack" id="radioWarning" value="2" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="regpack" id="radioWarning" value="1"  />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="regpack" id="radioWarning" value="2" checked="checked"/>
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Select to Enable Provide Help During Registration Process </small>
</div>
</div>




<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Testimonial System in Home</label>
<div class="col-sm-9">
<? if($testimony=='1'){ ?>
<input type="radio" name="testimony" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="testimony" id="radioWarning" value="2" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="testimony" id="radioWarning" value="1"  />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="testimony" id="radioWarning" value="2" checked="checked"/>
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Select to Enable Testimony </small>
</div>
</div>


<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Use Ticket System</label>
<div class="col-sm-9">
<? if($tiketsistem=='1'){ ?>
<input type="radio" name="tiketsistem" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Yes. Use it</label><br>
<input type="radio" name="tiketsistem" id="radioWarning" value="2" />
<label for="radioWarning">No. Dont Use</label>
<? } else { ?>
<input type="radio" name="tiketsistem" id="radioWarning" value="1" />
<label for="radioWarning">Yes. Use it</label><br>
<input type="radio" name="tiketsistem" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">No. Dont Use</label>
<? } ?><br>
<small>Use it if you want to use ticket system for every PH or GH member. You can sell ticket for your member</small>
</div>
</div>

<hr>

<div class="form-group">
<label class="col-sm-3 control-label">
Auto Block For All Suspend Account</label>
<div class="col-sm-9">
<? if($autoblock=='1'){ ?>
<input type="radio" name="autoblock" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Yes, If 1 Account Suspend, All Account with same email will be suspend too</label><br>
<input type="radio" name="autoblock" id="radioWarning" value="2" />
<label for="radioWarning">No, If 1 Account Suspend, Just 1 Account suspended</label>
<? } else { ?>
<input type="radio" name="autoblock" id="radioWarning" value="1" />
<label for="radioWarning">Yes, If 1 Account Suspend, All Account with same email will be suspend too</label><br>
<input type="radio" name="autoblock" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">No, If 1 Account Suspend, Just 1 Account suspended</label>
<? } ?>
</div>
</div>


<br><br>


Note : <br>
<ul>
<li>For Ecurrency / Payment Processor, if you dont used, please leave blank</li>
</ul>
<input type="hidden" name="id" value="<? echo $xcvfrsaa["id"]; ?>" />
</div>
</div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>
								</div>
								</div>
<? } ?>

<?
break;
case (3):
?>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Setting <? echo $phname; ?></h4>
                                           
                                        </div>
                                        <div class="panel-body">

<?
if ($_POST)
{
$id=saiful($_POST["id"]);
$phname=saiful($_POST["nama"]);
$rphname=saiful($_POST["rphname"]);
$skph=saiful($_POST["singkatan"]);
$minph=saiful($_POST["minph"]);
$maxph=saiful($_POST["maxph"]);
$dpph=saiful($_POST["dp"]);
$jmldp=saiful($_POST["jmldp"]);
$tiketph=saiful($_POST["tiket"]);
$jmltiket=saiful($_POST["jmltiket"]);
$lockph=saiful($_POST["lockph"]);
$profit=saiful($_POST["profit"]);
$relph=saiful($_POST["releasedate"]);
$wkph=saiful($_POST["durasi"]);
$stph=saiful($_POST["status"]);
$strph=saiful($_POST["statr"]);
$expph=saiful($_POST["expph"]);
$expdp=saiful($_POST["expdp"]);

$query = "UPDATE settph SET nama='$phname', rphname='$rphname', singkatan='$skph', minph='$minph', maxph='$maxph', dp='$dpph', jmldp='$jmldp', tiket='$tiketph', jmltiket='$jmltiket', lockph='$lockph', profit='$profit', releasedate='$relph', durasi='$wkph', status='$stph', statr='$strph', expph='$expph', expdp='$expdp' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Setting Web Edited.</b></font><br><br>";

}
?>
<?
$cedeffs=mysql_query("select * from settph where id='1'");
while($xcvfrsaa=mysql_fetch_array($cedeffs)){
$statusphku=$xcvfrsaa["status"];
$statusrphku=$xcvfrsaa["statr"];
$tiketphku=$xcvfrsaa["tiket"];
$dpphku=$xcvfrsaa["dp"];
$rphname=$xcvfrsaa["rphname"] ;
?>

<div class="col-md-6">

<form class="form-horizontal" action="admin.php?op=3" method="POST">



<div class="form-group">
<label class="col-sm-3 control-label">
<?echo $skph;?></label>
<div class="col-sm-9">
<? if($statusphku=='1'){ ?>
<input type="radio" name="status" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="status" id="radioWarning" value="2" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="status" id="radioWarning" value="1" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="status" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Enable it if you want to activate PH System, But if you want to Stop it, or pending it for a short time. Disable it</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
RECOMMITMENT</label>
<div class="col-sm-9">
<? if($statusrphku=='YES'){ ?>
<input type="radio" name="statr" id="radioWarning" value="YES" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="statr" id="radioWarning" value="NO" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="statr" id="radioWarning" value="YES" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="statr" id="radioWarning" value="NO" checked="checked" />
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Enable it if you want to activate RECOMMITMENT System, But if you want to Stop it, or pending it for a short time. Disable it</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Name</label>
<div class="col-sm-9">
<input type="text" name="nama" value="<? echo $xcvfrsaa["nama"]; ?>" class="form-control" >
<small>Input your PH name system, Ex: Provide Help</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Identity / Called</label>
<div class="col-sm-9">
<input type="text" name="singkatan" value="<? echo $xcvfrsaa["singkatan"]; ?>" class="form-control" >
<small>Input your PH name system Called, Ex: PH</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Recommitment Name</label>
<div class="col-sm-9">
<input type="text" name="rphname" value="<? echo $xcvfrsaa["rphname"]; ?>" class="form-control" >
<small>Input your Recommit name system Called, Ex: RECOMMIT</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Lock before Pairing (hours)</label>
<div class="col-sm-9">
<input type="text" name="lockph" value="<? echo $xcvfrsaa["lockph"]; ?>" class="form-control" >
<small>Input how many hours PH will be lock before pairing</small>
</div>
</div>

<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Use Ticket / Need Ticket </label>
<div class="col-sm-9">
<? if($tiketphku=='1'){ ?>
<input type="radio" name="tiket" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="tiket" id="radioWarning" value="2" />
<label for="radioWarning">No</label>
<? } else { ?>
<input type="radio" name="tiket" id="radioWarning" value="1" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="tiket" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">No</label>
<? }?>
<br>
<small>Select it if you want to use this feature</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
How Much Ticket</label>
<div class="col-sm-9">
<input type="text" name="jmltiket" value="<? echo $xcvfrsaa["jmltiket"]; ?>" class="form-control" >
<small>How many tickets need to PH. Input 0 to disable or not use this feature</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Use Down Payment / Transfer First to Admin </label>
<div class="col-sm-9">
<? if($dpphku=='1'){ ?>
<input type="radio" name="dp" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="dp" id="radioWarning" value="2" />
<label for="radioWarning">No</label>
<? } else { ?>
<input type="radio" name="dp" id="radioWarning" value="1" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="dp" id="radioWarning" value="2" checked="checked"  />
<label for="radioWarning">No</label>
<? } ?>
<br>
<small>Select it if you want to use this feature. Down Payment is how many percent from PH member will be transfer first to Admin</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
How Much DP (%)</label>
<div class="col-sm-9">
<input type="text" name="jmldp" value="<? echo $xcvfrsaa["jmldp"]; ?>" class="form-control" >
<small>How many % DP from PH Member. Input 0 to disable or not use this feature</small>
</div>
</div>



<hr>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-sm-3 control-label">
Minimum <? echo $skph; ?> (<? echo $matauang; ?>)</label>
<div class="col-sm-9">
<input type="text" name="minph" value="<? echo $xcvfrsaa["minph"]; ?>" class="form-control" >
<small>Input Minimum <? echo $skph; ?></small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Maximal <? echo $skph; ?>  (<? echo $matauang; ?>)</label>
<div class="col-sm-9">
<input type="text" name="maxph" value="<? echo $xcvfrsaa["maxph"]; ?>" class="form-control" >
<small>Input Maximal <? echo $skph; ?></small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Daily Profit  (%)</label>
<div class="col-sm-9">
<input type="text" name="profit" value="<? echo $xcvfrsaa["profit"]; ?>" class="form-control" >
<small>Input % Daily Profit</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Release Date  (days)</label>
<div class="col-sm-9">
<input type="text" name="releasedate" value="<? echo $xcvfrsaa["releasedate"]; ?>" class="form-control" >
<small>Input Release Date. When member Can <? echo $skgh; ?></small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Duration</label>
<div class="col-sm-9">
<input type="text" name="durasi" value="<? echo $xcvfrsaa["durasi"]; ?>" class="form-control" >
<small>Input Duration Profit <? echo $skph; ?></small>
</div>
</div>
<hr>

<div class="form-group">
<label class="col-sm-3 control-label">
Expired <? echo $skph;?> (Hours)</label>
<div class="col-sm-9">
<input type="text" name="expph" value="<? echo $xcvfrsaa["expph"]; ?>" class="form-control" >
<small>How money hours for member to transfer <? echo $skph; ?>, before suspended account</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Expired DP (Hours)</label>
<div class="col-sm-9">
<input type="text" name="expdp" value="<? echo $xcvfrsaa["expdp"]; ?>" class="form-control" >
<small>How money hours for member to transfer DP</small>
</div>
</div>
<input type="hidden" name="id" value="<? echo $xcvfrsaa["id"]; ?>" />
</div><!-- panel-body -->
</div>
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>

								</div>
								</div>
								</div>
								</div>
<? } ?>




<?
break;
case (4):
?>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Setting <? echo $ghname; ?></h4>
                                           
                                        </div>
                                        <div class="panel-body">

<?
if ($_POST)
{
$id=saiful($_POST["id"]);
$phname=saiful($_POST["nama"]);
$skph=saiful($_POST["singkatan"]);
$minph=saiful($_POST["mingh"]);
$maxph=saiful($_POST["maxgh"]);
$tiketph=saiful($_POST["tiket"]);
$jmltiket=saiful($_POST["jmltiket"]);
$lockph=saiful($_POST["lockgh"]);
$stph=saiful($_POST["status"]);


$query = "UPDATE settgh SET nama='$phname', singkatan='$skph', mingh='$minph', maxgh='$maxph', tiket='$tiketph', jmltiket='$jmltiket', lockgh='$lockph', status='$stph' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Setting Web Edited.</b></font><br><br>";

}
?>
<?
$cedeffs=mysql_query("select * from settgh where id='1'");
while($xcvfrsaa=mysql_fetch_array($cedeffs)){
$statusghku=$xcvfrsaa["status"];
$tiketghku=$xcvfrsaa["tiket"];
$dpphku=$xcvfrsaa["dp"];
?>
<div class="col-md-6">
<form class="form-horizontal" action="admin.php?op=4" method="POST">



<div class="form-group">
<label class="col-sm-3 control-label">
Featured</label>
<div class="col-sm-9">
<? if($statusghku=='1'){ ?>
<input type="radio" name="status" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="status" id="radioWarning" value="2" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="status" id="radioWarning" value="1" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="status" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Enable it if you want to activate GH System, But if you want to Stop it, or pending it for a short time. Disable it</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Name</label>
<div class="col-sm-9">
<input type="text" name="nama" value="<? echo $xcvfrsaa["nama"]; ?>" class="form-control" >
<small>Input your GH name system, Ex: Get Help</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Identity / Called</label>
<div class="col-sm-9">
<input type="text" name="singkatan" value="<? echo $xcvfrsaa["singkatan"]; ?>" class="form-control" >
<small>Input your GH name system Called, Ex: GH</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Min Request</label>
<div class="col-sm-9">
<input type="text" name="mingh" value="<? echo $xcvfrsaa["mingh"]; ?>" class="form-control" >
<small>Input your Minimal GH amount, Ex: 100</small>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">
Max Request</label>
<div class="col-sm-9">
<input type="text" name="maxgh" value="<? echo $xcvfrsaa["maxgh"]; ?>" class="form-control" >
<small>Input your Maximal GH amount, Ex: 100</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Lock before Pairing (hours)</label>
<div class="col-sm-9">
<input type="text" name="lockgh" value="<? echo $xcvfrsaa["lockgh"]; ?>" class="form-control" >
<small>Input how many hours GH will be lock before pairing</small>
</div>
</div>

<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Use Ticket / Need Ticket </label>
<div class="col-sm-9">
<? if($tiketghku=='1'){ ?>
<input type="radio" name="tiket" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="tiket" id="radioWarning" value="2" />
<label for="radioWarning">No</label>
<? } else { ?>
<input type="radio" name="tiket" id="radioWarning" value="1" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="tiket" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">No</label>
<? }?>
<br>
<small>Select it if you want to use this feature</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
How Much Ticket</label>
<div class="col-sm-9">
<input type="text" name="jmltiket" value="<? echo $xcvfrsaa["jmltiket"]; ?>" class="form-control" >
<small>How many tickets need to GH. Input 0 to disable or not use this feature</small>
</div>
</div>



<hr>
</div>
<div class="col-md-6">

<input type="hidden" name="id" value="<? echo $xcvfrsaa["id"]; ?>" />
</div><!-- panel-body -->
</div>
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>
								</div>
								</div>
<? } ?>




<?
break;
case (4444):
?>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Setting <? echo $ghbname; ?></h4>
                                           
                                        </div>
                                        <div class="panel-body">

<?
if ($_POST)
{
$id=saiful($_POST["id"]);
$phname=saiful($_POST["nama"]);
$skph=saiful($_POST["singkatan"]);
$minph=saiful($_POST["minbh"]);
$maxph=saiful($_POST["maxbh"]);
$tiketph=saiful($_POST["tiket"]);
$jmltiket=saiful($_POST["jmltiket"]);
$lockph=saiful($_POST["lockbh"]);
$stph=saiful($_POST["status"]);


$query = "UPDATE settbonus SET nama='$phname', singkatan='$skph', minbh='$minph', maxbh='$maxph', tiket='$tiketph', jmltiket='$jmltiket', lockbh='$lockph', status='$stph' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Setting Web Edited.</b></font><br><br>";

}
?>
<?
$cedeffs=mysql_query("select * from settbonus where id='1'");
while($xcvfrsaa=mysql_fetch_array($cedeffs)){
$statusghku=$xcvfrsaa["status"];
$tiketghku=$xcvfrsaa["tiket"];
$dpphku=$xcvfrsaa["dp"];
?>
<div class="col-md-6">
<form class="form-horizontal" action="admin.php?op=4444" method="POST">



<div class="form-group">
<label class="col-sm-3 control-label">
Featured</label>
<div class="col-sm-9">
<? if($statusghku=='1'){ ?>
<input type="radio" name="status" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="status" id="radioWarning" value="2" />
<label for="radioWarning">Disable</label>
<? } else { ?>
<input type="radio" name="status" id="radioWarning" value="1" />
<label for="radioWarning">Enable</label><br>
<input type="radio" name="status" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">Disable</label>
<? } ?>
<br>
<small>Enable it if you want to activate GH Reward System, But if you want to Stop it, or pending it for a short time. Disable it</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Name</label>
<div class="col-sm-9">
<input type="text" name="nama" value="<? echo $xcvfrsaa["nama"]; ?>" class="form-control" >
<small>Input your GH name system, Ex: Get  Reward </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Identity / Called</label>
<div class="col-sm-9">
<input type="text" name="singkatan" value="<? echo $xcvfrsaa["singkatan"]; ?>" class="form-control" >
<small>Input your GH name system Called, Ex: GR</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Min Request</label>
<div class="col-sm-9">
<input type="text" name="minbh" value="<? echo $xcvfrsaa["minbh"]; ?>" class="form-control" >
<small>Input your Minimal GR amount, Ex: 100</small>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">
Max Request</label>
<div class="col-sm-9">
<input type="text" name="maxbh" value="<? echo $xcvfrsaa["maxbh"]; ?>" class="form-control" >
<small>Input your Maximal GR amount, Ex: 100</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Lock before Pairing (hours)</label>
<div class="col-sm-9">
<input type="text" name="lockbh" value="<? echo $xcvfrsaa["lockbh"]; ?>" class="form-control" >
<small>Input how many hours GH will be lock before pairing</small>
</div>
</div>

<hr>
<div class="form-group">
<label class="col-sm-3 control-label">
Use Ticket / Need Ticket </label>
<div class="col-sm-9">
<? if($tiketghku=='1'){ ?>
<input type="radio" name="tiket" id="radioWarning" value="1" checked="checked" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="tiket" id="radioWarning" value="2" />
<label for="radioWarning">No</label>
<? } else { ?>
<input type="radio" name="tiket" id="radioWarning" value="1" />
<label for="radioWarning">Yes</label><br>
<input type="radio" name="tiket" id="radioWarning" value="2" checked="checked" />
<label for="radioWarning">No</label>
<? }?>
<br>
<small>Select it if you want to use this feature</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
How Much Ticket</label>
<div class="col-sm-9">
<input type="text" name="jmltiket" value="<? echo $xcvfrsaa["jmltiket"]; ?>" class="form-control" >
<small>How many tickets need to GH. Input 0 to disable or not use this feature</small>
</div>
</div>



<hr>
</div>
<div class="col-md-6">

<input type="hidden" name="id" value="<? echo $xcvfrsaa["id"]; ?>" />
</div><!-- panel-body -->
</div>
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>
								</div>
								</div>
<? } ?>



<?
break;
case (5):
?>

<?

if (isset($_POST["item"]))
{
$item=saiful($_POST["item"]);
$price=saiful($_POST["price"]);
$query = "UPDATE tb_config SET item='$item', price='$price' where item='$item'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Item edited.</b></font><br><br>";
}

if (isset($_GET["item"]))
{

$item=$_GET["item"];
if ($_GET["option"]=="edit")
{
?>

<?

$tablae = mysql_query("SELECT * FROM tb_config where item='$item'");
while ($registroe = mysql_fetch_array($tablae)) {
?>
<br><br>
<form method="post" action="admin.php?op=5">

<input type="hidden" name="item" value="<?= $registroe["item"] ?>">
<input type="text"  style="width:300px;" name="price" value="<?= $registroe["price"] ?>">
<br><br>
<input type="submit" class="btn btn-primary btn-sm" value="Simpan">

</form>

<br><br>

<?

}

?>
<?
}
}
?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Setting</th><th></th><th>Value</th><th>Description</th><th>Option</th></tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_config where howmany='4' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td>

". $registro["item"] ."

</font></td>
<td width=\"50\" align=\"center\"> : </td>
<td>

". $registro["price"] ."

</font></td>
<td>

". $registro["keterangan"] ."

</font></td>

<td>";

?>

<form method="post" action="admin.php?op=5&item=<?= $registro["item"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>

</font>

</td>

</tr>

<?

} 
?>

</tbody>
</table>
</div>


<?
break;
case (6):
?>

<?

if (isset($_POST["item"]))
{
$item=saiful($_POST["item"]);
$price=saiful($_POST["price"]);
$query = "UPDATE tb_config SET item='$item', price='$price' where item='$item'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Item edited.</b></font><br><br>";
}

if (isset($_GET["item"]))
{

$item=$_GET["item"];
if ($_GET["option"]=="edit")
{
?>

<?

$tablae = mysql_query("SELECT * FROM tb_config where item='$item'");
while ($registroe = mysql_fetch_array($tablae)) {
?>
<br><br>
<form method="post" action="admin.php?op=6">

<input type="hidden" name="item" value="<?= $registroe["item"] ?>">
<input type="text"  style="width:300px;" name="price" value="<?= $registroe["price"] ?>">
<br><br>
<input type="submit" class="btn btn-primary btn-sm" value="Simpan">

</form>

<br><br>

<?

}

?>
<?
}
}
?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Setting</th><th></th><th>Value</th><th>Description</th><th>Option</th></tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_config where howmany='5' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td>

". $registro["item"] ."

</font></td>
<td width=\"50\" align=\"center\"> : </td>
<td>

". $registro["price"] ."

</font></td>
<td>

". $registro["keterangan"] ."

</font></td>

<td>";

?>

<form method="post" action="admin.php?op=6&item=<?= $registro["item"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>

</font>

</td>

</tr>

<?

} 
?>

</tbody>
</table>
</div>


<?
break;
case (7):
?>

<?

if (isset($_POST["item"]))
{
$item=saiful($_POST["item"]);
$price=saiful($_POST["price"]);
$query = "UPDATE tb_config SET item='$item', price='$price' where item='$item'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Item edited.</b></font><br><br>";
}

if (isset($_GET["item"]))
{

$item=$_GET["item"];
if ($_GET["option"]=="edit")
{
?>

<?

$tablae = mysql_query("SELECT * FROM tb_config where item='$item'");
while ($registroe = mysql_fetch_array($tablae)) {
?>
<br><br>
<form method="post" action="admin.php?op=7">

<input type="hidden" name="item" value="<?= $registroe["item"] ?>">
<input type="text"  style="width:300px;" name="price" value="<?= $registroe["price"] ?>">
<br><br>
<input type="submit" class="btn btn-primary btn-sm" value="Simpan">

</form>

<br><br>

<?

}

?>
<?
}
}
?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Setting</th><th></th><th>Value</th><th>Description</th><th>Option</th></tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_config where howmany='6' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td>

". $registro["item"] ."

</font></td>
<td width=\"50\" align=\"center\"> : </td>
<td>

". $registro["price"] ."

</font></td>
<td>

". $registro["keterangan"] ."

</font></td>

<td>";

?>

<form method="post" action="admin.php?op=7&item=<?= $registro["item"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>

</font>

</td>

</tr>

<?

} 
?>

</tbody>
</table>
</div>


<?
break;
case (8):
?>

<?

if (isset($_POST["item"]))
{
$item=saiful($_POST["item"]);
$price=saiful($_POST["price"]);
$query = "UPDATE tb_config SET item='$item', price='$price' where item='$item'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Item edited.</b></font><br><br>";
}

if (isset($_GET["item"]))
{

$item=$_GET["item"];
if ($_GET["option"]=="edit")
{
?>

<?

$tablae = mysql_query("SELECT * FROM tb_config where item='$item'");
while ($registroe = mysql_fetch_array($tablae)) {
?>
<br><br>
<form method="post" action="admin.php?op=8">

<input type="hidden" name="item" value="<?= $registroe["item"] ?>">
<input type="text"  style="width:300px;" name="price" value="<?= $registroe["price"] ?>">
<br><br>
<input type="submit" class="btn btn-primary btn-sm" value="Simpan">

</form>

<br><br>

<?

}

?>
<?
}
}
?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Setting</th><th></th><th>Value</th><th>Description</th><th>Option</th></tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_config where howmany='7' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td>

". $registro["item"] ."

</font></td>
<td width=\"50\" align=\"center\"> : </td>
<td>

". $registro["price"] ."

</font></td>
<td>

". $registro["keterangan"] ."

</font></td>

<td>";

?>

<form method="post" action="admin.php?op=8&item=<?= $registro["item"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>

</font>

</td>

</tr>

<?

} 
?>

</tbody>
</table>
</div>


<?
break;
case (9):
?>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Setting Profit</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<?
if ($_POST)
{
$id=saiful($_POST["id"]);
$komisisponsor=saiful($_POST["sponsor"]);

$komlev1=saiful($_POST["level1"]);
$komlev2=saiful($_POST["level2"]);
$komlev3=saiful($_POST["level3"]);
$komlev4=saiful($_POST["level4"]);
$komlev5=saiful($_POST["level5"]);
$komlev6=saiful($_POST["level6"]);
$komlev7=saiful($_POST["level7"]);
$komlev8=saiful($_POST["level8"]);
$komlev9=saiful($_POST["level9"]);
$komlev10=saiful($_POST["level10"]);

$komger1=saiful($_POST["manager1"]);
$komger2=saiful($_POST["manager2"]);
$komger3=saiful($_POST["manager3"]);
$komger4=saiful($_POST["manager4"]);
$komger5=saiful($_POST["manager5"]);
$komger6=saiful($_POST["manager6"]);
$komger7=saiful($_POST["manager7"]);
$komger8=saiful($_POST["manager8"]);
$komger9=saiful($_POST["manager9"]);
$komger10=saiful($_POST["manager10"]);


$query = "UPDATE settprofit SET sponsor='$komisisponsor', level1='$komlev1', level2='$komlev2', level3='$komlev3', level4='$komlev4', level5='$komlev5', level6='$komlev6', level7='$komlev7', level8='$komlev8', level9='$komlev9', level10='$komlev10', manager1='$komger1', manager2='$komger2', manager3='$komger3', manager4='$komger4', manager5='$komger5', manager6='$komger6', manager7='$komger7', manager8='$komger8', manager9='$komger9', manager10='$komger10' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Setting Web Edited.</b></font><br><br>";

}
?>
<?
$cedeffs=mysql_query("select * from settprofit where id='1'");
while($xcvfrsaa=mysql_fetch_array($cedeffs)){
?>
<div class="col-md-6">
<form class="form-horizontal" action="admin.php?op=9" method="POST">


<div class="form-group">
<label class="col-sm-3 control-label">
Sponsor Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="sponsor" value="<? echo $xcvfrsaa["sponsor"]; ?>" class="form-control" >
<small>How many % profit for Upline from every PH downline </small>
</div>
</div>

<hr>

<div class="form-group">
<label class="col-sm-3 control-label">
Manager 1 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="manager1" value="<? echo $xcvfrsaa["manager1"]; ?>" class="form-control" >
<small>How many % Manager 1 Commission </small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Manager 2 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="manager2" value="<? echo $xcvfrsaa["manager2"]; ?>" class="form-control" >
<small>How many % Manager 2 Commission </small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Manager 3 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="manager3" value="<? echo $xcvfrsaa["manager3"]; ?>" class="form-control" >
<small>How many % Manager 3 Commission </small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Manager 4 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="manager4" value="<? echo $xcvfrsaa["manager4"]; ?>" class="form-control" >
<small>How many % Manager 4 Commission </small>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">
Manager 5 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="manager5" value="<? echo $xcvfrsaa["manager5"]; ?>" class="form-control" >
<small>How many % Manager 5 Commission </small>
</div>
</div>


<hr>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-sm-3 control-label">
Level 1 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level1" value="<? echo $xcvfrsaa["level1"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 1. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 2 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level2" value="<? echo $xcvfrsaa["level2"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 2. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 3 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level3" value="<? echo $xcvfrsaa["level3"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 3. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 4 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level4" value="<? echo $xcvfrsaa["level4"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 4. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 5 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level5" value="<? echo $xcvfrsaa["level5"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 5. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 6 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level6" value="<? echo $xcvfrsaa["level6"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 6. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 7 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level7" value="<? echo $xcvfrsaa["level7"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 7. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 8 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level8" value="<? echo $xcvfrsaa["level8"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 8. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 9 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level9" value="<? echo $xcvfrsaa["level9"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 9. Input 0 to disable. </small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">
Level 10 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level10" value="<? echo $xcvfrsaa["level10"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 10. Input 0 to disable. </small>
</div>
</div>
<input type="hidden" name="id" value="<? echo $xcvfrsaa["id"]; ?>" />
</div><!-- panel-body -->
</div>
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>
								</div>
								</div>
<? } ?>

<?
break;
case (10):
?>

<?

if (isset($_POST["item"]))
{
$item=saiful($_POST["item"]);
$price=saiful($_POST["price"]);
$query = "UPDATE tb_config SET item='$item', price='$price' where item='$item'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Item edited.</b></font><br><br>";
}

if (isset($_GET["item"]))
{

$item=$_GET["item"];
if ($_GET["option"]=="edit")
{
?>

<?

$tablae = mysql_query("SELECT * FROM tb_config where item='$item'");
while ($registroe = mysql_fetch_array($tablae)) {
?>
<br><br>
<form method="post" action="admin.php?op=10">

<input type="hidden" name="id" value="<?= $registroe["id"] ?>">
<div class="form-group">
<label class="col-sm-3 control-label">
Level 9 Commission (%)</label>
<div class="col-sm-9">
<input type="text" name="level9" value="<? echo $xcvfrsaa["level9"]; ?>" class="form-control" >
<small>How many % profit from  PH Downline level 9. Input 0 to disable. </small>
</div>
</div>

<input type="text"  style="width:300px;" name="price" value="<?= $registroe["price"] ?>">
<br><br>
<input type="submit" class="btn btn-primary btn-sm" value="Simpan">

</form>

<br><br>

<?

}

?>
<?
}
}
?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Setting</th><th></th><th>Value</th><th>Description</th><th>Option</th></tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_config where howmany='9' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td>

". $registro["item"] ."

</font></td>
<td width=\"50\" align=\"center\"> : </td>
<td>

". $registro["price"] ."

</font></td>
<td>

". $registro["keterangan"] ."

</font></td>

<td>";

?>

<form method="post" action="admin.php?op=10&item=<?= $registro["item"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>

</font>

</td>

</tr>

<?

} 
?>

</tbody>
</table>
</div>



<?
break;
case (11):
?>

<center>

<h4>Setting Content Web</h4>
        <br>

<?
if ($_POST)
{

$id=saiful($_POST["id"]);
$comments=$_POST["comments"];


$query = "UPDATE konten SET comments='$comments' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Konten Edited.</b></font><br><br>";
}
if (isset($_GET["id"]))
{
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="edit"){
?>


<?
$tablae = mysql_query("SELECT * FROM konten where id='$id'"); 
while ($registroe = mysql_fetch_array($tablae)) { 
?>

<form method="post" action="admin.php?op=11">

<input type="hidden" name="id" value="<?= $registroe["id"] ?>"><br>
Halaman : <br><textarea name="name" cols="40" rows="2"><?= $registroe["name"] ?></textarea><br><br>
Isi Konten : <br><textarea name="comments" class="ckeditor" cols="40" rows="5"><?= $registroe["comments"] ?></textarea><br><br>
<br>

<input type="submit" value="Save" class="btn btn-primary btn-xm">
</form>
<br><br>

<?
}
?>

<?
}

}

?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>


<th>Page</th>
<th>Content</th>
<th>Option</th>

</tr>
</thead>
                                        <tbody>


<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM konten ORDER BY id ASC limit 0,100");
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td >

". $registro["name"] ."


</font></td>
<td >


". $registro["comments"] ."

</font></td>
<td>";

?>

<form method="post" action="admin.php?op=11&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm"  value="Edit">

</form>


</font></td>

</tr>

</tr>
<tr class="alt">
<td></td><td></td><td></td></tr>

<?
}
?>

</table>
</div>
</div>
</div>

    <p>&nbsp;</p>




<?
break;
case (13):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Member GH</th>
<th>Payment GH</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='pending' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>

</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>

</td>
<td>
Amount : $matauang ". number_format($registro["paket"],$desimal) ." <br>
Date Pairing :  ". date("d M Y ",$registro["date"]) ." <br>
Expired :  ". date("d M Y ",$registro["exp"]) ." <br>

</td>

<td>
Username : ". $rowex["username"] ." <br>
Email : ". $rowex["email"] ." <br>
Phone :  ". $rrowex["phone"] ." <br>

</td>
<td>
BTC :  ". $rowex["bitcoin"] ." <br>
Bank :  ". $rowex["bank"] ." -  ". $rowex["norek"] ." - ". $rowex["nama"] ."<br>
Payeer :  ". $rowex["payeer"] ." <br>
Perfect Money :  ". $rowex["perfectmoney"] ." <br>

</td>



</tr>
";} 
?>

</tbody>
</table>
</div>

<?
break;
case (14):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Member GH</th>
<th>Payment GH</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='problem' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "
<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>

</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>

</td>
<td>
Amount : $matauang ". number_format($registro["paket"],$desimal) ." <br>
Date Pairing :  ". date("d M Y ",$registro["date"]) ." <br>
Expired :  ". date("d M Y ",$registro["exp"]) ." <br>

</td>

<td>
Username : ". $rowex["username"] ." <br>
Email : ". $rowex["email"] ." <br>
Phone :  ". $rrowex["phone"] ." <br>

</td>
<td>
BTC :  ". $rowex["bitcoin"] ." <br>
Bank :  ". $rowex["bank"] ." -  ". $rowex["norek"] ." - ". $rowex["nama"] ."<br>
Payeer :  ". $rowex["payeer"] ." <br>
Perfect Money :  ". $rowex["perfectmoney"] ." <br>
</td>



</tr>

";} 
?>

</tbody>
</table>
</div>



<?
break;
case (15):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Member GH</th>
<th>Payment GH</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='sukses' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];


$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>

</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>


</td>
<td>
Amount : $matauang ". number_format($registro["paket"],$desimal) ." <br>
Date Pairing :  ". date("d M Y ",$registro["date"]) ." <br>
Expired :  ". date("d M Y ",$registro["exp"]) ." <br>

</td>

<td>
Username : ". $rowex["username"] ." <br>
Email : ". $rowex["email"] ." <br>
Phone :  ". $rrowex["phone"] ." <br>

</td>
<td>
BTC :  ". $rowex["bitcoin"] ." <br>
 Bank :  ". $rowex["bank"] ." -  ". $rowex["norek"] ." - ". $rowex["nama"] ."<br>
Payeer :  ". $rowex["payeer"] ." <br>
Perfect Money :  ". $rowex["perfectmoney"] ." <br>
</td>



</tr>
";} 
?>

</tbody>
</table>
</div>


<?
break;
case (16):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="frozen")
{
mysql_query("UPDATE tb_ph SET status='frozen' WHERE id='$id'");
echo "<font color=\"green\"><b>PH Transaction Freeze</b></font><br><br>";
}
}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_ph where status='pending' and saldo > 0 ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$totalph=$registro["paket"];
$dijodoh=$registro["saldo"];
$jodohs=$totalph - $dijodoh;

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>

</td>
<td>
Id Trx : ". $registro["idtrx"] ." <br>
Amount : $matauang ". number_format($totalph,$desimal) ." <br>
Date PH :  ". date("d M Y ",$registro["date"]) ." <br>
Not Yet Pairing :  $matauang ". number_format($dijodoh,$desimal) ." <br>
Pairing :  $matauang ". number_format($jodohs,$desimal) ." <br>

</td>
<td>
"; 
?>

<form method="post" action="admin.php?op=16&id=<?= $registro["id"] ?>&option=frozen">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="Freeze Transactions">
</form>
</td>
</tr>
<? } ?>
</tbody>
</table>
</div>

<?
break;
case (166):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="activated")
{
mysql_query("UPDATE tb_ph SET status='pending' WHERE id='$id'");
echo "<font color=\"green\"><b>PH Transaction Activated</b></font><br><br>";
}
}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_ph where status='frozen' and saldo > 0 ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$totalph=$registro["paket"];
$dijodoh=$registro["saldo"];
$jodohs=$totalph - $dijodoh;

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>


</td>
<td>
Id Trx : ". $registro["idtrx"] ." <br>
Amount : $matauang ". number_format($totalph,$desimal) ." <br>
Date PH :  ". date("d M Y ",$registro["date"]) ." <br>
Not Yet Pairing :  $matauang ". number_format($dijodoh,$desimal) ." <br>
Pairing :  $matauang ". number_format($jodohs,$desimal) ." <br>

</td>
<td>
"; 
?>

<form method="post" action="admin.php?op=166&id=<?= $registro["id"] ?>&option=activated">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="Activated Transactions">
</form>
</td>
</tr>
<? } ?>
</tbody>
</table>
</div>


<?
break;
case (260):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="frozen")
{
mysql_query("UPDATE tb_ph SET status='frozen' WHERE id='$id'");
echo "<font color=\"green\"><b>PH Transaction Freeze</b></font><br><br>";
}

if ($option=="cancel"){
$tabla = mysql_query("SELECT * FROM tb_ph where id='$id'"); 
$registro = mysql_fetch_array($tabla);
$namaku=$registro["username"];
$refund=$registro["sisa"];
$paketl=$registro["paket"];

if($paketl==$refund){
$queryz = "DELETE FROM tb_ph WHERE WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>PH Transaction Canceled.</b></font><br><br>";
}
else {
echo "<font color=\"#cc0000\"><b>PH Transaction cannot be Canceled.</b></font><br><br>";
}
}
}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_ph where status='pending' and saldo > 0 ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$totalph=$registro["paket"];
$dijodoh=$registro["saldo"];
$jodohs=$totalph - $dijodoh;

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);

if($totalph==$dijodoh){
echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>

</td>
<td>
Id Trx : ". $registro["idtrx"] ." <br>
Amount : $matauang ". number_format($totalph,$desimal) ." <br>
Date GH :  ". date("d M Y ",$registro["date"]) ." <br>
Not Yet Pairing :  $matauang ". number_format($dijodoh,$desimal) ." <br>
Pairing :  $matauang ". number_format($jodohs,$desimal) ." <br>

</td>
<td>
"; 
?>

<form method="post" action="admin.php?op=260&id=<?= $registro["id"] ?>&option=frozen">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="Freeze Transactions">
</form>
<form method="post" action="admin.php?op=260&id=<?= $registro["id"] ?>&option=cancel">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-danger btn-sm" value="Cancel Transactions">

</form>
</td></tr>
<? } else {}}?>
</tbody>
</table>
</div>

<?
break;
case (17):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Member GH</th>
<th>Payment GH</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='pending' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>

</td>
<td>
Id Trx : ". $rowexx["idtrx"] ." <br>
Amount : $matauang ". number_format($registro["paket"],$desimal) ." <br>
Date Pairing :  ". date("d M Y ",$registro["date"]) ." <br>
Expired :  ". date("d M Y ",$registro["exp"]) ." <br>

</td>

<td>
Username : ". $rowex["username"] ." <br>
Email : ". $rowex["email"] ." <br>
Phone :  ". $rrowex["phone"] ." <br>
Upline :  ". $rowex["referer"] ." <br>
</td>
<td>
BTC :  ". $rowex["bitcoin"] ." <br>
Bank :  ". $rowex["bank"] ." -  ". $rowex["norek"] ." - ". $rowex["nama"] ."<br>
Payeer :  ". $rowex["payeer"] ." <br>
Perfect Money :  ". $rowex["perfectmoney"] ." <br>
</td>



</tr>
";} 
?>

</tbody>
</table>
</div>

<?
break;
case (18):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Member GH</th>
<th>Payment GH</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='problem' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>
</td>
<td>
Id Trx : ". $rowexx["idtrx"] ." <br>
Amount : $matauang ". number_format($registro["paket"],$desimal) ." <br>
Date Pairing :  ". date("d M Y ",$registro["date"]) ." <br>
Expired :  ". date("d M Y ",$registro["exp"]) ." <br>

</td>

<td>
Username : ". $rowex["username"] ." <br>
Email : ". $rowex["email"] ." <br>
Phone :  ". $rrowex["phone"] ." <br>
Upline :  ". $rowex["referer"] ." <br>
</td>
<td>
BTC :  ". $rowex["bitcoin"] ." <br>
Bank :  ". $rowex["bank"] ." -  ". $rowex["norek"] ." - ". $rowex["nama"] ."<br>
Payeer :  ". $rowex["payeer"] ." <br>
Perfect Money :  ". $rowex["perfectmoney"] ." <br>
</td>



</tr>
";} 
?>

</tbody>
</table>
</div>



<?
break;
case (19):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Member GH</th>
<th>Payment GH</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='sukses' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>
</td>
<td>
Id Trx : ". $rowexx["idtrx"] ." <br>
Amount : $matauang ". number_format($registro["paket"],$desimal) ." <br>
Date Pairing :  ". date("d M Y ",$registro["date"]) ." <br>
Expired :  ". date("d M Y ",$registro["exp"]) ." <br>

</td>

<td>
Username : ". $rowex["username"] ." <br>
Email : ". $rowex["email"] ." <br>
Phone :  ". $rrowex["phone"] ." <br>
Upline :  ". $rowex["referer"] ." <br>
</td>
<td>
BTC :  ". $rowex["bitcoin"] ." <br>
Bank :  ". $rowex["bank"] ." -  ". $rowex["norek"] ." - ". $rowex["nama"] ."<br>
Payeer :  ". $rowex["payeer"] ." <br>
Perfect Money :  ". $rowex["perfectmoney"] ." <br>
</td>



</tr>
";} 
?>

</tbody>
</table>
</div>


<?
break;
case (20):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="frozen")
{
mysql_query("UPDATE tb_gh SET status='frozen' WHERE id='$id'");
echo "<font color=\"green\"><b>GH Transaction Freeze</b></font><br><br>";
}


}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member GH</th>
<th>Payment GH</th>
<th>GH Detail</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_gh where status='pending' and saldo > 0 ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$totalph=$registro["paket"];
$dijodoh=$registro["saldo"];
$jodohs=$totalph - $dijodoh;

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>


</td>
<td>
Id Trx : ". $registro["idtrx"] ." <br>
Amount : $matauang ". number_format($totalph,$desimal) ." <br>
Date GH :  ". date("d M Y ",$registro["date"]) ." <br>
Not Yet Pairing :  $matauang ". number_format($dijodoh,$desimal) ." <br>
Pairing :  $matauang ". number_format($jodohs,$desimal) ." <br>

</td>
<td>
"; 
?>

<form method="post" action="admin.php?op=20&id=<?= $registro["id"] ?>&option=frozen">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="Freeze Transactions">
</form>

</td></tr>
<? } ?>
</tbody>
</table>
</div>



<?
break;
case (220):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="activated")
{
mysql_query("UPDATE tb_gh SET status='pending' WHERE id='$id'");
echo "<font color=\"green\"><b>GH Transaction Activated</b></font><br><br>";
}

}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member GH</th>
<th>Payment GH</th>
<th>GH Detail</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_gh where status='frozen' and saldo > 0 ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$totalph=$registro["paket"];
$dijodoh=$registro["saldo"];
$jodohs=$totalph - $dijodoh;

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>

</td>
<td>
Id Trx : ". $registro["idtrx"] ." <br>
Amount : $matauang ". number_format($totalph,$desimal) ." <br>
Date GH :  ". date("d M Y ",$registro["date"]) ." <br>
Not Yet Pairing :  $matauang ". number_format($dijodoh,$desimal) ." <br>
Pairing :  $matauang ". number_format($jodohs,$desimal) ." <br>

</td>
<td>
"; 
?>

<form method="post" action="admin.php?op=220&id=<?= $registro["id"] ?>&option=activated">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="activated Transactions">
</form>

</td></tr>
<? } ?>
</tbody>
</table>
</div>

<?
break;
case (230):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="frozen")
{
mysql_query("UPDATE tb_gh SET status='frozen' WHERE id='$id'");
echo "<font color=\"green\"><b>GH Transaction Freeze</b></font><br><br>";
}

if ($option=="cancel"){
$tabla = mysql_query("SELECT * FROM tb_gh where id='$id'"); 
$registro = mysql_fetch_array($tabla);
$namaku=$registro["username"];
$refund=$registro["sisa"];
$paketl=$registro["paket"];

if($paketl==$refund){
$queryzz = "UPDATE tb_users SET money=money+'$refund' WHERE username='$namaku'";
mysql_query($queryzz) or die(mysql_error());
$queryz = "DELETE FROM tb_gh WHERE WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>GH Transaction Canceled.</b></font><br><br>";
}
else {
echo "<font color=\"#cc0000\"><b>GH Transaction cannot be Canceled.</b></font><br><br>";
}
}
}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Member GH</th>
<th>Payment GH</th>
<th>GH Detail</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_gh where status='pending' and saldo > 0 ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$totalph=$registro["paket"];
$dijodoh=$registro["saldo"];
$jodohs=$totalph - $dijodoh;

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);

if($totalph==$dijodoh){
echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>

</td>
<td>
Id Trx : ". $registro["idtrx"] ." <br>
Amount : $matauang ". number_format($totalph,$desimal) ." <br>
Date GH :  ". date("d M Y ",$registro["date"]) ." <br>
Not Yet Pairing :  $matauang ". number_format($dijodoh,$desimal) ." <br>
Pairing :  $matauang ". number_format($jodohs,$desimal) ." <br>

</td>
<td>
"; 
?>

<form method="post" action="admin.php?op=230&id=<?= $registro["id"] ?>&option=frozen">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="Freeze Transactions">
</form>
<form method="post" action="admin.php?op=230&id=<?= $registro["id"] ?>&option=cancel">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-danger btn-sm" value="Cancel Transactions">

</form>
</td></tr>
<? } else {}}?>
</tbody>
</table>
</div>




<?
break;
case (21):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Data Member</th>
<th>Address</th>
<th>Payment</th>
<th>Transaction</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_users where suspend!='1' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];

$sqle = "SELECT SUM(paket) AS cnt FROM tb_ph WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

$sqlex = "SELECT SUM(paket) AS cnt FROM tb_gh WHERE username='$namaku'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);
$pendx = $rowex['cnt'];

$sqlexx = "SELECT SUM(fee) AS cnt FROM tb_fee WHERE username='$namaku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);
$pendxx = $rowexx['cnt'];

$sqlexxx = "SELECT COUNT(*) AS cnt FROM tiket WHERE username='$namaku'";
$resultexxx = mysql_query($sqlexxx);        
$rowexxx = mysql_fetch_array($resultexxx);
$pendxxx = $rowexxx['cnt'];

$sqlexxxx = "SELECT COUNT(*) AS cnt FROM tb_users WHERE referer='$namaku'";
$resultexxxx = mysql_query($sqlexxxx);        
$rowexxxx = mysql_fetch_array($resultexxxx);
$pendxxxx = $rowexxxx['cnt'];


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Register : ". date("d M Y ",$registro["joindate"]) ." <br>
Login :  ". date("d M Y ",$registro["lastlogdate"]) ."<br>
Full Name :  ". $registro["namalengkap"] ." <br>
Upline :  ". $registro["referer"] ." <br>
</td>

<td>
Address : ". $registro["alamat"] ." <br>
City : ". $registro["kota"] ." <br>
Country :  ". $registro["country"] ." <br>
Email :  ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
</td>

<td>

BTC :  ". $registro["bitcoin"] ." <br>
Bank :  ". $registro["bank"] ." -  ". $registro["norek"] ." - ". $registro["nama"] ."<br>
Payeer :  ". $registro["payeer"] ." <br>
Perfect Money :  ". $registro["perfectmoney"] ." <br>
</td>

<td>
Total PH : $matauang ". number_format($pend) ." <br>
Total GH : $matauang ". number_format($pendx) ." <br>
Total Fee :  $matauang ". number_format($pendxx) ." <br>
Total Ticket :  ". number_format($pendxxx) ." Ticket<br>
Total Referal :  ". number_format($pendxxxx) ." Member<br>
Account Balance : $matauang ". number_format($registro["money"]) ." <br>
Profit Balance : $matauang ". number_format($registro["moneys"]) ." <br>
</td>


</tr>
";} 
?>

</tbody>
</table>
</div>


<?
break;
case (22):
?>


<?
if (isset($_GET["id"]))
{
$id=abs((int)$_GET["id"]);
if ($_GET["option"]=="aktifkan")
{
$queryz = "UPDATE tb_users SET suspend='0'  WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Activated.</b></font><br><br>";

}

}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Data Member</th>
<th>Address</th>
<th>Payment</th>
<th>Transaction</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_users where suspend='1' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];

$sqle = "SELECT SUM(paket) AS cnt FROM tb_ph WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

$sqlex = "SELECT SUM(paket) AS cnt FROM tb_gh WHERE username='$namaku'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);
$pendx = $rowex['cnt'];

$sqlexx = "SELECT SUM(fee) AS cnt FROM tb_fee WHERE username='$namaku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);
$pendxx = $rowexx['cnt'];

$sqlexxx = "SELECT COUNT(*) AS cnt FROM tiket WHERE username='$namaku'";
$resultexxx = mysql_query($sqlexxx);        
$rowexxx = mysql_fetch_array($resultexxx);
$pendxxx = $rowexxx['cnt'];

$sqlexxxx = "SELECT COUNT(*) AS cnt FROM tb_users WHERE referer='$namaku'";
$resultexxxx = mysql_query($sqlexxxx);        
$rowexxxx = mysql_fetch_array($resultexxxx);
$pendxxxx = $rowexxxx['cnt'];


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Register : ". date("d M Y ",$registro["joindate"]) ." <br>
Login :  ". date("d M Y ",$registro["lastlogdate"]) ."<br>
IP :  ". $registro["ip"] ." <br>
Full Name :  ". $registro["namalengkap"] ." <br>
Upline :  ". $registro["referer"] ." <br>
</td>

<td>
Address : ". $registro["alamat"] ." <br>
City : ". $registro["kota"] ." <br>
Provincy :  ". $registro["country"] ." <br>
Zip Code :  ". $registro["kodepos"] ." <br>
Email :  ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
</td>

<td>

BTC :  ". $registro["bitcoin"] ." <br>
Bank :  ". $registro["bank"] ." -  ". $registro["norek"] ." - ". $registro["nama"] ."<br>
Payeer :  ". $registro["payeer"] ." <br>
Perfect Money :  ". $registro["perfectmoney"] ." <br>
</td>

<td>
Total PH : $matauang ". number_format($pend) ." <br>
Total GH : $matauang ". number_format($pendx) ." <br>
Total Fee :  $matauang ". number_format($pendxx) ." <br>
Total Ticket :  ". number_format($pendxxx) ." Ticket<br>
Total Referal :  ". number_format($pendxxxx) ." Member<br>
Account Balance : $matauang ". number_format($registro["money"]) ." <br>
Profit Balance : $matauang ". number_format($registro["moneys"]) ." <br>
</td>

<td>";

?>


<form method="post" action="admin.php?op=22&id=<?= $registro["id"] ?>&option=aktifkan">

<input type="submit" class="btn btn-primary btn-sm" value="Aktifkan">

</form>


</td>

</tr>


<?

} 

?>
</tbody>
</table>
</div>


<?
break;
case (25):
?>

<?
if (isset($_POST["id"]))
{
$id=saiful($_POST["id"]);

$username=saiful($_POST["username"]);
$password=saiful($_POST["password"]);
$namalengkap=saiful($_POST["namalengkap"]);
$referer=saiful($_POST["referer"]);
$email=saiful($_POST["email"]);
$phone=saiful($_POST["phone"]);

$alamat=saiful($_POST["alamat"]);
$kota=saiful($_POST["kota"]);
$country=saiful($_POST["country"]);
$kodepos=saiful($_POST["kodepos"]);

$bitcoin=saiful($_POST["bitcoin"]);
$payeer=saiful($_POST["payeer"]);
$perfectmoney=saiful($_POST["perfectmoney"]);
$bank=saiful($_POST["bank"]);
$norek=saiful($_POST["norek"]);
$nama=saiful($_POST["nama"]);

$fb=saiful($_POST["fb"]);
$tw=saiful($_POST["tw"]);
$ym=saiful($_POST["ym"]);
$bbm=saiful($_POST["bbm"]);
$wa=saiful($_POST["wa"]);
$website=saiful($_POST["website"]);

$money=saiful($_POST["money"]);
$moneys=saiful($_POST["moneys"]);
$pin=saiful($_POST["pin"]);

$query = "UPDATE tb_users SET 
username='$username', 
password='$password', 
namalengkap='$namalengkap', 
referer='$referer', 
email='$email', 
phone='$phone', 

alamat='$alamat',
kota='$kota',
country='$country',
kodepos='$kodepos',

bitcoin='$bitcoin', 
payeer='$payeer',
Perfectmoney='$perfectmoney',
bank='$bank', 
norek='$norek',
nama='$nama',

fb='$fb',
tw='$tw',
ym='$ym',
bbm='$bbm',
wa='$wa',
website='$website',

money='$money',
moneys='$moneys',
pin='$pin' where id='$id'";

mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>User edited.</b></font><br><br>";
}

if (isset($_GET["id"]))
{

$id=abs((int)$_GET["id"]);

if ($_GET["option"]=="deleted")
{
$queryz = "DELETE from tb_users WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Deleted.</b></font><br><br>";
}



if ($_GET["option"]=="edit")
{
?>

<?
$tablae = mysql_query("SELECT * FROM tb_users where id='$id'"); 
while ($registroe = mysql_fetch_array($tablae)) {
?>


 <div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Edit Member</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form class="form-horizontal" action="admin.php?op=25" method="POST">


<input type="hidden" name="id" value="<?= $registroe["id"] ?>">


<div class="form-group">
<label class="col-sm-4 control-label">Username</label>
<div class="col-sm-8">
<input type="text" name="username" class="form-control" value="<?= $registroe["username"] ?>" readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Password</label>
<div class="col-sm-8">
<input type="text" name="password" class="form-control" value="<?= $registroe["password"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Full name</label>
<div class="col-sm-8">
<input type="text" name="namalengkap" class="form-control" value="<?= $registroe["namalengkap"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Upline</label>
<div class="col-sm-8">
<input type="text" name="referer" class="form-control" value="<?= $registroe["referer"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Email</label>
<div class="col-sm-8">
<input type="text" name="email" class="form-control" value="<?= $registroe["email"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Phone</label>
<div class="col-sm-8">
<input type="text" name="phone" class="form-control" value="<?= $registroe["phone"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Address</label>
<div class="col-sm-8">
<input type="text" name="alamat" class="form-control" value="<?= $registroe["alamat"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">City</label>
<div class="col-sm-8">
<input type="text" name="kota" class="form-control" value="<?= $registroe["kota"] ?>">
</div>
</div>



<div class="form-group">
<label class="col-sm-4 control-label">Provincy</label>
<div class="col-sm-8">
<input type="text" name="country" class="form-control" value="<?= $registroe["country"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Zip Code</label>
<div class="col-sm-8">
<input type="text" name="kodepos" class="form-control" value="<?= $registroe["kodepos"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Bitcoin Address</label>
<div class="col-sm-8">
<input type="text" name="bitcoin" class="form-control" value="<?= $registroe["bitcoin"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Payeer</label>
<div class="col-sm-8">
<input type="text" name="payeer" class="form-control" value="<?= $registroe["payeer"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Perfect Money</label>
<div class="col-sm-8">
<input type="text" name="perfectmoney" class="form-control" value="<?= $registroe["perfectmoney"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Bank</label>
<div class="col-sm-8">
<input type="text" name="bank" class="form-control" value="<?= $registroe["bank"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Account Number</label>
<div class="col-sm-8">
<input type="text" name="norek" class="form-control" value="<?= $registroe["norek"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Account Holder</label>
<div class="col-sm-8">
<input type="text" name="nama" class="form-control" value="<?= $registroe["nama"] ?>">
</div>
</div>



<div class="form-group">
<label class="col-sm-4 control-label">Account Balance</label>
<div class="col-sm-8">
<input type="text" name="money" class="form-control" value="<?= $registroe["money"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Bonus Balance</label>
<div class="col-sm-8">
<input type="text" name="moneys" class="form-control" value="<?= $registroe["moneys"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">PIN</label>
<div class="col-sm-8">
<input type="text" name="pin" class="form-control" value="<?= $registroe["pin"] ?>">
</div>
</div>


                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
                            </div><!-- col-md-6 -->
<br><br>
<?
}
}
}
?>


<?

$search=$_POST["search"];
$metode=$_POST["metode"];

if($_POST['search']){
$TAMANO_PAGINA = 2000;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
    $resp = mysql_query("select * from tb_users where $metode LIKE '%$search%' order by id limit $inicio,$TAMANO_PAGINA") or die (mysql_error());

    if(mysql_num_rows($resp) == "0") {

     echo "No Result. Try Again .";

    } else {

            echo "<center><H2><strong>RESULT SEARCH</strong></H2></center><br>";



			?>



<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Data Member</th>
<th>Address</th>
<th>Payment</th>
<th>Transaction</th>
<th>Option</th>
</tr>
</thead><tbody>
<?



                   while($registro = mysql_fetch_array($resp)) {

                  $namaku=$registro["username"];
$namamu=$registro["referer"];

$sqle = "SELECT SUM(paket) AS cnt FROM tb_ph WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

$sqlex = "SELECT SUM(paket) AS cnt FROM tb_gh WHERE username='$namaku'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);
$pendx = $rowex['cnt'];

$sqlexx = "SELECT SUM(fee) AS cnt FROM tb_fee WHERE username='$namaku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);
$pendxx = $rowexx['cnt'];

$sqlexxx = "SELECT COUNT(*) AS cnt FROM tiket WHERE username='$namaku'";
$resultexxx = mysql_query($sqlexxx);        
$rowexxx = mysql_fetch_array($resultexxx);
$pendxxx = $rowexxx['cnt'];

$sqlexxxx = "SELECT COUNT(*) AS cnt FROM tb_users WHERE referer='$namaku'";
$resultexxxx = mysql_query($sqlexxxx);        
$rowexxxx = mysql_fetch_array($resultexxxx);
$pendxxxx = $rowexxxx['cnt'];



		   

echo "


<tr>
<td>
Username : ". $registro["username"] ." <br>
Register : ". date("d M Y ",$registro["joindate"]) ." <br>
Login :  ". date("d M Y ",$registro["lastlogdate"]) ."<br>
IP :  ". $registro["ip"] ." <br>
Full Name :  ". $registro["namalengkap"] ." <br>
Upline :  ". $registro["referer"] ." <br>
</td>

<td>
Address : ". $registro["alamat"] ." <br>
City : ". $registro["kota"] ." <br>
Provincy :  ". $registro["country"] ." <br>
Zip Code :  ". $registro["kodepos"] ." <br>
Email :  ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
</td>


<td>

BTC :  ". $registro["bitcoin"] ." <br>
Bank :  ". $registro["bank"] ." -  ". $registro["norek"] ." - ". $registro["nama"] ."<br>
Payeer :  ". $registro["payeer"] ." <br>
Perfect Money :  ". $registro["perfectmoney"] ." <br>
</td>

<td>
Total PH : $matauang ". number_format($pend) ." <br>
Total GH : $matauang ". number_format($pendx) ." <br>
Total Fee :  $matauang ". number_format($pendxx) ." <br>
Total Ticket :  ". number_format($pendxxx) ." Ticket<br>
Total Referal :  ". number_format($pendxxxx) ." Member<br>
Account Balance : $matauang ". number_format($registro["money"]) ." <br>
Profit Balance : $matauang ". number_format($registro["moneys"]) ." <br>
</td>


<td>";

?>


<form method="post" action="admin.php?op=25&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>


<form method="post" action="admin.php?op=25&id=<?= $registro["id"] ?>&option=deleted">

<input type="submit" class="btn btn-primary btn-sm" value="Delete Member">

</form>

</td>

</tr>


<?

} 

?>


</tbody>
</table>
</div>


<?

}

}else{



	?>

 <div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Search Member</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form class="form-horizontal" action="" method="POST">
<div class="form-group">
                                                <label class="col-sm-4 control-label">Username</label>
                                                <div class="col-sm-8">

<input type="text" name="search" class="form-control" placeholder="Input Username">
</div>
                                    </div><!-- form-group -->
                                    
<input type="hidden" name="metode" class="form-control" value="username" placeholder="Input Username">

                                  


</div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>

<br><br>


<?

}

?>



<?
break;
case (23):
?>

<?
if (isset($_POST["id"]))
{
$id=saiful($_POST["id"]);

$username=saiful($_POST["username"]);
$password=saiful($_POST["password"]);
$namalengkap=saiful($_POST["namalengkap"]);
$referer=saiful($_POST["referer"]);
$email=saiful($_POST["email"]);
$phone=saiful($_POST["phone"]);

$alamat=saiful($_POST["alamat"]);
$kota=saiful($_POST["kota"]);
$country=saiful($_POST["country"]);
$kodepos=saiful($_POST["kodepos"]);

$bitcoin=saiful($_POST["bitcoin"]);
$payeer=saiful($_POST["payeer"]);
$perfectmoney=saiful($_POST["perfectmoney"]);
$bank=saiful($_POST["bank"]);
$norek=saiful($_POST["norek"]);
$nama=saiful($_POST["nama"]);

$fb=saiful($_POST["fb"]);
$tw=saiful($_POST["tw"]);
$ym=saiful($_POST["ym"]);
$bbm=saiful($_POST["bbm"]);
$wa=saiful($_POST["wa"]);
$website=saiful($_POST["website"]);

$money=saiful($_POST["money"]);
$moneys=saiful($_POST["moneys"]);
$pin=saiful($_POST["pin"]);

$query = "UPDATE tb_users SET 
username='$username', 
password='$password', 
namalengkap='$namalengkap', 
referer='$referer', 
email='$email', 
phone='$phone', 

alamat='$alamat',
kota='$kota',
country='$country',
kodepos='$kodepos',

bitcoin='$bitcoin', 
payeer='$payeer',
Perfectmoney='$perfectmoney',
bank='$bank', 
norek='$norek',
nama='$nama',

fb='$fb',
tw='$tw',
ym='$ym',
bbm='$bbm',
wa='$wa',
website='$website',

money='$money',
moneys='$moneys',
pin='$pin' where id='$id'";

mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>User edited.</b></font><br><br>";
}

if (isset($_GET["id"]))
{

$id=abs((int)$_GET["id"]);
if ($_GET["option"]=="edit")
{
?>

<?
$tablae = mysql_query("SELECT * FROM tb_users where id='$id'"); 
while ($registroe = mysql_fetch_array($tablae)) {
?>


 <div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Edit Member</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form class="form-horizontal" action="admin.php?op=23" method="POST">


<input type="hidden" name="id" value="<?= $registroe["id"] ?>">


<div class="form-group">
<label class="col-sm-4 control-label">Username</label>
<div class="col-sm-8">
<input type="text" name="username" class="form-control" value="<?= $registroe["username"] ?>" readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Password</label>
<div class="col-sm-8">
<input type="text" name="password" class="form-control" value="<?= $registroe["password"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Full name</label>
<div class="col-sm-8">
<input type="text" name="namalengkap" class="form-control" value="<?= $registroe["namalengkap"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Upline</label>
<div class="col-sm-8">
<input type="text" name="referer" class="form-control" value="<?= $registroe["referer"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Email</label>
<div class="col-sm-8">
<input type="text" name="email" class="form-control" value="<?= $registroe["email"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Phone</label>
<div class="col-sm-8">
<input type="text" name="phone" class="form-control" value="<?= $registroe["phone"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Address</label>
<div class="col-sm-8">
<input type="text" name="alamat" class="form-control" value="<?= $registroe["alamat"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">City</label>
<div class="col-sm-8">
<input type="text" name="kota" class="form-control" value="<?= $registroe["kota"] ?>">
</div>
</div>



<div class="form-group">
<label class="col-sm-4 control-label">Provincy</label>
<div class="col-sm-8">
<input type="text" name="country" class="form-control" value="<?= $registroe["country"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Zip Code</label>
<div class="col-sm-8">
<input type="text" name="kodepos" class="form-control" value="<?= $registroe["kodepos"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Bitcoin Address</label>
<div class="col-sm-8">
<input type="text" name="bitcoin" class="form-control" value="<?= $registroe["bitcoin"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">payeer</label>
<div class="col-sm-8">
<input type="text" name="payeer" class="form-control" value="<?= $registroe["payeer"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Perfect Money</label>
<div class="col-sm-8">
<input type="text" name="perfectmoney" class="form-control" value="<?= $registroe["perfectmoney"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Bank</label>
<div class="col-sm-8">
<input type="text" name="bank" class="form-control" value="<?= $registroe["bank"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Account Number</label>
<div class="col-sm-8">
<input type="text" name="norek" class="form-control" value="<?= $registroe["norek"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Account Holder</label>
<div class="col-sm-8">
<input type="text" name="nama" class="form-control" value="<?= $registroe["nama"] ?>">
</div>
</div>



<div class="form-group">
<label class="col-sm-4 control-label">Account Balance</label>
<div class="col-sm-8">
<input type="text" name="money" class="form-control" value="<?= $registroe["money"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Bonus Balance</label>
<div class="col-sm-8">
<input type="text" name="moneys" class="form-control" value="<?= $registroe["moneys"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">PIN</label>
<div class="col-sm-8">
<input type="text" name="pin" class="form-control" value="<?= $registroe["pin"] ?>">
</div>
</div>


                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
                            </div><!-- col-md-6 -->
<br><br>
<?
}
}
if ($_GET["option"]=="suspend")
{
$queryz = "UPDATE tb_users set suspend='1' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Suspended.</b></font><br><br>";
}
}
?>


<?

$search=$_POST["search"];
$metode=$_POST["metode"];

if($_POST['search']){
$TAMANO_PAGINA = 2000;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
    $resp = mysql_query("select * from tb_users where $metode LIKE '%$search%' order by id limit $inicio,$TAMANO_PAGINA") or die (mysql_error());

    if(mysql_num_rows($resp) == "0") {

     echo "No Result. try Again .";

    } else {

            echo "<center><H2><strong>RESULT SEARCH</strong></H2></center><br>";



			?>



<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Data Member</th>
<th>Address</th>
<th>Payment</th>
<th>Transaction</th>
<th>Option</th>
</tr>
</thead><tbody>
<?



                   while($registro = mysql_fetch_array($resp)) {

                  $namaku=$registro["username"];
$namamu=$registro["referer"];

$sqle = "SELECT SUM(paket) AS cnt FROM tb_ph WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

$sqlex = "SELECT SUM(paket) AS cnt FROM tb_gh WHERE username='$namaku'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);
$pendx = $rowex['cnt'];

$sqlexx = "SELECT SUM(fee) AS cnt FROM tb_fee WHERE username='$namaku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);
$pendxx = $rowexx['cnt'];

$sqlexxx = "SELECT COUNT(*) AS cnt FROM tiket WHERE username='$namaku'";
$resultexxx = mysql_query($sqlexxx);        
$rowexxx = mysql_fetch_array($resultexxx);
$pendxxx = $rowexxx['cnt'];

$sqlexxxx = "SELECT COUNT(*) AS cnt FROM tb_users WHERE referer='$namaku'";
$resultexxxx = mysql_query($sqlexxxx);        
$rowexxxx = mysql_fetch_array($resultexxxx);
$pendxxxx = $rowexxxx['cnt'];



		   

echo "


<tr>
<td>
Username : ". $registro["username"] ." <br>
Register : ". date("d M Y ",$registro["joindate"]) ." <br>
Login :  ". date("d M Y ",$registro["lastlogdate"]) ."<br>
IP :  ". $registro["ip"] ." <br>
Full Name :  ". $registro["namalengkap"] ." <br>
Upline :  ". $registro["referer"] ." <br>
</td>

<td>
Address : ". $registro["alamat"] ." <br>
City : ". $registro["kota"] ." <br>
Provincy :  ". $registro["country"] ." <br>
Zip Code :  ". $registro["kodepos"] ." <br>
Email :  ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
</td>

<td>

BTC :  ". $registro["bitcoin"] ." <br>
Bank :  ". $registro["bank"] ." -  ". $registro["norek"] ." - ". $registro["nama"] ."<br>
Payeer :  ". $registro["payeer"] ." <br>
Perfect Money :  ". $registro["perfectmoney"] ." <br>
</td>

<td>
Total PH : $matauang ". number_format($pend) ." <br>
Total GH : $matauang ". number_format($pendx) ." <br>
Total Fee :  $matauang ". number_format($pendxx) ." <br>
Total Ticket :  ". number_format($pendxxx) ." Ticket<br>
Total Referal :  ". number_format($pendxxxx) ." Member<br>
Account Balance : $matauang ". number_format($registro["money"]) ." <br>
Profit Balance : $matauang ". number_format($registro["moneys"]) ." <br>
</td>


<td>";

?>


<form method="post" action="admin.php?op=23&id=<?= $registro["id"] ?>&option=suspend">

<input type="submit" class="btn btn-primary btn-sm" value="Suspend">

</form>
<br>

<form method="post" action="admin.php?op=23&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>

</td>

</tr>


<?

} 

?>


</tbody>
</table>
</div>


<?

}

}else{



	?>

 <div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Search Member</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form class="form-horizontal" action="" method="POST">
<div class="form-group">
                                                <label class="col-sm-4 control-label">Username</label>
                                                <div class="col-sm-8">

<input type="text" name="search" class="form-control" placeholder="Input Username">
</div>
                                    </div><!-- form-group -->
                                    
                                                 
<input type="hidden" value="username" name="metode">

					
</div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>

<br><br>


<?

}

?>


<?
break;
case (36):
?>

<center>


<?
if ($_POST)
{

$id=$_POST["id"];
$subject=$_POST["subject"];
$comments=$_POST["comments"];
$ip=$_POST["ip"];


$query = "UPDATE berita SET subject='$subject', comments='$comments' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>News Edited!.</b></font><br><br>";
}
if (isset($_GET["id"]))
{
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="edit"){
?>


<?
$tablae = mysql_query("SELECT * FROM berita where id='$id'"); 
while ($registroe = mysql_fetch_array($tablae)) { 
?>

<form method="post" "form-horizontal" action="admin.php?op=36">

<input type="hidden" name="id" value="<?= $registroe["id"] ?>"><br>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Edit News</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<div class="form-group">
                                                <label class="col-sm-4 control-label">Subject</label>
                                                <div class="col-sm-8">

<input type="text" name="subject" class="form-control" value="<?= $registroe["subject"] ?>">
</div>
                                    </div><!-- form-group -->
									<div class="form-group">
                                                <label class="col-sm-4 control-label">News </label>
                                                <div class="col-sm-8">

<textarea name="comments" class="form-control"><?= $registroe["comments"] ?></textarea>
</div>
                                    </div><!-- form-group -->
                                    
                                   
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>

<?
}
?>

<?
}
if ($option=="delete"){

$queryz = "DELETE FROM berita WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>News Deleted</b></font><br><br>";

}
}

?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>
<th>Subject</th>
<th>News</th>
<th>Option</th>

</tr>
</thead>
                                        <tbody>


<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM berita ORDER BY id ASC limit $inicio,$TAMANO_PAGINA");
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td >

". $registro["subject"] ."


</font></td>
<td >


". $registro["comments"] ."

</font></td>
<td>";

?>

<form method="post" action="admin.php?op=36&id=<?= $registro["id"] ?>&option=delete">

<input type="submit" class="btn btn-primary btn-sm" value="Delete">

</form>
<form method="post" action="admin.php?op=36&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm"  value="Edit">

</form>


</font></td>

</tr>

<?
} 
?>

</table>


<?
break;
case (35):
?>
<?
if ($_POST) {
$name=saiful($_POST["name"]);
$email=saiful($_POST["email"]);
$subject=saiful($_POST["subject"]);
$comments=saiful($_POST["comments"]);

if ($subject==""){
$error = 1;
$errormsg .= "<b>Error - </b>Input Subject News<br />";
}

if ($comments==""){

$error = 1;

$errormsg .= "<b>Error - </b> Input News!<br />";

}

if($error == 1)

{

print $errormsg;

} else {

$laip = $_SERVER['REMOTE_ADDR'];

$query = "INSERT INTO berita (subject, comments, ip, date) VALUES('$subject','$comments','$laip','$eltiempo')";
mysql_query($query) or die(mysql_error());
echo" <br><br><br>News Added!"; 
exit();

}

}

?>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Create News</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form method="post" class="form-horizontal" action="admin.php?op=35" name="form">
<div class="form-group">
                                                <label class="col-sm-4 control-label">Subject</label>
                                                <div class="col-sm-8">

<input type="text" name="subject" class="form-control" value="<?= $registroe["subject"] ?>">
</div>
                                    </div><!-- form-group -->
									<div class="form-group">
                                                <label class="col-sm-4 control-label">News </label>
                                                <div class="col-sm-8">

<textarea name="comments" class="form-control"><?= $registroe["comments"] ?></textarea>
</div>
                                    </div><!-- form-group -->
                                    
                                   
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>




</tbody>
</table>
</div>


<?

break;

case (399):

?>

<?

if (isset($_POST["id"]))

{


$id=saiful($_POST["id"]);
$username=saiful($_POST["username"]);
$email=saiful($_POST["email"]);
$phone=saiful($_POST["phone"]);
$complaints=saiful($_POST["complaints"]);
$date=saiful($_POST["date"]);
$message=saiful($_POST["message"]);
$proof=saiful($_POST["proof"]);
$query = "UPDATE exsupport SET reply='$reply' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Messages Replied!.</b></font><br><br>";
}

if (isset($_GET["id"]))
{
$id=abs((int)$_GET["id"]);
if ($_GET["option"]=="edit")
{
?>

<?
$tablae = mysql_query("SELECT * FROM exsupport where id='$id'");
while ($registroe = mysql_fetch_array($tablae)) { 
?>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Reply Message</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form method="post" class="form-horizontal" action="admin.php?op=39">

<input type="hidden" name="id" value="<?= $registroe["id"] ?>">

<div class="form-group">
                                                <label class="col-sm-4 control-label">Messages</label>
                                                <div class="col-sm-8">

<input type="text" name="message" class="form-control" value="<?= $registroe["message"] ?>">
</div>
                                    </div><!-- form-group -->
									<div class="form-group">
                                                <label class="col-sm-4 control-label">Reply </label>
                                                <div class="col-sm-8">

<textarea name="reply" class="form-control"><?= $registroe["reply"] ?></textarea>
</div>
                                    </div><!-- form-group -->
									
  <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>

</form>

<br><br>

<?

}

?>





<?

}

if ($_GET["option"]=="delete")

{

$queryz = "DELETE FROM exsupport WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Messages deleted.</b></font><br><br>";
}

}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th class="matrixColumn"><h6>Sender</h6></th>
<th class="matrixColumn"><h6>Email</h6></th>
<th class="matrixColumn"><h6>Subject</h6></th>
<th class="matrixColumn"><h6>Messages</h6></th>
<th class="matrixColumn"><h6>Reply From You</h6></th>

<th class="matrixColumn"><h6>Option</h6></th>

</tr>
</thead>

<tbody>
<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM exsupport ORDER BY id DESC limit $inicio,$TAMANO_PAGINA"); 
while ($registro = mysql_fetch_array($tabla)) { 

echo "

<tr>

<td class=\"matrixOdd last\">

". $registro["username"] ." 
</td>

<td class=\"matrixOdd last\">

". $registro["phone"] ." 
</td>

<td class=\"matrixOdd last\">

". $registro["email"] ."
</td>

<td class=\"matrixOdd last\">

". $registro["date"] ." 
</td>

<td class=\"matrixOdd last\">

". $registro["message"] ."


</font></td>
<td class=\"matrixOdd last\">


". $registro["complaints"] ."

</font></td>
<td class=\"matrixOdd last\">


". $registro["reply"] ."

</font></td>

<td class=\"matrixOdd last\">";

?>

<form method="post" action="admin.php?op=399&id=<?= $registro["id"] ?>&option=delete">

<input type="submit" class="btn btn-primary btn-sm"  value="Delete">

</form>

<form method="post" action="admin.php?op=399&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm"  value="Reply">

</form>

</td>

</tr>

<?

} 

?>


<?

break;

case (39):

?>

<?

if (isset($_POST["id"]))

{


$id=saiful($_POST["id"]);
$name=saiful($_POST["name"]);
$email=saiful($_POST["email"]);
$topic=saiful($_POST["topic"]);
$subject=saiful($_POST["subject"]);
$comments=saiful($_POST["comments"]);
$reply=saiful($_POST["reply"]);
$ip=saiful($_POST["ip"]);
$query = "UPDATE support SET reply='$reply' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Messages Replied!.</b></font><br><br>";
}

if (isset($_GET["id"]))
{
$id=abs((int)$_GET["id"]);
if ($_GET["option"]=="edit")
{
?>

<?
$tablae = mysql_query("SELECT * FROM support where id='$id'");
while ($registroe = mysql_fetch_array($tablae)) { 
?>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Reply Message</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form method="post" class="form-horizontal" action="admin.php?op=39">

<input type="hidden" name="id" value="<?= $registroe["id"] ?>">

<div class="form-group">
                                                <label class="col-sm-4 control-label">Messages</label>
                                                <div class="col-sm-8">

<input type="text" name="comments" class="form-control" value="<?= $registroe["comments"] ?>">
</div>
                                    </div><!-- form-group -->
									<div class="form-group">
                                                <label class="col-sm-4 control-label">Reply </label>
                                                <div class="col-sm-8">

<textarea name="reply" class="form-control"><?= $registroe["reply"] ?></textarea>
</div>
                                    </div><!-- form-group -->
									
  <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>

</form>

<br><br>

<?

}

?>





<?

}

if ($_GET["option"]=="delete")

{

$queryz = "DELETE FROM support WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Messages deleted.</b></font><br><br>";
}

}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th class="matrixColumn"><h6>Sender</h6></th>
<th class="matrixColumn"><h6>Email</h6></th>
<th class="matrixColumn"><h6>Subject</h6></th>
<th class="matrixColumn"><h6>Messages</h6></th>
<th class="matrixColumn"><h6>Reply From You</h6></th>

<th class="matrixColumn"><h6>Option</h6></th>

</tr>
</thead>

<tbody>
<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM support ORDER BY id DESC limit $inicio,$TAMANO_PAGINA"); 
while ($registro = mysql_fetch_array($tabla)) { 

echo "

<tr>

<td class=\"matrixOdd last\">

". $registro["name"] ." 
</td>

<td class=\"matrixOdd last\">

". $registro["email"] ."
</td>

<td class=\"matrixOdd last\">

". $registro["subject"] ."


</font></td>
<td class=\"matrixOdd last\">


". $registro["comments"] ."

</font></td>
<td class=\"matrixOdd last\">


". $registro["reply"] ."

</font></td>

<td class=\"matrixOdd last\">";

?>

<form method="post" action="admin.php?op=39&id=<?= $registro["id"] ?>&option=delete">

<input type="submit" class="btn btn-primary btn-sm"  value="Delete">

</form>

<form method="post" action="admin.php?op=39&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm"  value="Reply">

</form>

</td>

</tr>

<?

} 

?>

</tbody>
</table>
</div>


<?
break;
case (45):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="setujui")
{

mysql_query("UPDATE testimonial SET status='1' WHERE id='$id'");
echo "<font color=\"green\"><b>Testimonial Publish!</b></font><br><br>";
}

if ($option=="deny"){
$queryz = "DELETE FROM testimonial WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Testimonial Reject!</b></font><br><br>";
}
}



?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Date</th>   <th>Username</th>
                                                <th>Testimonial</th>
                                             
                                             
 <th>Option</th>
</tr>
</thead>
<tbody>


<?

$tabla = mysql_query("SELECT * FROM testimonial where status='0' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<tr>
<td class=\"matrixItem\">". date("d M Y ",($registro["date"]))."</td>
<td class=\"matrixItem\">". $registro["username"] ."</td>
<td class=\"matrixItem\">". $registro["comments"] ."</td>
<td class=\"matrixOdd last\">";
?>

<form method="post" action="admin.php?op=45&id=<?= $registro["id"] ?>&option=setujui">
<input type="submit" value="Approve">
</form>
<form method="post" action="admin.php?op=53&id=<?= $registro["id"] ?>&option=deny">
<input type="submit" value="Cancel">

</form>

</td>

</tr>

<?

} 
?>
</tbody>
</table>
</div>
</div>
</div>

<br><br><br>

<?
break;
case (46):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="deny"){
$queryz = "DELETE FROM testimonial WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Testimonial Reject!</b></font><br><br>";
}
}



?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Date</th>   <th>Username</th>
                                                <th>Testimonial</th>
                                             
                                             
 <th>Option</th>
</tr>
</thead>
<tbody>


<?

$tabla = mysql_query("SELECT * FROM testimonial where status='1' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<tr>
<td class=\"matrixItem\">". date("d M Y ",($registro["date"]))."</td>
<td class=\"matrixItem\">". $registro["username"] ."</td>
<td class=\"matrixItem\">". $registro["comments"] ."</td>
<td class=\"matrixOdd last\">";
?>
<form method="post" action="admin.php?op=46&id=<?= $registro["id"] ?>&option=deny">
<input type="submit" value="Cancel">

</form>

</td>

</tr>

<?

} 
?>
</tbody>
</table>
</div>
</div>
</div>

<br><br><br>





<?

break;
case(47):
?>


<center>
<font face="verdana" size="4">
<b>STATISTIC MEMBER</b>

<br><br>
</font>
</CENTER>


<div class="datagrid"><table class="table table-bordered" width="50%">
<thead><tr>

<th>Item</th>
<th>Stats</th>
</tr>
</thead>
<tbody>
<tr>
<td>All Member</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_users");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Member</center></td>
</tr>
<tr>
<td>Active Member</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_users where suspend!='1'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Member</center></td>
</tr>
<tr>
<td>Suspend Member </td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_users where suspend='1'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Member</center></td>
</tr>
<tr>
<td>Latest Member </td><td><center>

<?
$tabla = mysql_query("SELECT * FROM tb_users ORDER BY joindate DESC Limit 0,1");
while ($registro = mysql_fetch_array($tabla)) { 
echo "
". $registro["username"] ." (". $registro["kota"] .")";
} ?> </center></td>
</tr>


</table>
</DIV>
</center>
<BR><BR>
<center>
<font face="verdana" size="4">
<b>STATISTIC <? echo $phname; ?></b>

<br><br>
</font>
</CENTER>


<div class="datagrid"><table class="table table-bordered" width="50%">
<thead><tr>

<th>Item</th>
<th>Detail</th>
</tr>
</thead>
<tbody>

<tr>
<td> <? echo $phname; ?> Member Problem</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_beli where status='problem'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Trx 

( <? echo $matauang; ?> 
<? 

						     $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_beli where status='problem'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?> )



</center></td>
</tr>
<tr>
<td> <? echo $phname; ?> Member Succsess</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_beli where status='sukses'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Trx

( <? echo $matauang; ?> 
<? 

						     $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_beli where status='sukses'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?> )



</center></td>
</tr>
<tr>
<td><? echo $phname; ?> Member Pending</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_beli where status='pending'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Trx

( <? echo $matauang; ?> 
<? 

						     $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_beli where status='pending'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?> )



</center></td>
</tr>
<tr>
<td>Latest <? echo $phname; ?> Member Pending </td><td><center>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='pending' ORDER BY date DESC Limit 0,1");
while ($registro = mysql_fetch_array($tabla)) { 
echo "
". $registro["username"] ." ( ". $matauang ." ". number_format($registro["paket"]) .")";
} ?> </center></td>
</tr>
<tr>
<td>Latest <? echo $phname; ?> Member Problem </td><td><center>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='problem' ORDER BY date DESC Limit 0,1");
while ($registro = mysql_fetch_array($tabla)) { 
echo "
". $registro["username"] ." ( ". $matauang ." ". number_format($registro["paket"]) .")";
} ?> </center></td>
</tr>
<tr>
<td>Latest <? echo $phname; ?> Member Success</td><td><center>

<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='sukses' ORDER BY date DESC Limit 0,1");
while ($registro = mysql_fetch_array($tabla)) { 
echo "
". $registro["username"] ." ( ". $matauang ." ". number_format($registro["paket"]) .")";
} ?> </center></td>
</tr>

</table>
</DIV>
</center>

<BR><BR>
<center>
<font face="verdana" size="4">
<b>STATISTIC <? echo $ghname; ?></b>

<br><br>
</font>
</CENTER>


<div class="datagrid"><table class="table table-bordered" width="50%">
<thead><tr>

<th>Item</th>
<th>Detail</th>
</tr>
</thead>
<tbody>


<tr>
<td><? echo $ghname; ?> Member Problem</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_jual where status='problem'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Trx


( <? echo $matauang; ?> 
<? 

						     $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_jual where status='problem'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?> )</center></td>
</tr>
<tr>
<td><? echo $ghname; ?> Member Sukses</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_jual where status='sukses'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Trx 


( <? echo $matauang; ?> 
<? 

						     $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_jual where status='sukses'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?> )</center></td>
</tr>

<tr>
<td><? echo $ghname; ?> Member Waiting Transfer</td><td><center>

<? 

						     $standar = mysql_query("SELECT COUNT(*) AS cnt FROM tb_jual where status='tunggu transfer'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["cnt"];

                             print $standar; ?> 

Trx
( <? echo $matauang; ?> 
<? 

						     $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_jual where status='tunggu transfer'");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?> )</center></td>
</tr>


<tr>
<td>Latest <? echo $ghname; ?> Member Problem </td><td><center>

<?
$tabla = mysql_query("SELECT * FROM tb_jual where status='problem' ORDER BY date DESC Limit 0,1");
while ($registro = mysql_fetch_array($tabla)) { 
echo "
". $registro["username"] ." ( ". $matauang ." ". number_format($registro["paket"]) .")";
} ?> </center></td>
</tr>
<tr>
<tr>
<td>Latest <? echo $ghname; ?> Member Success</td><td><center>

<?
$tabla = mysql_query("SELECT * FROM tb_jual where status='sukses' ORDER BY date DESC Limit 0,1");
while ($registro = mysql_fetch_array($tabla)) { 
echo "
". $registro["username"] ." ( ". $matauang ." ". number_format($registro["paket"]) .")";
} ?> </center></td>
</tr>
<tr>
<td>Latest <? echo $ghname; ?> Member Waiting Transfer</td><td><center>

<?
$tabla = mysql_query("SELECT * FROM tb_jual where status='tunggu transfer' ORDER BY date DESC Limit 0,1");
while ($registro = mysql_fetch_array($tabla)) { 
echo "
". $registro["username"] ." ( ". $matauang ." ". number_format($registro["paket"]) .")";
} ?> </center></td>
</tr>

</table>
</DIV>
</center>

<BR><BR>
<center>
<font face="verdana" size="4">
<b>PH AND GH STATS</b>
</font>
<br><br>

</CENTER>
<center>
<div class="datagrid"><table class="table table-bordered" width="50%">
<thead><tr>

<th> <? echo $phname; ?> MEMBER</th>
<th> <? echo $ghname; ?> MEMBER </th>
<th>BALANCE</th>
</tr>
</thead>
<tbody>

<td><center>
<font face="arial" size="5">
<? echo $matauang; ?>
<? 

			    $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_ph");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];



                             print number_format($standar); ?>

</center>
</td>
<td><center>
<font face="arial" size="5">
<? echo $matauang; ?> 
<? 

			    $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_gh");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?>

</center>
</td>
<td height="60"><center>
<font face="arial" size="5">
<? echo $matauang; ?>
<? 
 $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_gh");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];


			    $standarx = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_ph");

                             $standarx = mysql_fetch_array($standarx);

                             $standarx = $standarx["jumlah"];
$kekurangan = $standarx-$standar;

                             print number_format($kekurangan); ?>

</center>
</td>
</tr>
</table>
</DIV>
</center>



<?
break;
case (48):
?>

<?

if (isset($_POST["item"]))
{
$item=saiful($_POST["item"]);
$price=saiful($_POST["price"]);
$query = "UPDATE tb_config SET item='$item', price='$price' where item='$item'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Item edited.</b></font><br><br>";
}

if (isset($_GET["item"]))
{

$item=$_GET["item"];
if ($_GET["option"]=="edit")
{
?>

<?

$tablae = mysql_query("SELECT * FROM tb_config where item='$item'");
while ($registroe = mysql_fetch_array($tablae)) {
?>
<br><br>
<form method="post" action="admin.php?op=48">

<input type="hidden" name="item" value="<?= $registroe["item"] ?>">
<input type="text"  style="width:300px;" name="price" value="<?= $registroe["price"] ?>">
<br><br>
<input type="submit" class="btn btn-primary btn-sm" value="Simpan">

</form>

<br><br>

<?

}

?>
<?
}
}
?>


<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Setting</th><th></th><th>Value</th><th>Description</th><th>Option</th></tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_config where howmany='12' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td>

". $registro["item"] ."

</font></td>
<td width=\"50\" align=\"center\"> : </td>
<td>

". $registro["price"] ."

</font></td>
<td>

". $registro["keterangan"] ."

</font></td>

<td>";

?>

<form method="post" action="admin.php?op=48&item=<?= $registro["item"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm" value="Edit">

</form>

</font>

</td>

</tr>

<?

} 
?>

</tbody>
</table>
</div>




<?
break;
case (49):
?>
<h2><center>Generate <? echo $ghname; ?></center></h2>
1. Input Nominal <? echo $ghname; ?> Exp : 10000<br>
2. Input Username <? echo $ghname; ?>. <BR>
3. If you want to create  <? echo $ghname; ?> for bisnis2000, type bisnis2000. <br>
4. If You wanto Create GH for PH , select Type = Pair For PH. If You want to Pair for DP (Down Payment), Select Type = Pair For DP
<br><br>


<br><br>
ATTENTION!!!<br><br>
Be careful using this feature . Make sure your username is correct , lowercase and uppercase. 
<br><br>

<?

if ($_POST) {
$jumlahkode = $_POST["jumlahkode"];
$username = $_POST["username"];
$nominal = $_POST["paket"];
$jenis = $_POST["jenis"];
$jokerzz = $nominal/$pecahan;
$posisigh = $_POST["posisigh"];
$sqlex = "SELECT * FROM tb_users WHERE username='$username'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);
$bank = $rowex["bank"];
$norek = $rowex["norek"];
$nama = $rowex["nama"];
$phone = $rowex["phone"];
$email = $rowex["email"];
$bitcoin=$rowex["bitcoin"];
$payeer=$rowex["payeer"];
$perfectmoney=$rowex["perfectmoney"];
$namalengkap=$rowex["namalengkap"];
$bbm=$rowex["bbm"];
$checkuser = mysql_query("SELECT username FROM tb_users where username='$username'");
$username_exist = mysql_num_rows($checkuser);
if($username_exist==0) {
$error = 1;
$errormsg .= "<p><b>Error -</b> Username Wrong.</p>";
}


if($error == 1)
{
print $errormsg;
} else {

$laip = $_SERVER['REMOTE_ADDR'];
$eltiempo=time();

function acakwsa($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$uniktoken=acakwsa(30);
function acakwsaiful($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$uniktrx=acakwsaiful(8);
$da=date("m");
$daek = date("j");

$hari = date("j");
if($hari=='1'){$minggu='1';}
if($hari=='2'){$minggu='1';}
if($hari=='3'){$minggu='1';}
if($hari=='4'){$minggu='1';}
if($hari=='5'){$minggu='1';}
if($hari=='6'){$minggu='1';}
if($hari=='7'){$minggu='1';}

if($hari=='8'){$minggu='2';}
if($hari=='9'){$minggu='2';}
if($hari=='10'){$minggu='2';}
if($hari=='11'){$minggu='2';}
if($hari=='12'){$minggu='2';}
if($hari=='13'){$minggu='2';}
if($hari=='14'){$minggu='2';}

if($hari=='15'){$minggu='3';}
if($hari=='16'){$minggu='3';}
if($hari=='17'){$minggu='3';}
if($hari=='18'){$minggu='3';}
if($hari=='19'){$minggu='3';}
if($hari=='20'){$minggu='3';}
if($hari=='21'){$minggu='3';}

if($hari=='22'){$minggu='4';}
if($hari=='23'){$minggu='4';}
if($hari=='24'){$minggu='4';}
if($hari=='25'){$minggu='4';}
if($hari=='26'){$minggu='4';}
if($hari=='27'){$minggu='4';}
if($hari=='28'){$minggu='4';}
if($hari=='29'){$minggu='4';}
if($hari=='30'){$minggu='4';}
if($hari=='31'){$minggu='4';}
$bulan = date("m");
$tahun = date("Y");
$querycc = "INSERT INTO tb_gh (idtrx, username, namalengkap, bitcoin, payeer, perfectmoney, bank, norek, nama, ec, paket, saldo, sisa, phone, email, bbm, status, date, ip, asal, token, hari, minggu, bulan, tahun, jenis) 
VALUES('$uniktrx','$username','$namalengkap', '$bitcoin', '$payeer', '$perfectmoney', '$bank','$norek','$nama', '$matauang', '$nominal', '$jokerzz', '$jokerzz', '$phone', '$email', '$bbm', 'pending', '$skrg', '$laip',  'Generate GH', '$uniktoken', '$hari', '$minggu','$bulan','$tahun','1')";
 
mysql_query($querycc);
echo "Create $ghname Success - $username ";
exit();
}
}
?>

<form action="admin.php?op=49" method="POST">


<br>

<? echo $ghname; ?> Amount<br>
<input type="text" maxlength="15" name="paket" class="form_input"  value="<? echo $minimalgh ?>" width="50">  
<br><br>

Username <? echo $ghname; ?><br>
<input type="text" maxlength="15" name="username" class="form_input" value="" width="50">  
<br><br>



<br><br>
       <button class="btn btn-dark btn-sm mr5" id=submitbutton onclick='dosubmit(this.form); this.blur(); this.disabled=true;'><b>CREATE <? echo $ghname; ?> MANUAL </b> </button>
    </form>
</center>




<?
break;
case (44):

if (isset($_GET["id"])) {
  $id=abs((int)$_GET["id"]);
  $option=$_GET["option"];

if ($option=="reactive"){
$q="select * from tb_beli WHERE id='$id'";
$hsl=mysql_query($q) or die(mysql_error());
$q=mysql_fetch_array($hsl);
$userph=$q["username"];
$idph=$q["idph"];
$idgh=$q["iddb"];
$saldoph=$q["saldo"];
$tokenph=$q["token"];
$qz="select * from tb_jual WHERE token='$tokenph'";
$hslz=mysql_query($qz) or die(mysql_error());
$qz=mysql_fetch_array($hslz);
$usergh=$qz["usergh"];
$saldogh=$qz["saldo"];

$skrg=time();
$aktiflagiph=$skrg+43200;
mysql_query("UPDATE tb_jual SET status='tunggu transfer' WHERE token='$tokenph'") or die(mysql_error());
mysql_query("UPDATE tb_beli SET status='pending', exp='$aktiflagiph' WHERE id='$id'") or die(mysql_error());
mysql_query("UPDATE tb_users SET suspend='0' WHERE username='$userph'") or die(mysql_error());
mysql_query("UPDATE tb_users SET suspend='0' WHERE username='$usergh'") or die(mysql_error());
echo "<font color=\"#cc0000\"><b> ". $phname ." transaction reactived! </b></font><br><br>";
  }

 
if ($option=="cancel"){
$q="select * from tb_beli WHERE id='$id'";
$hsl=mysql_query($q) or die(mysql_error());
$q=mysql_fetch_array($hsl);
$userph=$q["username"];
$idph=$q["idph"];
$idgh=$q["iddb"];
$saldoph=$q["saldo"];
$tokenph=$q["token"];
$qz="select * from tb_jual WHERE token='$tokenph'";
$hslz=mysql_query($qz) or die(mysql_error());
$qz=mysql_fetch_array($hslz);
$usergh=$qz["usergh"];
$saldogh=$qz["saldo"];
mysql_query("UPDATE tb_ph SET saldo=saldo+'$saldoph' WHERE id='$idph'") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo+'$saldogh' WHERE id='$idgh'") or die(mysql_error());
mysql_query("UPDATE tb_users SET suspend='0' WHERE username='$userph'") or die(mysql_error());
mysql_query("UPDATE tb_users SET suspend='0' WHERE username='$usergh'") or die(mysql_error());
mysql_query("DELETE from tb_jual WHERE token='$tokenph'") or die(mysql_error());
mysql_query("DELETE from tb_beli WHERE id='$id'") or die(mysql_error());
     echo "<font color=\"#cc0000\"><b> ". $phname ." transaction canceled! </b></font><br><br>";
  }

if ($option=="fake"){
$q="select * from tb_beli WHERE id='$id'";
$hsl=mysql_query($q) or die(mysql_error());
$q=mysql_fetch_array($hsl);
$userph=$q["username"];
$idph=$q["idph"];
$idgh=$q["iddb"];
$saldoph=$q["saldo"];
$tokenph=$q["token"];
$qz="select * from tb_jual WHERE token='$tokenph'";
$hslz=mysql_query($qz) or die(mysql_error());
$qz=mysql_fetch_array($hslz);
$usergh=$qz["usergh"];
$saldogh=$qz["saldo"];
mysql_query("UPDATE tb_ph SET status='problem', saldo=saldo+'$saldoph' WHERE id='$idph'") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo+'$saldogh' WHERE id='$idgh'") or die(mysql_error());
mysql_query("UPDATE tb_users SET suspend='1' WHERE username='$userph'") or die(mysql_error());
mysql_query("UPDATE tb_users SET suspend='0' WHERE username='$usergh'") or die(mysql_error());
mysql_query("DELETE from tb_jual WHERE token='$tokenph'") or die(mysql_error());
mysql_query("DELETE from tb_beli WHERE id='$id'") or die(mysql_error());

     echo "<font color=\"#cc0000\"><b>". $phname ." transaction canceled! Member ". $skph ." has been suspend</b></font><br><br>";
  }

if ($option=="activated"){
$q="select * from tb_beli WHERE id='$id'";
$hsl=mysql_query($q) or die(mysql_error());
$q=mysql_fetch_array($hsl);
$userph=$q["username"];
$idph=$q["idph"];
$idgh=$q["iddb"];
$saldoph=$q["saldo"];
$tokenph=$q["token"];
$qz="select * from tb_jual WHERE token='$tokenph'";
$hslz=mysql_query($qz) or die(mysql_error());
$qz=mysql_fetch_array($hslz);
$usergh=$qz["usergh"];
$saldogh=$qz["saldo"];
$skrg=time();
mysql_query("UPDATE tb_beli SET status='sukses', verify='$skrg', exp='', saldo='0' WHERE id='$id'") or die(mysql_error());
mysql_query("UPDATE tb_users SET suspend='1' WHERE username='$usergh'") or die(mysql_error());
mysql_query("UPDATE tb_jual SET status='sukses' WHERE token='$tokenph'") or die(mysql_error());
mysql_query($queryoz);

     echo "<font color=\"#cc0000\"><b>". $phname ." transaction change to success! Member ". $skgh ." has been suspend</b></font><br><br>";
  }
  
  
}

?>


<h2><center> <? echo $phname; ?> Problem </center></h2>
<br>


<p>
<BR>
1. Click REACTIVE. <? echo $skph; ?> and <? echo $skgh; ?> will be reactive and will get 1 day extra time <BR>
2. Click CANCEL. <? echo $skph; ?> and <? echo $skgh; ?> will find new Pair <br>
3. Click FAKE SCAN. Member <? echo $skph; ?> will be suspended and member <? echo $skgh; ?> will find new pair <br>
4. Click ACTIVATED. This transaction will change to Success Transaction and member <? echo $skgh; ?> will be suspended

<br><br>
<div class="datagrid">
      <table class="table table-success mb30">
<thead><tr>

<th>Member PH</th>
<th>Payment PH</th>
<th>PH Detail</th>
<th>Member GH</th>
<th>Payment GH</th>
<th>Pilihan</th>
</tr>
</thead>
                                        <tbody>
<?
$tabla = mysql_query("SELECT * FROM tb_beli where status='problem' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$idyu=$registro["id"];

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Email : ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
Upline :  ". $rowe["referer"] ." <br>
</td>
<td>
BTC :  ". $rowe["bitcoin"] ." <br>
Bank :  ". $rowe["bank"] ." -  ". $rowe["norek"] ." - ". $rowe["nama"] ."<br>
Payeer :  ". $rowe["payeer"] ." <br>
Perfect Money :  ". $rowe["perfectmoney"] ." <br>


</td>
<td>
Id Trx : ". $rowexx["idtrx"] ." <br>
Amount : $matauang ". number_format($registro["paket"]) ." <br>
Date Pairing :  ". date("d M Y ",$registro["date"]) ." <br>
Expired :  ". date("d M Y ",$registro["exp"]) ." <br>
Reason : ". $registro["reason"] ."  <br>"; ?>

<button class="btn btn-dark btn-sm mr5" data-toggle="modal" data-target=".bs-example-modal-lg<? echo $registro["id"];?>">View Messages</button>


   <div class="modal fade bs-example-modal-lg<? echo $registro["id"];?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                      <h4 class="modal-title">Order: <? echo " $skph".  $registro["id"] ."".  $registro["idph"] ."".  $registro["iddb"] ."".  $registro["unik"] ." ";?></h4>
                  </div>
                  <div class="modal-body">

<ul>
<?
$tablau = mysql_query("SELECT * FROM messages where idb='$idyu'"); 
while($registrou = mysql_fetch_array($tablau)){
$namapsn= $registrou["username"];
$tablauu = mysql_query("SELECT * FROM tb_users where username='$namapsn'"); 
$registrouu = mysql_fetch_array($tablauu);

echo "

<li>".  $registrou["username"] ." ( BBM: ".  $registrouu["bbm"] ." - Phone: ".  $registrouu["phone"] ." ) => ".  $registrou["messages"] ."</li>

"; }
?>
</ul>
</div>
              </div>
            </div>
        </div>


<? echo "
</td>

<td>
Username : ". $rowex["username"] ." <br>
Email : ". $rowex["email"] ." <br>
Phone :  ". $rrowex["phone"] ." <br>
Upline :  ". $rowex["referer"] ." <br>
</td>
<td>
BTC :  ". $rowex["bitcoin"] ." <br>
Bank :  ". $rowex["bank"] ." -  ". $rowex["norek"] ." - ". $rowex["nama"] ."<br>
Payeer :  ". $rowex["payeer"] ." <br>
Perfect Money :  ". $rowex["perfectmoney"] ." <br>
</td>

<td>";

?>

<form method="post" action="admin.php?op=44&id=<?= $registro["id"] ?>&option=reactive">
<input type="submit" class="btn btn-success btn-xs btn-block "  value="REACTIVE">
</form>

<form method="post" action="admin.php?op=44&id=<?= $registro["id"] ?>&option=cancel">
<input type="submit" class="btn btn-warning btn-xs btn-block "  value="CANCEL">
</form>

<form method="post" action="admin.php?op=44&id=<?= $registro["id"] ?>&option=fake">
<input type="submit" class="btn btn-danger btn-xs btn-block "  value="FAKE SCAN">
</form>

<form method="post" action="admin.php?op=44&id=<?= $registro["id"] ?>&option=activated">
<input type="submit" class="btn btn-success btn-xs btn-block "  value="ACTIVATED">
</form>
</td>

</tr>


     

<?

}
?>

</table>
</div>



<?
break;
case (26):
?>

<?
if (isset($_POST["id"]))
{
$id=saiful($_POST["id"]);

$username=saiful($_POST["username"]);
$password=saiful($_POST["password"]);
$namalengkap=saiful($_POST["namalengkap"]);
$referer=saiful($_POST["referer"]);
$email=saiful($_POST["email"]);
$phone=saiful($_POST["phone"]);

$alamat=saiful($_POST["alamat"]);
$kota=saiful($_POST["kota"]);
$country=saiful($_POST["country"]);
$kodepos=saiful($_POST["kodepos"]);

$bitcoin=saiful($_POST["bitcoin"]);
$payeer=saiful($_POST["payeer"]);
$perfectmoney=saiful($_POST["perfectmoney"]);
$bank=saiful($_POST["bank"]);
$norek=saiful($_POST["norek"]);
$nama=saiful($_POST["nama"]);

$fb=saiful($_POST["fb"]);
$tw=saiful($_POST["tw"]);
$ym=saiful($_POST["ym"]);
$bbm=saiful($_POST["bbm"]);
$wa=saiful($_POST["wa"]);
$website=saiful($_POST["website"]);

$money=saiful($_POST["money"]);
$moneys=saiful($_POST["moneys"]);
$pin=saiful($_POST["pin"]);

$query = "UPDATE tb_users SET 
username='$username', 
password='$password', 
namalengkap='$namalengkap', 
referer='$referer', 
email='$email', 
phone='$phone', 

alamat='$alamat',
kota='$kota',
country='$country',
kodepos='$kodepos',

bitcoin='$bitcoin', 
payeer='$payeer',
Perfectmoney='$perfectmoney',
bank='$bank', 
norek='$norek',
nama='$nama',

fb='$fb',
tw='$tw',
ym='$ym',
bbm='$bbm',
wa='$wa',
website='$website',

money='$money',
moneys='$moneys',
pin='$pin' where id='$id'";

mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>User edited.</b></font><br><br>";
}

if (isset($_GET["id"]))
{

$id=abs((int)$_GET["id"]);
if ($_GET["option"]=="edit")
{
?>

<?
$tablae = mysql_query("SELECT * FROM tb_users where id='$id'"); 
while ($registroe = mysql_fetch_array($tablae)) {
?>


 <div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Edit Member</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form class="form-horizontal" action="admin.php?op=26" method="POST">


<input type="hidden" name="id" value="<?= $registroe["id"] ?>">


<div class="form-group">
<label class="col-sm-4 control-label">Username</label>
<div class="col-sm-8">
<input type="text" name="username" class="form-control" value="<?= $registroe["username"] ?>" readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Password</label>
<div class="col-sm-8">
<input type="text" name="password" class="form-control" value="<?= $registroe["password"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Full name</label>
<div class="col-sm-8">
<input type="text" name="namalengkap" class="form-control" value="<?= $registroe["namalengkap"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Upline</label>
<div class="col-sm-8">
<input type="text" name="referer" class="form-control" value="<?= $registroe["referer"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Email</label>
<div class="col-sm-8">
<input type="text" name="email" class="form-control" value="<?= $registroe["email"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Phone</label>
<div class="col-sm-8">
<input type="text" name="phone" class="form-control" value="<?= $registroe["phone"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Address</label>
<div class="col-sm-8">
<input type="text" name="alamat" class="form-control" value="<?= $registroe["alamat"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">City</label>
<div class="col-sm-8">
<input type="text" name="kota" class="form-control" value="<?= $registroe["kota"] ?>">
</div>
</div>



<div class="form-group">
<label class="col-sm-4 control-label">Country</label>
<div class="col-sm-8">
<input type="text" name="country" class="form-control" value="<?= $registroe["country"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Bitcoin Address</label>
<div class="col-sm-8">
<input type="text" name="bitcoin" class="form-control" value="<?= $registroe["bitcoin"] ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Account Balance</label>
<div class="col-sm-8">
<input type="text" name="money" class="form-control" value="<?= $registroe["money"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">Bonus Balance</label>
<div class="col-sm-8">
<input type="text" name="moneys" class="form-control" value="<?= $registroe["moneys"] ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">PIN</label>
<div class="col-sm-8">
<input type="text" name="pin" class="form-control" value="<?= $registroe["pin"] ?>">
</div>
</div>


                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
                            </div><!-- col-md-6 -->
<br><br>
<?
}
}
if ($_GET["option"]=="m1")
{
$queryz = "UPDATE tb_users set manager='1'  WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager.</b></font><br><br>";
}
if ($_GET["option"]=="m2")
{
$queryz = "UPDATE tb_users set manager='1' , levmgr='2' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 2.</b></font><br><br>";
}
if ($_GET["option"]=="m3")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='3' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 3.</b></font><br><br>";
}
if ($_GET["option"]=="m4")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='4' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 4.</b></font><br><br>";
}
if ($_GET["option"]=="m5")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='5' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 5.</b></font><br><br>";
}
if ($_GET["option"]=="m6")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='6' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 6.</b></font><br><br>";
}
if ($_GET["option"]=="m7")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='7' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 7.</b></font><br><br>";
}
if ($_GET["option"]=="m8")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='8' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 8.</b></font><br><br>";
}
if ($_GET["option"]=="m9")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='9' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 9.</b></font><br><br>";
}
if ($_GET["option"]=="m10")
{
$queryz = "UPDATE tb_users set manager='1', levmgr='10' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User Upgrade to Manager Level 10.</b></font><br><br>";
}
}
?>


<?

$search=$_POST["search"];
$metode=$_POST["metode"];

if($_POST['search']){
$TAMANO_PAGINA = 2000;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
    $resp = mysql_query("select * from tb_users where $metode LIKE '%$search%' order by id limit $inicio,$TAMANO_PAGINA") or die (mysql_error());

    if(mysql_num_rows($resp) == "0") {

     echo "No Result. Please Try Again.";

    } else {

            echo "<center><H2><strong>RESULT SEARCH</strong></H2></center><br>";



			?>



<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Data Member</th>
<th>Address</th>
<th>Payment</th>
<th>Transaction</th>
<th>Option</th>
</tr>
</thead><tbody>
<?



                   while($registro = mysql_fetch_array($resp)) {

                  $namaku=$registro["username"];
$namamu=$registro["referer"];

$sqle = "SELECT SUM(paket) AS cnt FROM tb_ph WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

$sqlex = "SELECT SUM(paket) AS cnt FROM tb_gh WHERE username='$namaku'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);
$pendx = $rowex['cnt'];

$sqlexx = "SELECT SUM(fee) AS cnt FROM tb_fee WHERE username='$namaku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);
$pendxx = $rowexx['cnt'];

$sqlexxx = "SELECT COUNT(*) AS cnt FROM tiket WHERE username='$namaku'";
$resultexxx = mysql_query($sqlexxx);        
$rowexxx = mysql_fetch_array($resultexxx);
$pendxxx = $rowexxx['cnt'];

$sqlexxxx = "SELECT COUNT(*) AS cnt FROM tb_users WHERE referer='$namaku'";
$resultexxxx = mysql_query($sqlexxxx);        
$rowexxxx = mysql_fetch_array($resultexxxx);
$pendxxxx = $rowexxxx['cnt'];



		   

echo "


<tr>
<td>
Username : ". $registro["username"] ." <br>
Register : ". date("d M Y ",$registro["joindate"]) ." <br>
Login :  ". date("d M Y ",$registro["lastlogdate"]) ."<br>
IP :  ". $registro["ip"] ." <br>
Full Name :  ". $registro["namalengkap"] ." <br>
Upline :  ". $registro["referer"] ." <br>
</td>

<td>
Address : ". $registro["alamat"] ." <br>
City : ". $registro["kota"] ." <br>
Country :  ". $registro["country"] ." <br>
Email :  ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
</td>

<td>

BTC :  ". $registro["bitcoin"] ." <br>
Bank :  ". $registro["bank"] ." -  ". $registro["norek"] ." - ". $registro["nama"] ."<br>
Payeer :  ". $registro["payeer"] ." <br>
Perfect Money :  ". $registro["perfectmoney"] ." <br>

</td>

<td>
Total PH : $matauang ". number_format($pend) ." <br>
Total GH : $matauang ". number_format($pendx) ." <br>
Total Fee :  $matauang ". number_format($pendxx) ." <br>
Total Ticket :  ". number_format($pendxxx) ." Ticket<br>
Total Referal :  ". number_format($pendxxxx) ." Member<br>
Account Balance : $matauang ". number_format($registro["money"]) ." <br>
Profit Balance : $matauang ". number_format($registro["moneys"]) ." <br>
</td>


<td>";

?>


<form method="post" action="admin.php?op=26&id=<?= $registro["id"] ?>&option=m1">

<input type="submit" class="btn btn-primary btn-sm" value="Upgrade to manager">

</form>


</td>

</tr>


<?

} 

?>


</tbody>
</table>
</div>


<?

}

}else{



	?>

 <div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Search Member</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<form class="form-horizontal" action="" method="POST">
<div class="form-group">
                                                <label class="col-sm-4 control-label">Username</label>
                                                <div class="col-sm-8">

<input type="text" name="search" class="form-control" placeholder="Input Username">
</div>
                                    </div><!-- form-group -->
                                    
                                                         
<input type="hidden" name="metode" value="username">

</div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>

<br><br>


<?

}

?>


<?
break;
case (27):
?>


<?
if (isset($_GET["id"]))
{
$id=abs((int)$_GET["id"]);
if ($_GET["option"]=="close")
{
$queryz = "UPDATE tb_users SET manager='0', levmgr='0'  WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
    echo "<font color=\"#cc0000\"><b>User upgrade to Non Manager.</b></font><br><br>";

}

}
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Data Member</th>
<th>Address</th>
<th>Payment</th>
<th>Transaction</th>
<th>Option</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_users where manager='1' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];

$sqle = "SELECT SUM(paket) AS cnt FROM tb_ph WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

$sqlex = "SELECT SUM(paket) AS cnt FROM tb_gh WHERE username='$namaku'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);
$pendx = $rowex['cnt'];

$sqlexx = "SELECT SUM(fee) AS cnt FROM tb_fee WHERE username='$namaku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);
$pendxx = $rowexx['cnt'];

$sqlexxx = "SELECT COUNT(*) AS cnt FROM tiket WHERE username='$namaku'";
$resultexxx = mysql_query($sqlexxx);        
$rowexxx = mysql_fetch_array($resultexxx);
$pendxxx = $rowexxx['cnt'];

$sqlexxxx = "SELECT COUNT(*) AS cnt FROM tb_users WHERE referer='$namaku'";
$resultexxxx = mysql_query($sqlexxxx);        
$rowexxxx = mysql_fetch_array($resultexxxx);
$pendxxxx = $rowexxxx['cnt'];


echo "

<tr>
<td>
Username : ". $registro["username"] ." <br>
Register : ". date("d M Y ",$registro["joindate"]) ." <br>
Login :  ". date("d M Y ",$registro["lastlogdate"]) ."<br>
IP :  ". $registro["ip"] ." <br>
Full Name :  ". $registro["namalengkap"] ." <br>
Upline :  ". $registro["referer"] ." <br>
</td>

<td>
Address : ". $registro["alamat"] ." <br>
City : ". $registro["kota"] ." <br>
Country :  ". $registro["country"] ." <br>
Email :  ". $registro["email"] ." <br>
Phone :  ". $registro["phone"] ." <br>
</td>

<td>

BTC :  ". $registro["bitcoin"] ." <br>
Bank :  ". $registro["bank"] ." -  ". $registro["norek"] ." - ". $registro["nama"] ."<br>
Payeer :  ". $registro["payeer"] ." <br>
Perfect Money :  ". $registro["perfectmoney"] ." <br>

</td>

<td>
Total PH : $matauang ". number_format($pend) ." <br>
Total GH : $matauang ". number_format($pendx) ." <br>
Total Fee :  $matauang ". number_format($pendxx) ." <br>
Total Referal :  ". number_format($pendxxxx) ." Member<br>
Account Balance : $matauang ". number_format($registro["money"]) ." <br>
Profit Balance : $matauang ". number_format($registro["moneys"]) ." <br>
</td>

<td>";

?>


<form method="post" action="admin.php?op=27&id=<?= $registro["id"] ?>&option=close">

<input type="submit" class="btn btn-danger btn-sm" value="Ugrade to Non Manager">

</form>




</td>

</tr>


<?

} 

?>
</tbody>
</table>
</div>



<?
break;
case (41):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="setujui")
{

$username=$_POST["username"];
$toknya=$_POST["token"];
$phjnya=$_POST["paket"];
$skrg=time();
$nextprofku=$skrg + 86400;
mysql_query("UPDATE tb_fee SET status='sukses', verify='$eltiempo' WHERE id='$id'");

$tabla = mysql_query("SELECT * FROM tb_fee where id='$id'"); 
$registro = mysql_fetch_array($tabla); 
$jenisdp=$registro["jenis"];

if($jenisdp=='3'){
$nextprofku=$skrg + 86400;
$dproku=$skrg + $selesaiph;
mysql_query("UPDATE tb_ph SET status='dikunci', dpro='$dproku', cekharian='$nextprofku' WHERE token='$toknya' and jenis='3'");
} else 
if($jenisdp=='2'){
$nextprofku=$skrg + 86400;
mysql_query("UPDATE tb_ph SET status='dikunci', dpro='$dproku', cekharian='$nextprofku' WHERE token='$toknya' and jenis='2'");
} else {
$nextprofku=$skrg + 86400;
mysql_query("UPDATE tb_ph SET status='dikunci', dpro='$dproku', cekharian='$nextprofku' WHERE token='$toknya' and jenis='1'");
}

echo "<font color=\"green\"><b>Fee Approve</b></font><br><br>";
}

if ($option=="deny"){
$username=$_POST["username"];
$toknya=$_POST["token"];
$phjnya=$_POST["paket"];
$queryz = "DELETE FROM tb_ph WHERE token='$toknya'";
mysql_query($queryz) or die(mysql_error());
$queryzz = "DELETE FROM tb_fee WHERE id='$id'";
mysql_query($queryzz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Fee Reject.</b></font><br><br>";
}
}



?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>ID DP</th>
<th>Date PH</th>   <th>Username</th>
                                                
                                             
                                                <th>Amount Fee</th>
 <th>Bank Account</th>
 <th>Ecurrency</th>
 <th>Pay Proof</th>
                                                
 <th>Option</th>
</tr>
</thead>
<tbody>


<?

$tabla = mysql_query("SELECT * FROM tb_fee where status='pending' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<tr>
<td class=\"matrixItem\">DP#". $registro["id"] ."</td>
<td class=\"matrixItem\">". date("d M Y ",($registro["date"]))."</td>
<td class=\"matrixItem\">". $registro["username"] ." <br> ". $registro["email"] ." <br> ". $registro["phone"] ."</td>
<td class=\"matrixItem\">$matauang ". number_format($registro["fee"],$desimal) ."</td>
<td class=\"matrixItem\">". $registro["bank"] ." <br>". $registro["norek"] ."<br>". $registro["nama"] ."</td>
<td class=\"matrixItem\">BTC : ". $registro["bitcoin"] ." </td>
<td class=\"matrixItem\"><a href=\"../user/". $registro["pic"] ."\" Target=\"_blank\"><img src=\"../user/". $registro["pic"] ."\" width=\"60\" height=\"60\"></a></td>
<td class=\"matrixOdd last\">";
?>

<form method="post" action="admin.php?op=41&id=<?= $registro["id"] ?>&option=setujui">

<input type="hidden" name="paket" value="<?= $registro["paket"] ?>">
<input type="hidden" name="token" value="<?= $registro["token"] ?>">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="Approve">
</form>
<form method="post" action="admin.php?op=41&id=<?= $registro["id"] ?>&option=deny">

<input type="hidden" name="paket" value="<?= $registro["paket"] ?>">
<input type="hidden" name="token" value="<?= $registro["token"] ?>">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" class="btn btn-primary btn-sm" value="Cancel">

</form>

</td>

</tr>

<?

} 
?>
</tbody>
</table>
</div></div></div>



<?
break;
case (42):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="aktifkan")
{

$username=$_POST["username"];
$toknya=$_POST["token"];
$phjnya=$_POST["paket"];
mysql_query("UPDATE tb_fee SET status='pending' WHERE id='$id'");
mysql_query("UPDATE tb_ph SET status='dikunci' WHERE token='$toknya'");
echo "<font color=\"green\"><b>Fee Reactive</b></font><br><br>";
}

if ($option=="tolak"){
$username=$_POST["username"];
$toknya=$_POST["token"];
$phjnya=$_POST["paket"];
$queryz = "DELETE FROM tb_ph WHERE token='$toknya'";
mysql_query($queryz) or die(mysql_error());
$queryzz = "DELETE FROM tb_fee WHERE id='$id'";
mysql_query($queryzz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Fee Reject.</b></font><br><br>";
}
}



?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Date PH</th>   <th>Username</th>
                                                <th>Amount PH</th>
                                             
                                                <th>Amount Fee</th>
                                                
 <th>Option</th>
</tr>
</thead>
<tbody>


<?

$tabla = mysql_query("SELECT * FROM tb_fee where status='problem' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<tr>
<td class=\"matrixItem\">". date("d M Y ",($registro["date"]))."</td>
<td class=\"matrixItem\">". $registro["username"] ."</td>
<td class=\"matrixItem\">$matauang ". number_format($registro["paket"],$desimal) ."</td>
<td class=\"matrixItem\">$matauang ". number_format($registro["fee"],$desimal) ."</td>
<td class=\"matrixOdd last\">";
?>

<form method="post" action="admin.php?op=42&id=<?= $registro["id"] ?>&option=aktifkan">

<input type="hidden" name="paket" value="<?= $registro["paket"] ?>">
<input type="hidden" name="token" value="<?= $registro["token"] ?>">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" value="Reactive">
</form>
<form method="post" action="admin.php?op=42&id=<?= $registro["id"] ?>&option=tolak">

<input type="hidden" name="paket" value="<?= $registro["paket"] ?>">
<input type="hidden" name="token" value="<?= $registro["token"] ?>">
<input type="hidden" name="username" value="<?= $registro["username"] ?>">
<input type="submit" value="Cancel">

</form>

</td>

</tr>

<?

} 
?>
</tbody>
</table>
</div></div></div>


<?
break;
case (43):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];

}



?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Date PH</th>   <th>Username</th>
                                                <th>Amount PH</th>
                                             
                                                <th>Amount Fee</th>
                                                
 <th>Verify</th>
<th>Pic</th>
</tr>
</thead>
<tbody>


<?

$tabla = mysql_query("SELECT * FROM tb_fee where status='sukses' ORDER BY id ASC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<tr>
<td class=\"matrixItem\">". date("d M Y ",($registro["date"]))."</td>
<td class=\"matrixItem\">". $registro["username"] ."</td>
<td class=\"matrixItem\">$matauang ". number_format($registro["paket"],$desimal) ."</td>
<td class=\"matrixItem\">$matauang ". number_format($registro["fee"],$desimal) ."</td>
<td class=\"matrixItem\">". date("d M Y ",($registro["verify"]))."</td>
<td class=\"matrixItem\"><a href=\"../user/". $registro["pic"] ."\" Target=\"_blank\"><img src=\"../user/". $registro["pic"] ."\" width=\"60\" height=\"60\"></a></td>
";
?>

</tr>

<?

} 
?>
</tbody>
</table>
</div></div></div>


<?
break;
case (202):
?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>
<th>Date</th>
<th>Create For</th>
<th>Email</th>
<th>Phone</th>
<th>Amount</th>
<th>Pair</th>
<th>Not Pair</th>
<th>Stats</th>
</tr>
</thead><tbody>

<?
$tabla = mysql_query("SELECT * FROM tb_gh where asal='Generate GH' ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
$namaku=$registro["username"];
$namamu=$registro["referer"];
$idphku=$registro["idph"];
$totalph=$registro["paket"];
$dijodoh=$registro["saldo"];
$jodohs=$totalph - $dijodoh;

$sqle = "SELECT * FROM tb_users WHERE username='$namaku'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);

$sqlex = "SELECT * FROM tb_users WHERE username='$namamu'";
$resultex = mysql_query($sqlex);        
$rowex = mysql_fetch_array($resultex);

$sqlexx = "SELECT * FROM tb_ph WHERE id='$idphku'";
$resultexx = mysql_query($sqlexx);        
$rowexx = mysql_fetch_array($resultexx);


echo "

<tr>

<td>". date("d M Y ",$registro["date"]) ." </td>
<td> ". $registro["username"] ." </td>
<td> ". $registro["email"] ." </td>
<td> ". $registro["phone"] ." </td>
<td> $matauang ". number_format($totalph,$desimal) ." </td>
<td> $matauang ". number_format($jodohs,$desimal) ." </td>
<td> $matauang ". number_format($dijodoh,$desimal) ." </td>
<td> ". $registro["status"] ." </td>
</tr>
";} 
?>

</tbody>
</table>
</div>


<?
break;
case (363636):
?>

<center>


<?
if (isset($_GET["id"]))
{
$id=$_GET["id"];
$option=$_GET["option"];

if ($option=="delete"){

$queryz = "DELETE FROM testimonial WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Testimonial Deleted</b></font><br><br>";

}
if ($option=="activated"){

$queryz = "UPDATE testimonial SET status='sukses' WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Testimonial Activated</b></font><br><br>";

}
}

?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>
<th>Username</th>
<th>Subject</th>
<th>News</th>
<th>Option</th>

</tr>
</thead>
                                        <tbody>


<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM testimonial where status!='sukses' ORDER BY id ASC limit $inicio,$TAMANO_PAGINA");
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td >

". $registro["name"] ."


</font></td>
<td >

". $registro["subject"] ."


</font></td>
<td >


". $registro["comments"] ."

</font></td>
<td>";

?>

<form method="post" action="admin.php?op=363636&id=<?= $registro["id"] ?>&option=delete">

<input type="submit" class="btn btn-primary btn-sm" value="Delete">

</form>
<form method="post" action="admin.php?op=363636&id=<?= $registro["id"] ?>&option=activated">

<input type="submit" class="btn btn-primary btn-sm"  value="Activated">

</form>


</font></td>

</tr>


<?
} 
?>

</table>

<?
break;
case (36363636):
?>
<?
if (isset($_GET["id"]))
{
$id=$_GET["id"];
$option=$_GET["option"];

if ($option=="delete"){

$queryz = "DELETE FROM testimonial WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Testimonial Deleted</b></font><br><br>";

}

}

?>
<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>
<th>Username</th>
<th>Subject</th>
<th>News</th>
<th>Option</th>

</tr>
</thead>
                                        <tbody>


<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM testimonial where status='sukses' ORDER BY id ASC limit $inicio,$TAMANO_PAGINA");
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td >

". $registro["name"] ."


</font></td>
<td >

". $registro["subject"] ."


</font></td>
<td >


". $registro["comments"] ."

</font></td>
<TD>
";

?>

<form method="post" action="admin.php?op=36363636&id=<?= $registro["id"] ?>&option=delete">

<input type="submit" class="btn btn-primary btn-sm" value="Delete">

</form>
</TD>
</tr>

</tr>

<?
} 
?>

</table>

<?
break;
case (29):
?>


<?
if ($_POST)
{

$id=$_POST["id"];
$nama=$_POST["nama"];
$noakun=$_POST["noakun"];
$namaakun=$_POST["namaakun"];
$jenis=$_POST["jenis"];
$status=$_POST["status"];


$query = "UPDATE settbilling SET nama='$nama', noakun='$noakun' , namaakun='$namaakun', jenis='$jenis', status='$status' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Payment Edited!.</b></font><br><br>";
}
if (isset($_GET["id"]))
{
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="edit"){
?>


<?
$tablae = mysql_query("SELECT * FROM settbilling where id='$id'"); 
while ($registroe = mysql_fetch_array($tablae)) { 
?>

<form method="post" "form-horizontal" action="admin.php?op=29">

<input type="hidden" name="id" value="<?= $registroe["id"] ?>"><br>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Edit Payment</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<div class="form-group">
                                                <label class="col-sm-4 control-label">Name</label>
                                                <div class="col-sm-8">

<input type="text" name="nama" required class="form-control" value="<?= $registroe["nama"] ?>">
</div>
                                    </div><!-- form-group -->
									
<div class="form-group">
                                                <label class="col-sm-4 control-label">Account Number</label>
                                                <div class="col-sm-8">

<input type="text" name="noakun" required class="form-control" value="<?= $registroe["noakun"] ?>">
</div>
                                    </div><!-- form-group -->

<div class="form-group">
                                                <label class="col-sm-4 control-label">Account Name</label>
                                                <div class="col-sm-8">

<input type="text" name="namaakun" required class="form-control" value="<?= $registroe["namaakun"] ?>">
</div>
                                    </div><!-- form-group -->

                                   
<div class="form-group">
                                                <label class="col-sm-4 control-label">Type</label>
                                                <div class="col-sm-8">

<select name="jenis" required class="form-control">
<option value="1">Bank Payment</option>
<option value="2">Bitcoin Payment</option>
<option value="3">Perfect Money Payment</option>
<option value="4">Payeer Payment</option>
</select>
</div>
                                    </div><!-- form-group -->

<div class="form-group">
                                                <label class="col-sm-4 control-label">Stats</label>
                                                <div class="col-sm-8">

<select name="status" required class="form-control">
<option value="1">Active</option>
<option value="0">Non Active</option>

</select>
</div>
                                    </div><!-- form-group -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>

<?
}
?>

<?
}
if ($option=="delete"){

$queryz = "DELETE FROM settbilling WHERE id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Payment Deleted</b></font><br><br>";

}
}

?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>
<th>Name</th>
<th>Account Number</th>
<th>Account Name</th>
<th>Type</th>
<th>Stats</th>
<th>Option</th>

</tr>
</thead>
                                        <tbody>


<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM settbilling ORDER BY id ASC limit $inicio,$TAMANO_PAGINA");
while ($registro = mysql_fetch_array($tabla)) { 
$cekst=$registro["status"];
if($cekst=='1'){$mystats="Active";} else {$mystats="Non Active";}
$cekt=$registro["jenis"];
if($cekt=='1'){$myp="Bank Payment";} else 
if($cekt=='2'){$myp="Bitcoin Payment";} else
if($cekt=='3'){$myp="Perfect Money Payment";} else
if($cekt=='4'){$myp="Payeer Payment";}
echo "

<tr>
<td >". $registro["nama"] ."</font></td>
<td >". $registro["noakun"] ."</font></td>
<td >". $registro["namaakun"] ."</font></td>
<td >". $myp ."</font></td>
<td >". $mystats ."</font></td>
<td>";

?>

<form method="post" action="admin.php?op=29&id=<?= $registro["id"] ?>&option=delete">

<input type="submit" class="btn btn-primary btn-sm" value="Delete">

</form>
<form method="post" action="admin.php?op=29&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm"  value="Edit">

</form>


</font></td>

</tr>

<?
} 
?>

</table>



<?
break;
case (2929):
?>
<?
if ($_POST) {
$nama=$_POST["nama"];
$noakun=$_POST["noakun"];
$namaakun=$_POST["namaakun"];
$jenis=$_POST["jenis"];
$status=$_POST["status"];


if ($nama==""){
$error = 1;
$errormsg .= "<b>Error - </b>Input payment name<br />";
}


if($error == 1)

{

print $errormsg;

} else {

$laip = $_SERVER['REMOTE_ADDR'];

$query = "INSERT INTO settbilling (nama, noakun, namaakun, jenis, status) VALUES('$nama','$noakun','$namaakun','$jenis','$status')";
mysql_query($query) or die(mysql_error());
echo" <br><br><br>Payment Added!"; 
exit();

}

}

?>


<form method="post" "form-horizontal" action="admin.php?op=2929">

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Add Payment</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<div class="form-group">
                                                <label class="col-sm-4 control-label">Name</label>
                                                <div class="col-sm-8">

<input type="text" name="nama" required class="form-control" value="<?= $registroe["nama"] ?>">
</div>
                                    </div><!-- form-group -->
									
<div class="form-group">
                                                <label class="col-sm-4 control-label">Account Number</label>
                                                <div class="col-sm-8">

<input type="text" name="noakun" required class="form-control" value="<?= $registroe["noakun"] ?>">
</div>
                                    </div><!-- form-group -->

<div class="form-group">
                                                <label class="col-sm-4 control-label">Account Name</label>
                                                <div class="col-sm-8">

<input type="text" name="namaakun" required class="form-control" value="<?= $registroe["namaakun"] ?>">
</div>
                                    </div><!-- form-group -->

                                   
<div class="form-group">
                                                <label class="col-sm-4 control-label">Type</label>
                                                <div class="col-sm-8">

<select name="jenis" required class="form-control">
<option value="1">Bank Payment</option>
<option value="2">Bitcoin Payment</option>
<option value="3">Perfect Money Payment</option>
<option value="4">Payeer Payment</option>
</select>
</div>
                                    </div><!-- form-group -->

<div class="form-group">
                                                <label class="col-sm-4 control-label">Stats</label>
                                                <div class="col-sm-8">

<select name="status" required class="form-control">
<option value="1">Active</option>
<option value="0">Non Active</option>

</select>
</div>
                                    </div><!-- form-group -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>





<?
break;
case (3333):
?>


<?
if ($_POST)
{

$id=$_POST["id"];
$minph=$_POST["minph"];
$maxph=$_POST["maxph"];
$bonus=$_POST["bonus"];
$status=$_POST["status"];


$query = "UPDATE bonusph SET minph='$minph', maxph='$maxph' , bonus='$bonus', status='$status' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Bonus Edited!.</b></font><br><br>";
}
if (isset($_GET["id"]))
{
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="edit"){
?>


<?
$tablae = mysql_query("SELECT * FROM bonusph where id='$id'"); 
while ($registroe = mysql_fetch_array($tablae)) { 
?>

<form method="post" "form-horizontal" action="admin.php?op=3333">

<input type="hidden" name="id" value="<?= $registroe["id"] ?>"><br>

<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Edit Bonus</h4>
                                           
                                        </div>
                                        <div class="panel-body">

<div class="form-group">
                                                <label class="col-sm-4 control-label">Min <? echo $phname; ?> (<? echo $matauang; ?>)</label>
                                                <div class="col-sm-8">

<input type="text" name="minph" required class="form-control" value="<?= $registroe["minph"] ?>">
</div>
                                    </div><!-- form-group -->
									
<div class="form-group">
                                                <label class="col-sm-4 control-label">Max <? echo $phname; ?> (<? echo $matauang; ?>)</label>
                                                <div class="col-sm-8">

<input type="text" name="maxph" required class="form-control" value="<?= $registroe["maxph"] ?>">
</div>
                                    </div><!-- form-group -->

<div class="form-group">
                                                <label class="col-sm-4 control-label">Bonus <? echo $phname; ?> (<? echo $matauang; ?>)</label>
                                                <div class="col-sm-8">

<input type="text" name="bonus" required class="form-control" value="<?= $registroe["bonus"] ?>">
</div>
                                    </div><!-- form-group -->

        

<div class="form-group">
                                                <label class="col-sm-4 control-label">Stats</label>
                                                <div class="col-sm-8">

<select name="status" required class="form-control">
<option value="1">Active</option>
<option value="0">Non Active</option>

</select>
</div>
                                    </div><!-- form-group -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>

<?
}
?>

<?
}

}

?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>
<th>Min <? echo $phname; ?> (<? echo $matauang; ?>)</th>
<th>Max <? echo $phname; ?> (<? echo $matauang; ?>)</th>
<th>Bonus <? echo $phname; ?> (<? echo $matauang; ?>)</th>
<th>Stats</th>
<th>Option</th>

</tr>
</thead>
                                        <tbody>


<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM bonusph ORDER BY id ASC limit $inicio,$TAMANO_PAGINA");
while ($registro = mysql_fetch_array($tabla)) { 
$cekst=$registro["status"];
if($cekst=='1'){$mystats="Active";} else {$mystats="Non Active";}
echo "

<tr>
<td >". $registro["minph"] ."</font></td>
<td >". $registro["maxph"] ."</font></td>
<td >". $registro["bonus"] ."</font></td>
<td >". $mystats ."</font></td>
<td>";

?>
<form method="post" action="admin.php?op=3333&id=<?= $registro["id"] ?>&option=edit">

<input type="submit" class="btn btn-primary btn-sm"  value="Edit">

</form>


</font></td>

</tr>

<?
} 
?>

</table>


<?
break;
case (100000):
?>

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
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'gallery' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
$trok=$_COOKIE["usNick"];
$laip = $_SERVER['REMOTE_ADDR'];
$ket=$_POST["ket"];
$query = "INSERT INTO gallery (gambar, ket) VALUES('gallery/$name','$ket')";
mysql_query($query) or die(mysql_error());
echo '<br><br><br><strong>Upload Galery Success...</strong></font>';
?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=admin.php">

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

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=admin.php">

<?


exit();

}
?>



						


<form action="admin.php?op=100000" method="post" enctype="multipart/form-data">
	 <div class="form-group"><label for="username" class="control-label col-md-3">Upload Picture</label>

                                            <div class="col-md-9"><input type="file" name="file">
                    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 256 KB is allowed.</p></div>
                                        </div>
 

<div class="form-group"><label for="username" class="control-label col-md-3">Descriptions</label>

                                            <div class="col-md-9">
<textarea type="text" class="form-control"  required name="ket"></textarea></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
<br>
                                                <button type="submit" name="submit" class="btn btn-primary">Upload Gallery</button>
                                            </div>
                                        </div>
                                    </form>


 </div>
                                        </div>
        </div>   


<?
break;
case (100001):

if (isset($_GET["id"]))
{

$username=$_POST["username"];
$id=$_GET["id"];
$option=$_GET["option"];
if ($option=="deny"){
$username=$_POST["username"];
$toknya=$_POST["token"];
$phjnya=$_POST["paket"];
$queryzz = "DELETE FROM gallery WHERE id='$id'";
mysql_query($queryzz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>Gallery Deleted</b></font><br><br>";
}
}



?>

<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Picture</th>
<th>Descriptions</th>                             
 <th>Option</th>
</tr>
</thead>
<tbody>


<?

$tabla = mysql_query("SELECT * FROM gallery ORDER BY id DESC"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<tr>
<td class=\"matrixItem\"><img src=\"". $registro["gambar"]."\" width=\"150\" height=\"150\"></td>
<td class=\"matrixItem\">". $registro["ket"] ." </td>
<td class=\"matrixOdd last\">";
?>

<form method="post" action="admin.php?op=100001&id=<?= $registro["id"] ?>&option=deny">
<input type="submit" class="btn btn-primary btn-sm" value="Delete">

</form>

</td>

</tr>

<?

} 
?>
</tbody>
</table>
</div></div></div>

   <?
break;
case (77771):
?>


<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Change Username Admin</h4>
                                           
                                        </div>
                                        <div class="panel-body">



<?
if ($_POST)
{

$id=saiful($_POST["id"]);
$userweb=saiful($_POST["username"]);
$query = "UPDATE settweb SET username='$userweb' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Username Admin Edited.</b></font><br><br>";

?>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=logout.php">
<?
}
?>



 <div class="col-md-6">

<?
$cedeffs=mysql_query("select * from settweb where id='1'");
while($xcvfrsaa=mysql_fetch_array($cedeffs)){
?>

<form class="form-horizontal" action="admin.php?op=77771" method="post">


<div class="form-group">
<label class="col-sm-3 control-label">
Username Admin</label>
<div class="col-sm-9">
<input type="text" name="username" value="<? echo $xcvfrsaa["username"]; ?>" class="form-control" >
<small>Input your Admin UserName. Ex : best1000 </small>
</div>
</div>

</div>
 <div class="col-md-6">

<input type="hidden" name="id" value="<? echo $xcvfrsaa["id"]; ?>" />
</div>
</div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>
								</div>
								</div>
<? } ?>                    



<?
break;
case (77772):
?>


<div class="row">
                            <div class="col-md-12">
                               
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Change Password Admin</h4>
                                           
                                        </div>
                                        <div class="panel-body">



<?
if ($_POST)
{

$id=saiful($_POST["id"]);
$password=md5(saiful($_POST["password"]));
$query = "UPDATE settweb SET password='$password' where id='$id'";
mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>Password Admin Edited.</b></font><br><br>";
?>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=logout.php">
<?
}
?>



 <div class="col-md-6">

<?
$cedeffs=mysql_query("select * from settweb where id='1'");
while($xcvfrsaa=mysql_fetch_array($cedeffs)){
?>

<form class="form-horizontal" action="admin.php?op=77772" method="post">


<div class="form-group">
<label class="col-sm-3 control-label">
Password Admin</label>
<div class="col-sm-9">
<input type="password" name="password" value="<? echo $xcvfrsaa["password"]; ?>" class="form-control" >
<small>Input your Admin Password </small>
</div>
</div>

</div>
 <div class="col-md-6">

<input type="hidden" name="id" value="<? echo $xcvfrsaa["id"]; ?>" />
</div>
</div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>
								</div>
								</div>
<? } ?>



<?
break;
case (77773):
?>
<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead><tr>

<th>Date Login</th>
<th>IP</th>                             
 <th>Browser</th>
 <th>Referer</th>
</tr>
</thead>
<tbody>


<?

$tabla = mysql_query("SELECT * FROM logadmin ORDER BY id DESC limit 0,1000"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "
<tr>
<td class=\"matrixItem\">". date("l, d M Y - H:i:s",$registro["date"]) ."</td>
<td class=\"matrixItem\">". $registro["ip"] ." </td>
<td class=\"matrixItem\">". $registro["browser"] ." </td>
<td class=\"matrixItem\">". $registro["refer"] ." </td>
</tr>
";
}
?>

</tbody>
</table>
</div></div></div>


<?
break;
}
?>






<?include "foot.php";?>