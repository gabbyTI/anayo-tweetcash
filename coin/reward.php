<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="REWARD";
include "head.php";

?>
    
<div class="row">
<div class="col-lg-12">
<div class="panel panel-violet">
<div class="panel-heading"><? echo $ghbname; ?> Request</div>
<div class="panel-body">

<?

$namauser=saiful($_COOKIE["username"]) ;
cekGHBTiket($namauser);
cekGHBonuson();


$rghstattw="select * from tb_users WHERE username='$namauser'";
$rghstattww=mysql_query($rghstattw) or die(mysql_error());
$rghstattw=mysql_fetch_array($rghstattww);
$rghstattuser=$rghstattw["statr"];
$rphcheck=$rghstattw["ph_count"];

?>
<?
if($ghbon=='1'){
?>

<?
if ($_POST)
{

$paket=saiful($_POST["paket"]);
$laip = $_SERVER['REMOTE_ADDR'];
$eltiempo=time();
$dibukanya = $eltiempo + $lockghb;
$unik=rand(111,999);
$uniktoken=acakAngkaHuruf1(30);
$uniktrx=acakAngkaHuruf2(8);

$minreq=$minghb;
$maxreq=$maxghb;

if($paket < $minreq){
$error = 1;
$errormsg .= "<p><b>Sorry, Your Amount Not Enaugh to request $ghbname !</b><br>
Min $skghb $matauang $minreq</p>";
}


if($paket > $maxreq){
$error = 1;
$errormsg .= "<p><b>Sorry, Your Amount More than Max $skghb !</b><br>
Max $skghb $matauang $maxreq</p>";
}

if(empty($paket))
{
$error = 1;
$errormsg .= "<p><b>Error</b> - Input your $phname Amount</p>";
}

$rduitgue=$r["moneys"];
if($paket > $rduitgue)
{
$error = 1;
$errormsg .= "<p><b>Error</b> - Your Profit Balance Not Enough</p>";
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
<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=reward">
<?
exit();

} else {

$querytery = "INSERT INTO tb_gh (idtrx, username, namalengkap, bank, norek, nama, bitcoin, payeer, perfectmoney, ec, paket, saldo, sisa,  phone, email, bbm, status, date, ip, unik, asal,  upline, leva, levb, levc, levd, leve, levf, levg, levh, levi, levj, token, hari, minggu, bulan, tahun, lockgh, jenis, reward) 
VALUES('$uniktrx', '$usernameku','$namalengkapku','$bankku','$norekku','$namaku','$btcku', '$payeerku', '$pmku', '$matauang','$paket', '$paket', '$paket', '$hpku', '$emailku', '$bbmku', 'dikunci', '$eltiempo', '$laip','$unik', 'GH Bonus', '$sponsorku', '$levaku', '$levbku', '$levcku', '$levdku', '$leveku', '$levfku', '$levgku', '$levhku', '$leviku', '$levjku', '$uniktoken','$hari', '$minggu', '$bulan', '$tahun', '$dibukanya','3','1')";
mysql_query($querytery);
mysql_query("UPDATE tb_users SET moneys=moneys-'$paket' WHERE username='$user'") or die(mysql_error());

if($tiketghb=='1'){
$trok=$r["username"];
mysql_query("UPDATE tb_users SET saldotiket=saldotiket-'$butuhtiket' where username='$trok'") or die(mysql_error());
$query = "INSERT INTO tiket (username, kode, jenis, pemakai, status, date, dipakai, ket, ip)VALUES('$trok','$paket','1', '$trok', 'Sukses', '$eltiempo', '$trok', 'Use $butuhtiket tickets to $ghbname $matauang $paket', '$laip')"; mysql_query($query) or die(mysql_error());

} else {}


$to = $email; 
$subject = "". $skghb ." Request ". $namaweb ."";
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
<div style='font-size:22px; color:darkblue; font-weight:bold;'>{$skghb} Request {$namaweb}</div>
    <br />

Your Request {$skghb} added to our database. Please wait to pairing process. <br>

Please find your {$skghb} Request details below.<br />
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
Your Request <? echo $ghbname; ?> added to our database. <br>
Please wait to Pairing process. Thanks <br><br>
</div>
</font>


<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php">

<? exit(); } else {

?>


                                 
<?
if ($kstattpuser == '0'){
      
    echo "<font color=\"#cc0000\"><b> PLEASE NOTE THAT YOU ARE REQUIRED TO $phname BEFORE YOU CAN GET $ghbname !!! THANKS.</b></font><br><br>"?>
       <META HTTP-EQUIV="REFRESH" CONTENT="4;URL=providehelp">
    
<? }   else {          
?>

<?
if ($rphcheck >= '5'){
?>
<form method="post" action="reward" class="form-horizontal">
                                                 
                                                     <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                            
                                                    <div class="form-group">
                                                    
  
        <br/>
        
        
                                                             
                                                             <div class="form-group">
                    <label><?echo $ghbname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                <select class="form-control" placeholder="Amount" name="paket" id="paket" required="">
                    	<option value="10"><?echo $matauang; ?> 10</option>

                                </select>
                                                       

                            </div>
                    
                    </div>
        
        
        
  

                                                 
                                                    
                         <div class="form-group">
                             <label>Commisions Balance <? echo $matauang; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                                <div class="input-icon right"><input type="text" name="moneys" class="form-control" value='<? echo $r["moneys"]; ?>' readonly>
</div>
</div>
                                         
                                     
   <div class="form-group">
   <img src="captcha.php" id="captcha" />
<br />

                                        <div class="form-group">
                <div class="input-icon right"><input type="text" placeholder="Captcha" name="captcha" class="form-control" required></div>
                <br />
                                
                                                       

                            </div>                            
                            </div>

                                                        </div>

                                                       <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-primary"><? echo $ghbname; ?> Request</button>
                                                            &nbsp;
                                                           
                                                        </div>
                                                    </div>

                                                    
                                                </form>
                                                
                                                <?}else{
                                                    
                                                        echo "<font color=\"#cc0000\"><b> PLEASE NOTE THAT YOU ARE REQUIRED TO HAVE A MINIMUM OF FOUR(4) $rphname BEFORE YOU CAN GET $ghbname !!! THANKS.</b></font><br><br>"?>
       <META HTTP-EQUIV="REFRESH" CONTENT="4;URL=providehelp">

                                              <?  }
                                                ?>
                                           
 <?}
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