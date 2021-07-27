<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Get Help";
$statredgh="YES";
include "head.php";
?>
    
<section class="mbr-section" id="form1-x" style="background-image: url(assets/images/jumbotron.jpg); padding-top: 120px; padding-bottom: 80px;">
    
   
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


<?
$statreg="select * from settph where id='1'";
$statresg=mysql_query($statreg) or die(mysql_error());
$statreg=mysql_fetch_array($statresg);
$statredg=$statreg['statr'];
$gstatredg=$statreg['statr'];


$stattwg="select * from tb_users WHERE username='$user'";
$stattwwg=mysql_query($stattwg) or die(mysql_error());
$stattwg=mysql_fetch_array($stattwwg);
$stattguser=$stattwg["statr"];
$nextgh=$stattwg["nx_gh"];


$namauser=saiful($_COOKIE["username"]) ;
cekGHTiket($namauser);
cekGHon();
cekPHOrderSukses($namauser);
?>
<?
if($ghon=='1'){
?>

<?
if ($_POST)
{

$paket=saiful($_POST["paket"]);
$paketph=saiful($_POST["paketph"]);
$autogh=saiful($_POST["autogh"]);
$idphu=saiful($_POST["idphey"]);
$laip = $_SERVER['REMOTE_ADDR'];
$eltiempo=time();
$lastpaket=$paket / 2;
$dibukanya = $eltiempo + $lockghb;
$unik=rand(111,999);
$uniktoken=acakAngkaHuruf1(30);
$uniktrx=acakAngkaHuruf2(8);

$minreq=$mingh;
$maxreq=$maxgh;

if(empty($paket))
{
$error = 1;
$errormsg .= "<p><b>Error</b> - Input your $ghname Amount</p>";
}


if($nextgh > $eltiempo){
$error = 1;
$errormsg .= "<p><b>Sorry, Is Not Yet Time to $ghname !</b><br>
PLEASE WAIT TILL". date(" H:i:s, d M ",$stattwi["nx_gh"]) ." TO $ghname</p>";
}



if($paket < $minreq){
$error = 1;
$errormsg .= "<p><b>Sorry, Your Amount Not Enough to request $ghname !</b><br>
Min $skgh $matauang $minreq</p>";
}


if($paket > $maxreq){
$error = 1;
$errormsg .= "<p><b>Sorry, Your Amount More than Max $skgh !</b><br>
Max $skgh $matauang $maxreq</p>";
}


$buatdpnya=$paketph * $feeadmin;
$buatmember=$paketph - $buatdpnya;
$profitnya= $paketph * $profitph;
$semuaprofit = $profitnya * $durasiph;

$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$buatdpnyax=$buatdpnya / $rate;


$lockphnya = $eltiempo + $lockph;
$expiredrf=$eltiempo + $expdp;
$waktughnya=$eltiempo + $selesaiph;
$minwaktugh=$eltiempo + $releaseph;



if ($statredg == YES ){


$cektrx1 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_ph WHERE username='$user' and status!='sukses'"));
$hsl1 = $cektrx1['cnt'];
$cektrx2 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_gh WHERE username='$user' and status!='sukses'"));
$hsl2 = $cektrx2['cnt'];
$cektrx3 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_beli WHERE username='$user' and status!='sukses'"));
$hsl3 = $cektrx3['cnt'];
$cektrx4 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_jual WHERE username='$user' and status!='sukses'"));
$hsl4 = $cektrx4['cnt'];
$cektrx5 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_users WHERE username='$user' and statr!='YES'"));
$hsl5 = $cektrx5['cnt'];
$totalcek=$hsl1 + $hsl2 + $hsl3 + $hsl4 + $hsl5;

}
else{
  $cektrx1 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_ph WHERE username='$user' and status!='sukses'"));
$hsl1 = $cektrx1['cnt'];
$cektrx2 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_gh WHERE username='$user' and status!='sukses'"));
$hsl2 = $cektrx2['cnt'];
$cektrx3 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_beli WHERE username='$user' and status!='sukses'"));
$hsl3 = $cektrx3['cnt'];
$cektrx4 = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cnt FROM tb_jual WHERE username='$user' and status!='sukses'"));
$hsl4 = $cektrx4['cnt'];
  $totalcek=$hsl1 + $hsl2 + $hsl3 + $hsl4;

}
if ($totalcek > 0)
{
$error = 1;
$errormsg .= "<b>Sorry, you cannot request $ghname !</b><br>
<p>Your previous request haven't completed yet, Pls Recommit.</p>";
}


if($_POST['captcha'] != $_SESSION['captcha']){
$error = 1;
$errormsg .= "<p><b>Error</b> - Captcha Error / Wrong</p>";
}


$_SESSION['string'] = false;
if($error == 1)
{
print $errormsg;
?>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=gethelp">
<?
exit();

} else {


$querytery = "INSERT INTO tb_gh (idtrx, username, namalengkap, bank, norek, nama, bitcoin, payeer, perfectmoney, ec, paket, saldo, sisa,  phone, email, bbm, status, date, ip, unik, asal,  upline, leva, levb, levc, levd, leve, levf, levg, levh, levi, levj, token, hari, minggu, bulan, tahun, lockgh, jenis) 
VALUES('$uniktrx', '$usernameku','$namalengkapku','$bankku','$norekku','$namaku','$btcku', '$payeerku', '$pmku', '$matauang','$paket', '$paket', '$paket', '$hpku', '$emailku', '$bbmku', 'pending', '$eltiempo', '$laip','$unik', 'GH Request', '$sponsorku', '$levaku', '$levbku', '$levcku', '$levdku', '$leveku', '$levfku', '$levgku', '$levhku', '$leviku', '$levjku', '$uniktoken','$hari', '$minggu', '$bulan', '$tahun', '$dibukanya','1')";
mysql_query($querytery);

mysql_query("UPDATE tb_ph SET paksaharian='1', getprofit='1' WHERE id='$idphu'") or die(mysql_error());
mysql_query("UPDATE tb_users SET lastph='$lastpaket' where username='$user'") or die(mysql_error());

if($tiketgh=='1'){
$trok=$r["username"];
mysql_query("UPDATE tb_users SET saldotiket=saldotiket-'$butuhtiket' where username='$trok'") or die(mysql_error());
$query = "INSERT INTO tiket (username, kode, jenis, pemakai, status, date, dipakai, ket, ip)VALUES('$trok','$paket','1', '$trok', 'Sukses', '$eltiempo', '$trok', 'Use $butuhtiket tickets to $ghname $matauang $paket', '$laip')"; mysql_query($query) or die(mysql_error());

} else {}



if($dpph=='1'){ 

$querytery = "INSERT INTO tb_ph (idtrx, username, namalengkap, bank, norek, nama, bitcoin, perfectmoney, payeer, ec, paket, saldo, sisa,  feeadmin, phone, email, bbm, status, profit, dpro, date, ip, unik, asal,  upline, leva, levb, levc, levd, leve, levf, levg, levh, levi, levj, token, hari, minggu, bulan, tahun, lockph, jenis, kapangh, readygh, totalprofit) 
VALUES('$uniktrx', '$usernameku','$namalengkapku','$bankku','$norekku','$namaku','$btcku', '$pmku','$payeerku', '$ec', '$paketph', '$buatmember', '$buatmember', '$buatdpnya', '$hpku', '$emailku', '$bbmku', 'pending', '$profitnya', '$waktughnya', '$eltiempo', '$laip','$unik', 'PH Manual', '$sponsorku', '$levaku', '$levbku', '$levcku', '$levdku', '$leveku', '$levfku', '$levgku', '$levhku', '$leviku', '$levjku', '$uniktoken','$hari', '$minggu', '$bulan', '$tahun', '$lockphnya','2','$minwaktugh','0','$durasiph')";
mysql_query($querytery);


$queryterys = "INSERT INTO tb_fee (username, bitcoin, payeer, perfectmoney, bank, norek, nama, paket, fee, phone, email, status, date, token, exp, jenis, amountbtc) 
VALUES('$usernameku','$btcku', '$payeerku', '$pmku', '$bankku','$norekku','$namaku', '$buatdpnya', '$buatdpnya', '$hpku', '$emailku', 'pending', '$eltiempo', '$uniktoken','$expiredrf','2','$buatdpnyax')";
mysql_query($queryterys);



} else {}




$to = $email; 
$subject = "". $skgh ." Request ". $namaweb ."";
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
<div style='font-size:22px; color:darkblue; font-weight:bold;'>{$skgh} Request {$namaweb}</div>
    <br />

Your Request {$skgh} added to our database. Please wait to pairing process. <br>

Please find your {$skgh} Request details below.<br />
<br />

Amount: <b>{$matauang} {$paket}</b><br />

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
Your Request <? echo $ghname; ?> added to our database. <br>
Please wait to Pairing process. Thanks <br><br>
</div>
</font>


<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=index.php">

<? exit(); } else {

?>

<?
if ($gstatredg==YES){

?>
<?
if ($stattguser==YES)
{
                                 
?>

<form method="post" action="gethelp" class="form-horizontal">
                                                  <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                            

                                                             <div class="form-group">
                                                              <label><? echo $ghname; ?> Amount (<?echo $matauang; ?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <div class="col-md-9">

<div class="input-group">
       <?
$user=$r["username"];
$queryfqgggg="select * from tb_ph where username='$user' and status='sukses' and getprofit='0' and paksaharian='0' and refund='1' order by id ASC limit 0,1";
$resultgggg=mysql_query($queryfqgggg);
while ($rowfgggg=mysql_fetch_array($resultgggg)) {
$idey=$rowfgggg["id"];
$autogh=$rowfgggg["readygh"];
echo "
<input type=\"text\" name=\"paket\" class=\"form-control\" value=\"". $autogh ."\" readonly>
<input type=\"hidden\" name=\"idphey\" class=\"form-control\" value=\"". $idey ."\" readonly>
"; } ?></div>
                <br />
                                
                                     </div>                  

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
                                                            <button type="submit" class="btn btn-primary">REQUEST <? echo $ghname; ?> </button>
                                                            &nbsp;
                                                           
                                                        </div>
                                                    </div>

                                                     </div></div> </div>
                                                </form>
 
 <?}
    else{ ?>
    <?echo "<font color=\"#cc0000\"><b> PLS NOTE THAT YOU ARE REQUIRED TO RECOMMIT BEFORE YOU CAN $ghname !!! THANKS.</b></font><br><br>"?>
       <META HTTP-EQUIV="REFRESH" CONTENT="4;URL=providehelp">
         <?}?><?
          }                               
else{?>
    
<form method="post" action="gethelp" class="form-horizontal">
                                                  <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                            
                                                    <div class="form-group">
                                                    
  
        <br/>
        
        
                                                            
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
                                                            <button type="submit" class="btn btn-primary">REQUEST <? echo $ghname; ?> </button>
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
<?
} else {
echo "Sorry, $skghb Request Was Closed. Please wait to activated."; 
}
exit();
?>

 </div>
 </div>
</div>
</div>
<?include "foot.php";?>