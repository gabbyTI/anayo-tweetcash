<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
include "head.php";
$statef="NO";
$states="YES";
$statei="0";

?>

  <div class="row">



<div class="col-lg-12">
                                        <div class="panel panel-green">
                                            <div class="panel-heading">Approve Transaction</div>
                                            <div class="panel-body">



<?
if (isset($_GET["id"]))
{
$id=abs((int)$_GET["id"]);
$option=$_GET["option"];
if ($option=="verifikasi")
{
$user=$_COOKIE["usNick"];
$q="select * from tb_beli WHERE id='$id' and status='pending'";
$hsl=mysql_query($q) or die(mysql_error());
$q=mysql_fetch_array($hsl);
$reff1=$q["referer"];
$ec=$q["ec"];
$stuck=$q["status"];
$stucke=$q["iddb"];
$robin=$q["saldo"];
$jakasembunglagi=$q["token"];
$hood=$q["username"];
$superman=$q["email"];
$saras=$q["bank"];
$zorro=$q["norek"];
$batman=$q["nama"];
$sponge=$q["paket"];
$sibuta=$q["jpro"];
$sintogendeng=$q["idph"];
$jetli=$q["phone"];
$tglphv=$q["date"];
$bob=$sponge*$komisisp;


$laip = $_SERVER['REMOTE_ADDR'];
$eltiempo=time();
$expoym=$eltiempo+$waktumb;
$da=date("m");
$joker=$sibuta/$pecahan;
$nextrec=$eltiempo+(3*(86400));
$nextgh=$eltiempo+(2*(86400));
$nextreci=$eltiempo+(2*(86400));



if ($stuck != "pending") {
    echo "<font color=\"#cc0000\"><b>Error, you cannot verify this transaction</b></font><br><br>";
   exit();
}

if ($stuck == "problem") {
    echo "<font color=\"#cc0000\"><b>Error, Transaction Flagged As Fake POP, Contact Support</b></font><br><br>";
   exit();
}
if ($reff1 == "") {
   echo "<font color=\"#cc0000\"><b>No, you cannot verify this transaction</b></font><br><br>";
   exit();
}

else
{

$qq="select * from tb_users WHERE username='$hood'";
$hslq=mysql_query($qq) or die(mysql_error());
$qq=mysql_fetch_array($hslq);
$komsp=$qq["referer"];
$komspa=$qq["leva"];
$komspb=$qq["levb"];
$komspc=$qq["levc"];
$komspd=$qq["levd"];
$komspe=$qq["leve"];
$komspf=$qq["levf"];
$komspg=$qq["levg"];
$komsph=$qq["levh"];
$komspi=$qq["levi"];
$komspj=$qq["levj"];




mysql_query("UPDATE tb_beli SET status='sukses', saldo=saldo-'$robin', verify='$eltiempo', exp='' WHERE id='$id'") or die(mysql_error());
mysql_query("UPDATE tb_ph SET sisa=sisa-'$robin' WHERE id='$sintogendeng'") or die(mysql_error());
mysql_query("UPDATE tb_jual SET status='sukses', saldo='0' WHERE token='$jakasembunglagi'") or die(mysql_error());
$qq2="select * from tb_jual WHERE token='$jakasembunglagi'";
$hslq=mysql_query($qq2) or die(mysql_error());
$qq2=mysql_fetch_array($hslq);

mysql_query("UPDATE tb_gh SET sisa=sisa-'$robin' WHERE id='$stucke'") or die(mysql_error());


$qstatw="select * from tb_jual WHERE token='$jakasembunglagi'";
$qstatww=mysql_query($qstatw) or die(mysql_error());
$qstatw=mysql_fetch_array($qstatww);
$qstatuser=$qstatw["username"];
$qstatnama=$qstatw["nama"];


$rwlstatw="select * from tb_gh WHERE id='$stucke'";
$rwlstatww=mysql_query($rwlstatw) or die(mysql_error());
$rwlstatw=mysql_fetch_array($rwlstatww);
$checkrw=$rwlstatw["reward"];
$sisacheck=$rwlstatw["sisa"];


$ghstattw="select * from tb_users WHERE username='$qstatuser'";
$ghstattww=mysql_query($ghstattw) or die(mysql_error());
$ghstattw=mysql_fetch_array($ghstattww);
$ghstattuser=$ghstattw["statr"];
$ghcheck=$ghstattw["gh_count"];


if ($checkrw == 0 ){

if ($sisacheck == 0 ){

mysql_query("UPDATE tb_users SET statr='NO', nx_ph='$nextreci', gh_count=gh_count+1 WHERE username='$qstatuser'") or die(mysql_error());
}
}

$statw="select * from tb_beli WHERE id='$id'";
$statww=mysql_query($statw) or die(mysql_error());
$statw=mysql_fetch_array($statww);
$statuser=$statw["username"];

$lstatw="select * from tb_ph WHERE id='$sintogendeng'";
$lstatww=mysql_query($lstatw) or die(mysql_error());
$lstatw=mysql_fetch_array($lstatww);
$lstatuser=$lstatw["sisa"];
$lstatnama=$lstatw["nama"];


$tconfirm = "I Just $ghname of $matauang$robin From $lstatnama";

$weconfirm="INSERT INTO we_say (message, date, name) VALUES ('$tconfirm','$eltiempo','$qstatnama')";
mysql_query($weconfirm) or die(mysql_error());

$stattw="select * from tb_users WHERE username='$statuser'";
$stattww=mysql_query($stattw) or die(mysql_error());
$stattw=mysql_fetch_array($stattww);
$stattuser=$stattw["statr"];
$phcheck=$stattw["ph_count"];


if ($lstatuser == 0 ){
    
if ($stattuser == 0 ) {
mysql_query("UPDATE tb_users SET statr='NO', nx_ph='$nextrec', ph_count=ph_count+1 WHERE username='$statuser'") or die(mysql_error());
}
 if ($stattuser == YES) {
mysql_query("UPDATE tb_users SET statr='NO', nx_ph='$nextrec', ph_count=ph_count+1 WHERE username='$statuser'") or die(mysql_error());
}
if ($stattuser == NO){
mysql_query("UPDATE tb_users SET statr='YES', nx_gh='$nextgh', ph_count=ph_count+1 WHERE username='$statuser'") or die(mysql_error());
}
}

$qqm="select * from tb_users WHERE username='$hood'";
$hslqm=mysql_query($qqm) or die(mysql_error());
$qqm=mysql_fetch_array($hslqm);
$forrm=$qqm["phone"];

$s = '$superman';
$z = '$batman';
$_SESSION['next_reseptsend'] = 1;
$message = "Dear {$batman},

Congratulation, your {$skph} has been verified

Thanks,
Admin {$config['site_name']}";
mail($superman,"PH Verification - ".$config["site_name"],$message,"From: mail@".$_SERVER['HTTP_HOST']);


$tabla = mysql_query("SELECT * FROM tb_users where username='$reff1'");
while ($registro = mysql_fetch_array($tabla)) {
$s1 = $registro["email"];
$z1 = $registro["nama"];

$_SESSION['next_reseptsend'] = 1;
$message = "Dear {$z1},

Your PH Verifications has been success  for {$skph} member {$hood}

Thanks,
Admin {$config['site_name']}";
mail($s1,"PH Verification - ".$config["site_name"],$message,"From: admin@".$_SERVER['HTTP_HOST']);

}

echo "<font color=\"#cc0000\"><b>Verification Success!! Thanks</b></font><br><br>";
}
}

}
?>
<div class="table-responsive">
<table class="table table-hover table-bordered">
   <thead><tr>
