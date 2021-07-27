<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');

functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Provide Help";
include "head.php";
?>
    
<section class="mbr-section" id="form1-x" style="background-image: url(assets/images/jumbotron.jpg); padding-top: 120px; padding-bottom: 80px;">
    
   
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


<?
$stattwp="select * from tb_users WHERE username='$user'";
$stattwwp=mysql_query($stattwp) or die(mysql_error());
$stattwp=mysql_fetch_array($stattwwp);
$stattpuser=$stattwp["statr"];
$lastph=$stattwp["lastph"];
$nextrec=$stattwp["nx_ph"];



$statregp="select * from settph where id='1'";
$statresgp=mysql_query($statregp) or die(mysql_error());
$statregp=mysql_fetch_array($statresgp);
$statredgp=$statregp['statr'];

$namauser=saiful($_COOKIE["username"]) ;
cekPHTiket($namauser);
cekPHon();
?>

<?
if ($_POST)
{
$user=saiful($_COOKIE["username"]);
$lolu=rand(111,999);
$paket=saiful($_POST["paket"]);
$buatdpnyaz=$paket * $feeadmin;
$buatdpnya=$buatdpnyaz;
$buatmember=$paket - $buatdpnyaz;


$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$buatdpnyax=$buatdpnya / $rate;

if($paket < $minph){
$error = 1;
$errormsg .= "<p><b>Sorry, Your Amount Not Enaugh to request $phname !</b><br>
Min $skph $matauang $minph</p>";
}


if($nextrec > $eltiempo){
$error = 1;
$errormsg .= "<p><b>Sorry, Is Not Yet Time to $rphname !</b><br>
PLEASE WAIT TILL". date(" H:i:s, d M ",$stattwi["nx_gh"]) ." TO $rphname</p>";
}


if($paket < $lastph){
$error = 1;
$errormsg .= "<p><b>Sorry, You Cannot Request Lesser Than Your Last $phname !</b><br>
Min $skph $matauang $lastph</p>";
}

if($paket > $maxph){
$error = 1;
$errormsg .= "<p><b>Sorry, Your Amount More than Max $skph !</b><br>
Max $skph $matauang $maxph</p>";
}

$profitnya= $paket * $profitph;
$semuaprofit = $profitnya * $durasiph;

$lockphnya = $eltiempo + $lockph;
$expiredrf=$eltiempo + $expdp;
$waktughnya=$eltiempo + $selesaiph;
$minwaktugh=$eltiempo + $releaseph;

$unik=rand(111,999);
$uniktoken=acakAngkaHuruf1(30);
$uniktrx=acakAngkaHuruf2(8);

/** Validate captcha */
if (!empty($_REQUEST['captcha'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
        $captcha_message = "Invalid captcha";
        $style = "background-color: #FF606C";
    } else {
        $captcha_message = "Valid captcha";
        $style = "background-color: #CCFF99";
    }
    $request_captcha = htmlspecialchars($_REQUEST['captcha']);
    
    unset($_SESSION['captcha']);
}


if(empty($paket))
{
$error = 1;
$errormsg .= "<p><b>Error</b> - Input your $phname Amount</p>";
}


$cektrx1 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_ph WHERE username='$user' and status!='sukses'"));
$hsl1 = $cektrx1['cnt'];
$cektrx2 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_gh WHERE username='$user' and status!='sukses'"));
$hsl2 = $cektrx2['cnt'];
$cektrx3 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_beli WHERE username='$user' and status!='sukses'"));
$hsl3 = $cektrx3['cnt'];
$cektrx4 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_jual WHERE username='$user' and status!='sukses'"));
$hsl4 = $cektrx4['cnt'];
$cektrx5 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_users WHERE username='$user' and statr='YES'"));
$hsl5 = $cektrx5['cnt'];
$totalcek=$hsl1 + $hsl2 + $hsl3 + $hsl4 + $hsl5;
if ($totalcek > 0)
{
$error = 1;
$errormsg .= "<b>Sorry, you cannot request $phname !</b><br>
<p>Your previous request haven't completed yet,Pls $skgh.</p>";
}

$_SESSION['string'] = false;
if($error == 1)
{
print $errormsg;
?>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=providehelp">
<?
exit();

} else {


if($dpph=='1'){ 

$querytery = "INSERT INTO tb_ph (idtrx, username, namalengkap, bank, norek, nama, bitcoin, perfectmoney, payeer, ec, paket, saldo, sisa,  feeadmin, phone, email, bbm, status, profit, dpro, date, ip, unik, asal,  upline, leva, levb, levc, levd, leve, levf, levg, levh, levi, levj, token, hari, minggu, bulan, tahun, lockph, jenis, kapangh, readygh, totalprofit) 
VALUES('$uniktrx', '$usernameku','$namalengkapku','$bankku','$norekku','$namaku','$btcku', '$pmku','$payeerku', '$ec', '$paket', '$buatmember', '$buatmember', '$buatdpnya', '$hpku', '$emailku', '$bbmku', 'dilock', '$profitnya', '$waktughnya', '$eltiempo', '$laip','$unik', 'PH Manual', '$sponsorku', '$levaku', '$levbku', '$levcku', '$levdku', '$leveku', '$levfku', '$levgku', '$levhku', '$leviku', '$levjku', '$uniktoken','$hari', '$minggu', '$bulan', '$tahun', '$lockphnya','1','$minwaktugh','0','$durasiph')";
mysql_query($querytery) or die(mysql_error());


$queryterys = "INSERT INTO tb_fee (username, bitcoin, payeer, perfectmoney, bank, norek, nama, paket, fee, phone, email, status, date, token, exp, jenis, amountbtc) 
VALUES('$usernameku','$btcku', '$payeerku', '$pmku', '$bankku','$norekku','$namaku', '$buatdpnya', '$buatdpnya', '$hpku', '$emailku', 'pending', '$eltiempo', '$uniktoken','$expiredrf','1','$buatdpnyax')";
mysql_query($queryterys)or die(mysql_error());



} else {

$skrg=time();
$nextprofku=$skrg + 86400;
$profitkuz=$durasiph;
$querytery = "INSERT INTO tb_ph (idtrx, username, namalengkap, bank, norek, nama, bitcoin, perfectmoney, payeer, ec, paket, saldo, sisa,  feeadmin, phone, email, bbm, status, profit, dpro, date, ip, unik, asal,  upline, leva, levb, levc, levd, leve, levf, levg, levh, levi, levj, token, hari, minggu, bulan, tahun, lockph, jenis, kapangh, readygh, totalprofit, harian, cekharian) 
VALUES('$uniktrx', '$usernameku','$namalengkapku','$bankku','$norekku','$namaku','$btcku', '$pmku','$payeerku', '$ec', '$paket', '$paket', '$paket', '0', '$hpku', '$emailku', '$bbmku', 'dikunci', '$profitnya', '$waktughnya', '$eltiempo', '$laip','$unik', 'PH Manual', '$sponsorku', '$levaku', '$levbku', '$levcku', '$levdku', '$leveku', '$levfku', '$levgku', '$levhku', '$leviku', '$levjku', '$uniktoken','$hari', '$minggu', '$bulan', '$tahun', '$lockphnya','1','$minwaktugh','0','$profitkuz','','$nextprofku')";
mysql_query($querytery) or die(mysql_error());

}

mysql_query("UPDATE tb_users SET phawal='$paket' where username='$usernameku'") or die(mysql_error());

if($tiketph=='1'){
$trok=$r["username"];
mysql_query("UPDATE tb_users SET saldotiket=saldotiket-'$butuhtiket' where username='$trok'") or die(mysql_error());
$query = "INSERT INTO tiket (username, kode, jenis, pemakai, status, date, dipakai, ket, ip)VALUES('$trok','$paket','1', '$trok', 'Sukses', '$eltiempo', '$trok', 'Use $butuhtiket tickets to $phname ', '$laip')"; mysql_query($query) or die(mysql_error());

} else {}


$to = $email; 
$subject = "". $skph ." Request ". $namaweb ."";
$from = $emailweb;
     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$emailweb."\r\n".

        'Reply-To: '.$emailweb."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     
    // Compose a simple HTML email message
	$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>{$skph} Request {$namaweb}</div>
    <br />

Your Request {$phname} added to our database. Please wait to pairing process. <br>

Please find your {$skph} Request details below.<br />
<br />
Plan: <b>{$nameplan}</b><br />
Amount: <b>{$matauang} {$paket}</b><br />
Profit Daily: <b>{$matauang} {$profitnya}</b><br />

<br>
Support {$namaweb}<br />
</div></BODY></HTML>";


    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '';

    } else{

        echo '';

    }

    
}

?>

<br><br> 
<div class="alert alert-primary text-center">           
Your Request <? echo $phname; ?> added to our database. <br>
Please wait to Pairing process. Thanks <br><br>
</div>
</font>


<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=index">

<? exit(); } else {

?>

<?
if ($statredgp == YES){

?>
<?
    if ($stattpuser!=YES)
{
    ?>
                             


<form method="post" action="providehelp" class="form-horizontal">
                                                 
                                                    
                                                       <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                                                            
                                                             <div class="form-group">
                    <label>Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" class="form-control" placeholder="ENTER AMOUNT" name="paket" id="paket" maxlength="45" required>
					</div>
                    
                    </div></div>
                                                            
                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                                     
   <div class="form-group">
   <img src="captcha.php" id="captcha" />
<br />

                                        <div class="form-group">
                <div class="input-icon right"><input type="text" placeholder="Captcha" name="captcha" class="form-control" required></div>
                <br />
                                
                          </div>                             

                                                        
                            </div>

                                                       <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-primary">REQUEST <? echo $phname; ?> </button>
                                                            &nbsp;
                                                           
                                                        </div>
                                                    </div>

                                                     </div></div> </div>
                                                </form>
                                                <? }
    else{ ?>
    <?echo "<font color=\"#cc0000\"><b> PLS NOTE THAT YOU ARE REQUIRED TO $skgh AFTER TWO $skph BEFORE YOU CAN $phname AGAIN !!! THANKS.</b></font><br><br>"?>
        <META HTTP-EQUIV="REFRESH" CONTENT="4;URL=gethelp">
         <?}?><? 
         }
         else{?>                                 
                                          


<form method="post" action="providehelp" class="form-horizontal">
                                                 
                                                    
                                                       <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                                                            
                                                             <div class="form-group">
                    <label>Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" class="form-control" placeholder="ENTER AMOUNT" name="paket" id="paket" maxlength="45" required>
					</div>
                    
                    </div></div>
                                                            
                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                                     
   <div class="form-group">
   <img src="captcha.php" id="captcha" />
<br />

                                        <div class="form-group">
                <div class="input-icon right"><input type="text" placeholder="Captcha" name="captcha" class="form-control" required></div>
                <br />
                                
                          </div>                             

                                                        
                            </div>

                                                       <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-primary">REQUEST <? echo $phname; ?> </button>
                                                            &nbsp;
                                                           
                                                        </div>
                                                    </div>

                                                     </div></div> </div>
                                                </form>
                                                <?
                                                }
                                                ?>
                                           
<?

}


?>

 </div>
 </div>
</div>
</div>
<?include "foot.php";?>