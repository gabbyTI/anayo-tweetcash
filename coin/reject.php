<?
session_start();
include "../config.php";
global $c,$loggedin;
include "../data.php";
global $config;
?>
<?
if(!isset($_COOKIE["usNick"]) && !isset($_COOKIE["usPass"]))
{
?>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=login.php">
<?
exit();

}

 ?>
<?
include "head.php";
?>
 <div class="row">



<div class="col-lg-12">
                                        <div class="panel panel-blue">
                                            <div class="panel-heading">Reject Transaction</div>
                                            <div class="panel-body">

	

<?
if (isset($_GET["id"]))
{
$id=abs((int)$_GET["id"]);
$option=$_GET["option"];
if ($option=="reject")
{
$user=$_COOKIE["usNick"];
$q="select * from tb_beli WHERE id='$id'";
$hsl=mysql_query($q) or die(mysql_error());
$q=mysql_fetch_array($hsl);
$reff1=$q["referer"];
$ec=$q["ec"];
$stuck=$q["status"];
$stucky=$q["paket"];
$stucke=$q["iddb"];
$stoke=$q["token"];
$hood=$q["username"];


if ($user != "$reff1") {
    echo "<font color=\"#cc0000\"><b>Sorry, you cannot verify this transaction</b></font><br><br>";
   exit();
}


if ($stuck != "pending") {
    echo "<font color=\"#cc0000\"><b>Sorry, you cannot verify this transaction</b></font><br><br>";
   exit();
}

if ($reff1 == "") {
   echo "<font color=\"#cc0000\"><b>Sorry, you cannot verify this transaction</b></font><br><br>";
   exit();
}

else
{


$qqm="select * from tb_users WHERE username='$hood'";
$hslqm=mysql_query($qqm) or die(mysql_error());
$qqm=mysql_fetch_array($hslqm);
$forrm=$qqm["phone"];
$forrmail=$qqm["email"];
$jokerf=number_format($stucky);
$eltiempo=time();
$extended=$eltiempo + 86400;
mysql_query("UPDATE tb_beli SET status='problem', reason='Fake Transfer' where id='$id'") or die(mysql_error());
mysql_query("UPDATE tb_jual SET status='tunggu transfer', reason='Fake Transfer' WHERE id='$stucke'") or die(mysql_error());

$to = $forrmail; 
$subject = "Reject Transaction ". $namaweb ."";
$from = $emailweb;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$emailweb."\r\n". 
            'Reply-To: '.$emailweb."\r\n" .
            'X-Mailer: PHP/' . phpversion();

$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Reject Transaction {$namaweb}</div>
    <br />

Your transaction is reject by your pair. <br>
Please Check your Dashboard
<br />
<br />
ID : {$skph} {$stoke}
Amount: <b>{$matauang} {$jokerf}</b><br />
Your Pair: <b>{$reff1}</b><br />


<br><br>
Support {$namaweb}<br />
</div></BODY></HTML>";

if(mail($to, $subject, $message, $headers)){
echo ''; } else{ echo ''; }
echo "<font color=\"#cc0000\"><b>Transactin rejected! Please contact us</b></font><br><br>";

}}
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

<form method="post" action="reject.php?id=<?= $registro["id"] ?>&option=reject">
<input type="submit" onclick="if (confirm('Are You Sure To Reject ?')) submit();"  class="btn btn-primary btn-xm" value="REJECT">
</form>

</font></td>

</tr>
<? } ?>
</table>
</div></div></div></div>
<?
include "foot.php";
?>