<th>Detail Transactions </th>
<th>Detail User </th>
<th>Detail Payment</th>   
<th>Message</th>
<th>Pic</th>                     
<th>Option</th>

                                            </tr>
                                        </thead>

                                        <tbody>


						

<?
$TAMANO_PAGINA = 20000;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$lole=$_COOKIE["usNick"];
$tabla = mysql_query("SELECT * FROM tb_beli where referer='$lole' and status='pending' and id='$id'"); 
while ($registro = mysql_fetch_array($tabla)) { 
$bukti=$registro["avatar"];
$jojon=$registro["paket"];
$jojon2=$registro["unik"];
$jojon3=$jojon+$jojon2;
$apel=$registro["exp"];
$jambu=time();
$jeruk=$apel-$jambu;
$sirsak=floor($jeruk/3600);
$sirsake=floor($jeruk/60);
if($sirsak < 0){$rambutan="Time Out!";} 
else{$rambutan="$sirsake minutes <br> Time Out";}
if($bukti=='0'){$wowo="images/ssoff.jpg";}
else {$wowo=$bukti;}


echo "
<tr class=\"odd gradeX\">
<td>
Date : ". date("d M H:i:s",$registro["date"]) ." <br>
Expired : ". date("d M H:i:s",$registro["exp"]) ." <br>
Amount : ". $matauang ." ". number_format($registro["paket"]+$registro["unik"]) ." </td>

<td>
Username : ". $registro["username"] ." <br>
Phone : ". $registro["phone"] ." <br>
Email : ". $registro["email"] ." </td>

<td> 

BTC Wallet : ". $registro["bitcoin"] ." <BR>

                                         
</td>
<td> 
Message : ". $registro["pesan"] ." <br>
</td>
<td>
<a href=\"". $registro["pic"] ."\" target=\"_blank\"><img src=\"". $registro["pic"] ."\" width=\"60\" height=\"60\"></a>
</td>
<td>
";
?>

<form method="post" action="verify.php?id=<?= $registro["id"] ?>&option=verifikasi">
<input type="submit" onclick="if (confirm('Are You Sure To Verify ?')) submit();"  class="btn btn-primary btn-xm" value="VERIFY">
</form>

</font></td>

</tr>
<? } ?>
</table>
</div></div></div>

<?
include "foot.php";
?>
