<?
include "config.php";
global $loggedin;

//*********************************************************************************
// GLOBAL SETTING
//*********************************************************************************

if($_GET['r'])
{
$_SESSION['r'] = $_GET['r'];
}

$user = $_COOKIE['username'];
$sponsor= $_GET['r'];

$laip = $_SERVER['REMOTE_ADDR'];
$eltiempo=time();

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
$unik=rand(111,999);

function saiful($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = htmlspecialchars($string);
    $string = mysql_real_escape_string($string);
    return $string;
}




//*********************************************************************************
// WEB SETTING
//*********************************************************************************

$pecahan='1';
$settweb=mysql_fetch_array(mysql_query("select * from settweb where id='1'"));
$namaweb=$settweb["nama"];
$config['site_name']=$namaweb;
$emailweb=$settweb["email"];
$hpweb=$settweb["phone"];
$useradmin=$settweb["username"];
$passadmin=$settweb["password"];

$bbweb=$settweb["bbm"];
$waweb=$settweb["wa"];
$fbweb=$settweb["fb"];

$sloganweb=$settweb["tagline"];
$descweb=$settweb["descweb"];
$keyweb=$settweb["keyword"];

$usersmsweb=$settweb["usersms"];
$apismsweb=$settweb["apisms"];
$sitekey=$settweb["sitekey"];
$secretkey=$settweb["secretkey"];

$matauang=$settweb["ecurrency"];
$ec=$matauang;
$desimal=$settweb["desimal"];
$localec=$settweb["localec"];
$ratetousd=$settweb["ratetousd"];

$maxemail=$settweb["maxemail"];
$maxrekening=$settweb["maxrek"];
$maxhp=$settweb["maxhp"];

$pairingsistem=$settweb["pairingsistem"];
$gauthsistem=$settweb["gauth"];
$tiketsistem=$settweb["tiketsistem"];
$loginen=$settweb["loginen"];
$registeren=$settweb["registeren"];
$testimony=$settweb["testimony"];
$regpack=$settweb["regpack"];





//*********************************************************************************
// MEMBER SETTING
//*********************************************************************************

$kolorijo=$r["username"];
$memberdata= mysql_fetch_array(mysql_query("select * from tb_users where username='$kolorijo'"));

$usernameku=$memberdata["username"];
$namalengkapku=$memberdata["namalengkap"];

$bankku=$memberdata["bank"];
$norekku=$memberdata["norek"];
$namaku=$memberdata["nama"];
$btcku=$memberdata["bitcoin"];
$pmku=$memberdata["perfectmoney"];
$payeerku=$memberdata["payeer"];

$emailku=$memberdata["email"];
$hpku=$memberdata["phone"];
$bbmku=$memberdata["bbm"];
$waku=$memberdata["wa"];

$sponsorku=$memberdata["referer"];

$avatarku=$memberdata["avatar"];

$alamatku=$memberdata["alamat"];
$kotaku=$memberdata["kota"];
$posku=$memberdata["kodepos"];
$negaraku=$memberdata["country"];

$ipku=$memberdata["ip"];
$lastipku=$memberdata["lastiplog"];
$joinku=$memberdata["joindate"];
$lastlogku=$memberdata["lastlogdate"];

$saldoku=$memberdata["money"];
$bonusku=$memberdata["moneys"];
$tiketku=$memberdata["saldotiket"];

$suspendku=$memberdata["suspend"];

$phawalku=$memberdata["phawal"];

$stokisku=$memberdata["stokis"];

$gauthku=$memberdata["gauth"];
$gauthexpku=$memberdata["gauthexp"];

$levaku=$memberdata["leva"];
$levbku=$memberdata["levb"];
$levcku=$memberdata["levc"];
$levdku=$memberdata["levd"];
$leveku=$memberdata["leve"];
$levfku=$memberdata["levf"];
$levgku=$memberdata["levg"];
$levhku=$memberdata["levh"];
$leviku=$memberdata["levi"];
$levjku=$memberdata["levj"];


$sponsordata= mysql_fetch_array(mysql_query("select * from tb_users where username='$sponsorku'"));

$usernamemu=$sponsordata["username"];
$namalengkapmu=$sponsordata["namalengkap"];

$bankmu=$sponsordata["bank"];
$norekmu=$sponsordata["norek"];
$namamu=$sponsordata["nama"];
$btcmu=$sponsordata["bitcoin"];
$pmmu=$sponsordata["perfectmoney"];
$payeermu=$sponsordata["payeer"];

$emailmu=$sponsordata["email"];
$hpmu=$sponsordata["phone"];
$bbmmu=$sponsordata["bbm"];
$wamu=$sponsordata["wa"];

$sponsormu=$sponsordata["referer"];

$avatarmu=$sponsordata["avatar"];

$alamatmu=$sponsordata["alamat"];
$kotamu=$sponsordata["kota"];
$posmu=$sponsordata["kodepos"];
$negaramu=$sponsordata["country"];

$ipmu=$sponsordata["ip"];
$lastipmu=$sponsordata["lastiplog"];
$joinmu=$sponsordata["joindate"];
$lastlogmu=$sponsordata["lastlogdate"];

$saldomu=$sponsordata["money"];
$bonusmu=$sponsordata["moneys"];
$tiketmu=$sponsordata["saldotiket"];

$suspendmu=$sponsordata["suspend"];

$phawalmu=$sponsordata["phawal"];

$stokismu=$sponsordata["stokis"];

$gauthmu=$sponsordata["gauth"];
$gauthexpmu=$sponsordata["gauthexp"];

$levamu=$sponsordata["leva"];
$levbmu=$sponsordata["levb"];
$levcmu=$sponsordata["levc"];
$levdmu=$sponsordata["levd"];
$levemu=$sponsordata["leve"];
$levfmu=$sponsordata["levf"];
$levgmu=$sponsordata["levg"];
$levhmu=$sponsordata["levh"];
$levimu=$sponsordata["levi"];
$levjmu=$sponsordata["levj"];




//*********************************************************************************
// PH SETTING
//*********************************************************************************

$phsett=mysql_fetch_array(mysql_query("select * from settph where id='1'"));
$phname=$phsett["nama"];
$rphname=$phsett["rphname"];
$skph=$phsett["singkatan"];
$minph=$phsett["minph"];
$maxph=$phsett["maxph"];
$dpph=$phsett["dp"];
$feeadmin=$phsett["jmldp"] / 100;
$tiketph=$phsett["tiket"];
$jtiketph=$phsett["jmltiket"];
$lockph=$phsett["lockph"] * 3600;
$profitph=$phsett["profit"] / 100;
$releaseph=$phsett["releasedate"] * 86400;
$durasiph=$phsett["durasi"];
$selesaiph=$phsett["durasi"] * 86400;
$phon=$phsett["status"];
$strph=$phsett["statr"];
$expph=$phsett["expph"] * 3600;
$expdp=$phsett["expdp"] * 3600;


//*********************************************************************************
// GH SETTING
//*********************************************************************************

$ghsett=mysql_fetch_array(mysql_query("select * from settgh where id='1'"));
$ghname=$ghsett["nama"];
$skgh=$ghsett["singkatan"];
$mingh=$ghsett["mingh"];
$maxgh=$ghsett["maxgh"];
$tiketgh=$ghsett["tiket"];
$jtiketgh=$ghsett["jmltiket"];
$lockgh=$ghsett["lockgh"] * 3600;
$ghon=$ghsett["status"];


//*********************************************************************************
// GR SETTING
//*********************************************************************************

$bhsett=mysql_fetch_array(mysql_query("select * from settbonus where id='1'"));
$ghbname=$bhsett["nama"];
$skghb=$bhsett["singkatan"];
$minghb=$bhsett["minbh"];
$maxghb=$bhsett["maxbh"];
$tiketghb=$bhsett["tiket"];
$jtiketghb=$bhsett["jmltiket"];
$lockghb=$bhsett["lockbh"] * 3600;
$ghbon=$bhsett["status"];
$terminghb=$bhsett["everyday"];



//*********************************************************************************
// PROFIT SETTING
//*********************************************************************************

$profitsett=mysql_fetch_array(mysql_query("select * from settprofit where id='1'"));
$komisisponsor=$profitsett["sponsor"] / 100;
$komisilevel1=$profitsett["level1"] / 100;
$komisilevel2=$profitsett["level2"] / 100;
$komisilevel3=$profitsett["level3"] / 100;
$komisilevel4=$profitsett["level4"] / 100;
$komisilevel5=$profitsett["level5"] / 100;
$komisilevel6=$profitsett["level6"] / 100;
$komisilevel7=$profitsett["level7"] / 100;
$komisilevel8=$profitsett["level8"] / 100;
$komisilevel9=$profitsett["level9"] / 100;
$komisilevel10=$profitsett["level10"] / 100;
$komisimanager1=$profitsett["manager1"] / 100;
$komisimanager2=$profitsett["manager2"] / 100;
$komisimanager3=$profitsett["manager3"] / 100;
$komisimanager4=$profitsett["manager4"] / 100;
$komisimanager5=$profitsett["manager5"] / 100;
$komisimanager6=$profitsett["manager6"] / 100;
$komisimanager7=$profitsett["manager7"] / 100;
$komisimanager8=$profitsett["manager8"] / 100;
$komisimanager9=$profitsett["manager9"] / 100;
$komisimanager10=$profitsett["manager10"] / 100;


//*********************************************************************************
// LOCK SETTING
//*********************************************************************************


mysql_query("UPDATE tb_ph SET status='pending' WHERE lockph < '$eltiempo' and status='dikunci'") or die(mysql_error());
mysql_query("UPDATE tb_gh SET status='pending' WHERE lockgh < '$eltiempo' and status='dikunci'") or die(mysql_error());



//*********************************************************************************
// PAIRING SETTING
//*********************************************************************************

if($pairingsistem == "1"){

$skrg=time();
$tablaz = mysql_query("SELECT * FROM tb_gh where saldo >'0' and status='pending' order by id ASC limit 0,1"); 
while ($registroz = mysql_fetch_array($tablaz)) { 
$kurirz=$registroz["username"];
$biayaz=$registroz["saldo"];
$idnyaz=$registroz["id"];
$bankeem=$registroz["bank"];
$norekeem=$registroz["norek"];
$bitcoineem=$registroz["bitcoin"];
$pmeem=$registroz["perfectmoney"];
$fasapayeem=$registroz["fasapay"];
$namaeem=$registroz["nama"];
$phoneeem=$registroz["phone"];
$emaileem=$registroz["email"];
$paketzeem=$biayaz*$pecahan;
$surabaya=$paketzeem/$pecahan;

$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;


$tabla = mysql_query("SELECT * FROM tb_ph where status='pending' and username!='$kurirz' and saldo > '0' ORDER by rand() limit 0,1"); 
while ($registro = mysql_fetch_array($tabla)) { 
$kuriree=$registro["username"];
$biayaee=$registro["saldo"];
$idnyaee=$registro["id"];
$bankee=$registro["bank"];
$norekee=$registro["norek"];
$bitcoinee=$registro["bitcoin"];
$pmee=$registro["perfectmoney"];
$fasapayee=$registro["fasapay"];
$namaee=$registro["nama"];
$phoneee=$registro["phone"];
$emailee=$registro["email"];
$mangkosim=$registro["upline"];
$paketzee=$biayaee*$pecahan;
$surabayae=$paketzee/$pecahan;
if($biayaee > $biayaz){ $hasileksekusi="0";} else 
if($biayaee < $biayaz){ $hasileksekusi="1";} else 
if($biayaee == $biayaz){ $hasileksekusi="2";} 
$da=date("m");
$daek = date("j");
$waktutt=$expph;
$eltiempo=time();
$exp=$eltiempo+$waktutt;
$dilockezqee=$lockph;
$unikee=rand(111,999);

function acakwedok($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$unikeef=acakwedok(12);

$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc2=$paketzee / $rate;

if($hasileksekusi == "0"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzeem', '$surabaya', '$convertbtc1', '$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysql_query($queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay,  paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzeem', '$surabaya', '$convertbtc1','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysql_query($queryteryokedi);

mysql_query("UPDATE tb_ph SET saldo=saldo-'$surabaya' where id='$idnyaee' ") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo-'$surabaya' where id='$idnyaz'") or die(mysql_error());
} else

if($hasileksekusi == "1"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang', '$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysql_query($queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysql_query($queryteryokedi);

mysql_query("UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysql_error());

} else

if($hasileksekusi == "2"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysql_query($queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysql_query($queryteryokedi);

mysql_query("UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysql_error());

}
else {}
}}}

else {

if($pairingsistem == "2"){

$skrg=time();
$tablaz = mysql_query("SELECT * FROM tb_gh where saldo >'0' and status='pending' order by rand() limit 0,1"); 
while ($registroz = mysql_fetch_array($tablaz)) { 
$kurirz=$registroz["username"];
$biayaz=$registroz["saldo"];
$idnyaz=$registroz["id"];
$bankeem=$registroz["bank"];
$norekeem=$registroz["norek"];
$bitcoineem=$registroz["bitcoin"];
$pmeem=$registroz["perfectmoney"];
$fasapayeem=$registroz["fasapay"];
$namaeem=$registroz["nama"];
$phoneeem=$registroz["phone"];
$emaileem=$registroz["email"];
$paketzeem=$biayaz*$pecahan;
$surabaya=$paketzeem/$pecahan;
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$tabla = mysql_query("SELECT * FROM tb_ph where status='pending' and username!='$kurirz' and saldo > '0' ORDER by rand() limit 0,1"); 
while ($registro = mysql_fetch_array($tabla)) { 
$kuriree=$registro["username"];
$biayaee=$registro["saldo"];
$idnyaee=$registro["id"];
$bankee=$registro["bank"];
$norekee=$registro["norek"];
$bitcoinee=$registro["bitcoin"];
$pmee=$registro["perfectmoney"];
$fasapayee=$registro["fasapay"];
$namaee=$registro["nama"];
$phoneee=$registro["phone"];
$emailee=$registro["email"];
$mangkosim=$registro["upline"];
$paketzee=$biayaee*$pecahan;
$surabayae=$paketzee/$pecahan;
if($biayaee > $biayaz){ $hasileksekusi="0";} else 
if($biayaee < $biayaz){ $hasileksekusi="1";} else 
if($biayaee == $biayaz){ $hasileksekusi="2";} 
$da=date("m");
$daek = date("j");
$waktutt=$expph;
$eltiempo=time();
$exp=$eltiempo+$waktutt;
$dilockezqee=$lockph;
$unikee=rand(111,999);

function acakwedok($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$unikeef=acakwedok(12);

$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc2=$paketzee / $rate;

if($hasileksekusi == "0"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzeem', '$surabaya', '$convertbtc1','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysql_query($queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay,  paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzeem', '$surabaya', '$convertbtc1','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysql_query($queryteryokedi);

mysql_query("UPDATE tb_ph SET saldo=saldo-'$surabaya' where id='$idnyaee' ") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo-'$surabaya' where id='$idnyaz'") or die(mysql_error());
} else

if($hasileksekusi == "1"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang', '$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysql_query($queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysql_query($queryteryokedi);

mysql_query("UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysql_error());

} else

if($hasileksekusi == "2"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysql_query($queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysql_query($queryteryokedi);

mysql_query("UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysql_error());

}
else {}
}}}

}



//*********************************************************************************
// EXPIRED DONT TRANSFER AND REMATCH SETTING
//*********************************************************************************


$skrg=time();
$queryf="select * from tb_beli where exp < '$skrg' and exp != '' and referer !='' and iddb !='' and konfirmasi !='1' and status='pending'";
$result=mysql_query($queryf);
while ($rowf=mysql_fetch_array($result)) {
$namaibubu=$rowf["username"];
$idbubu=$rowf["id"];
$idkolbu=$rowf["iddb"];
$namaibuku=$rowf["referer"];
$saldoph=$rowf["saldo"];
mysql_query("UPDATE tb_users SET suspend='1' WHERE username='$namaibubu'") or die(mysql_error());
mysql_query("UPDATE tb_ph SET status='problem',  saldo=saldo+'$saldoph' WHERE username='$namaibubu' and status='pending'") or die(mysql_error());
mysql_query("UPDATE tb_gh SET saldo=saldo+'$saldoph' WHERE username='$namaibuku' and status='pending'") or die(mysql_error());
mysql_query("UPDATE tb_jual SET status='problem' WHERE id='$idkolbu'") or die(mysql_error());
mysql_query("UPDATE tb_beli SET status='problem', reason='Time Out' WHERE id='$idbubu'") or die(mysql_error());
}






//*********************************************************************************
// SENT PROFIT UPLINE AND MANAGER SETTING
//*********************************************************************************


$skrg=time();
$probesok=$skrg + 86400;
$queryfqgggg="select * from tb_ph where saldo='0' and sisa='0' and status='pending' and eksekusi!='1'";
$resultgggg=mysql_query($queryfqgggg);
while ($rowfgggg=mysql_fetch_array($resultgggg)) {
$idbuqqgggg=$rowfgggg["id"];
$userphjang=$rowfgggg["username"];
$uplph=$rowfgggg["upline"];
$pakeat=$rowfgggg["paket"];
$paketphjang=$rowfgggg["paket"];
$bonusphjang=$rowfgggg["bonus"];

$yhkmncui="select * from settprofit where id='1'";
$axzvvbtgm=mysql_query($yhkmncui);
$ncxrygk=mysql_fetch_array($axzvvbtgm);
$komdaily=$ncxrygk["daily"];
$komisidaily=$ncxrygk["daily"] / 100;
$jmlprofit=$ncxrygk["releasedate"];


$komgrl1=$pakeat * $komisimanager1; 
$komgrl2=$pakeat * $komisimanager2;
$komgrl3=$pakeat * $komisimanager3;
$komgrl4=$pakeat * $komisimanager4;
$komgrl5=$pakeat * $komisimanager5;
$komgrl6=$pakeat * $komisimanager6; 
$komgrl7=$pakeat * $komisimanager7;
$komgrl8=$pakeat * $komisimanager8;
$komgrl9=$pakeat * $komisimanager9;
$komgrl10=$pakeat * $komisimanager10;
$komspoleo=$pakeat * $komisisponsor;
$komlev1leo=$pakeat * $komisilevel1;
$komlev2leo=$pakeat * $komisilevel2;
$komlev3leo=$pakeat * $komisilevel3;
$komlev4leo=$pakeat * $komisilevel4;
$komlev5leo=$pakeat * $komisilevel5;
$komlev6leo=$pakeat * $komisilevel6;
$komlev7leo=$pakeat * $komisilevel7;
$komlev8leo=$pakeat * $komisilevel8;
$komlev9leo=$pakeat * $komisilevel9;
$komlev10leo=$pakeat * $komisilevel10;


$queryleo="select * from tb_users where username='$userphjang'";
$resultleo=mysql_query($queryleo);
$rowleox=mysql_fetch_array($resultleo);
$sponsorleo=$rowleox["referer"];
$levxa=$rowleox["leva"];
$levxb=$rowleox["levb"];
$levxc=$rowleox["levc"];
$levxd=$rowleox["levd"];
$levxe=$rowleox["leve"];
$levxf=$rowleox["levf"];
$levxg=$rowleox["levg"];
$levxh=$rowleox["levh"];
$levxi=$rowleox["levi"];
$levxj=$rowleox["levj"];


$queryleou="select * from tb_users where username='$sponsorleo'";
$resultleou=mysql_query($queryleou);
$rowleou=mysql_fetch_array($resultleou);
$lev1leo=$rowleou["leva"];
$lev2leo=$rowleou["levb"];
$lev3leo=$rowleou["levc"];
$lev4leo=$rowleou["levd"];
$lev5leo=$rowleou["leve"];
$lev6leo=$rowleou["levf"];
$lev7leo=$rowleou["levg"];
$lev8leo=$rowleou["levh"];
$lev9leo=$rowleou["levi"];
$lev10leo=$rowleou["levj"];

$queryleos="select * from tb_users where username='$levxa'";
$resultleos=mysql_query($queryleos);
$rowleos=mysql_fetch_array($resultleos);
$managerga=$rowleos["manager"];
if($managerga=='1'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komgrl1' WHERE username='$levxa'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$levxa', 'Manager 1 Commission PH User $userphjang', '$paketphjang','$komgrl1','$eltiempo','$laip' )";
mysql_query($query);
} else {}


$queryleosb="select * from tb_users where username='$levxb'";
$resultleosb=mysql_query($queryleosb);
$rowleosb=mysql_fetch_array($resultleosb);
$managergab=$rowleosb["manager"];
if($managergab=='1'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komgrl2' WHERE username='$levxb'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$levxb', 'Manager 2 Commission PH User $userphjang', '$paketphjang','$komgrl2','$eltiempo','$laip' )";
mysql_query($query);
} else {}

$queryleosc="select * from tb_users where username='$levxc'";
$resultleosc=mysql_query($queryleosc);
$rowleosc=mysql_fetch_array($resultleosc);
$managergac=$rowleosc["manager"];
if($managergac=='1'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komgrl3' WHERE username='$levxc'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$levxc', 'Manager 3 Commission PH User $userphjang', '$paketphjang','$komgrl3','$eltiempo','$laip' )";
mysql_query($query);
} else {}

$queryleosd="select * from tb_users where username='$levxd'";
$resultleosd=mysql_query($queryleosd);
$rowleosd=mysql_fetch_array($resultleosd);
$managergad=$rowleosd["manager"];
if($managergad=='1'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komgrl4' WHERE username='$levxd'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$levxd', 'Manager 4 Commission PH User $userphjang', '$paketphjang','$komgrl4','$eltiempo','$laip' )";
mysql_query($query);
} else {}

$queryleose="select * from tb_users where username='$levxe'";
$resultleose=mysql_query($queryleose);
$rowleose=mysql_fetch_array($resultleose);
$managergae=$rowleose["manager"];
if($managergae=='1'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komgrl5' WHERE username='$levxe'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$levxe', 'Manager 5 Commission PH User $userphjang', '$paketphjang','$komgrl5','$eltiempo','$laip' )";
mysql_query($query);
} else {}


if($sponsorleo!=''){
if($komspoleo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komspoleo' WHERE username='$sponsorleo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Sponsor Commission PH User $userphjang', '$paketphjang','$komspoleo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}


if($lev1leo!=''){
if($komlev1leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev1leo' WHERE username='$lev1leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev1leo', 'Lev 1 Commission PH User $userphjang', '$paketphjang','$komlev1leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev2leo!=''){
if($komlev2leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev2leo' WHERE username='$lev2leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev2leo', 'Lev 2 Commission PH User $userphjang', '$paketphjang','$komlev2leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev3leo!=''){
if($komlev3leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev3leo' WHERE username='$lev3leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev3leo', 'Lev 3 Commission PH User $userphjang', '$paketphjang','$komlev3leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev4leo!=''){
if($komlev4leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev4leo' WHERE username='$lev4leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev1leo', 'Lev 4 Commission PH User $userphjang', '$paketphjang','$komlev4leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev5leo!=''){
if($komlev5leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev5leo' WHERE username='$lev5leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev5leo', 'Lev 5 Commission PH User $userphjang', '$paketphjang','$komlev5leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev6leo!=''){
if($komlev6leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev6leo' WHERE username='$lev6leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev6leo', 'Lev 6 Commission PH User $userphjang', '$paketphjang','$komlev6leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev7leo!=''){
if($komlev7leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev7leo' WHERE username='$lev7leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev7leo', 'Lev 7 Commission PH User $userphjang', '$paketphjang','$komlev7leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev8leo!=''){
if($komlev8leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev8leo' WHERE username='$lev8leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev8leo', 'Lev 8 Commission PH User $userphjang', '$paketphjang','$komlev8leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev9leo!=''){
if($komlev9leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev9leo' WHERE username='$lev9leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev9leo', 'Lev 9 Commission PH User $userphjang', '$paketphjang','$komlev9leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}

if($lev10leo!=''){
if($komlev10leo!='0'){
mysql_query("UPDATE tb_users SET moneys=moneys+'$komlev10leo' WHERE username='$lev10leo'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev10leo', 'Lev 10 Commission PH User $userphjang', '$paketphjang','$komlev10leo','$eltiempo','$laip' )";
mysql_query($query);
} else {}
} else {}


mysql_query("UPDATE tb_ph SET status='sukses', statusprofit='aktif', verify='$eltiempo', eksekusi='1' WHERE id='$idbuqqgggg'") or die(mysql_error());
}




//*********************************************************************************
// RELEASE DATE GH
//*********************************************************************************

$skrg=time();
$nextprofku=$skrg + 86400;
$queryfqgggg="select * from tb_ph where status='sukses' and kapangh < '$skrg' and refund='0'";
$resultgggg=mysql_query($queryfqgggg);
while ($rowfgggg=mysql_fetch_array($resultgggg)) {
$idy=$rowfgggg["id"];
$usery=$rowfgggg["username"];
$namaly=$rowfgggg["namalengkap"];
$banky=$rowfgggg["bank"];
$noreky=$rowfgggg["norek"];
$namay=$rowfgggg["nama"];
$btcy=$rowfgggg["bitcoin"];
$payeery=$rowfgggg["payeer"];
$pmy=$rowfgggg["perfectmoney"];
$pakety=$rowfgggg["paket"];
$phoney=$rowfgggg["phone"];
$bbmy=$rowfgggg["bbm"];
$emaily=$rowfgggg["email"];

mysql_query("UPDATE tb_users SET money=money+'$pakety' WHERE username='$usery'") or die(mysql_error());
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$usery', 'ReleaseDate', '$pakety','$pakety','$eltiempo','$laip' )";
mysql_query($query);
mysql_query("UPDATE tb_ph SET readygh='$pakety', refund='1' where id='$idy'") or die(mysql_error());
}


//*********************************************************************************
// DAILY PROFIT PH REQUEST
//*********************************************************************************

$skrg=time();
$nextprofku=$skrg + 86400;
$queryfqgggg="select * from tb_ph where totalprofit > '0'  and cekharian < '$skrg' and paksaharian='0' and getprofit='0'";
$resultgggg=mysql_query($queryfqgggg);
while ($rowfgggg=mysql_fetch_array($resultgggg)) {
$idy=$rowfgggg["id"];
$dailyprofit=$rowfgggg["profit"];
mysql_query("UPDATE tb_ph SET totalprofit=totalprofit - '1', cekharian='$nextprofku', harian=harian + '1', readygh=readygh + '$dailyprofit' WHERE id='$idy'") or die(mysql_error());
}



//*********************************************************************************
// PH FINISH SETTING 
//*********************************************************************************

$skrg=time();
$nextprofku=$skrg + 86400;
$queryfqgggg="select * from tb_ph where status='sukses' and statusprofit='aktif' and totalprofit ='0' and getbonus='0'";
$resultgggg=mysql_query($queryfqgggg);
while ($rowfgggg=mysql_fetch_array($resultgggg)) {
$idbuqqgggg=$rowfgggg["id"];
$userphjang=$rowfgggg["username"];
$paketphjang=$rowfgggg["paket"];
$profitphjang=$rowfgggg["profit"];
$profitphke=$rowfgggg["totalprofit"];
$bonusphjang=$rowfgggg["bonus"];
mysql_query("UPDATE tb_ph SET statusprofit='selesai', getbonus='1', paksaharian='1' where id='$idbuqqgggg'") or die(mysql_error());
}




//*********************************************************************************
// GH PRINCIPAL FINISH SETTING
//*********************************************************************************

$queryyu="select * from tb_gh WHERE saldo='0' and sisa='0' and status='pending' and jenis='1' and autoph='0'";
$resultgggg=mysql_query($queryyu);
while ($rowyuyu=mysql_fetch_array($resultgggg)) {
$idyu=$rowyuyu["id"];
$token=$rowyuyu["token"];
$expiredrf=$eltiempo + $expdp;
$expired=$eltiempo + $expph;
$skrg=time();
$nextprofku=$skrg + 86400;
mysql_query("UPDATE tb_fee SET status='pending', exp='$expiredrf' WHERE token='$token' and jenis='2'") or die(mysql_error());
mysql_query("UPDATE tb_ph SET status='pending', harian='1', cekharian='$nextprofku', totalprofit=totalprofit-'1' WHERE token='$token' and jenis='3'") or die(mysql_error());
mysql_query("UPDATE tb_gh SET status='sukses', autoph='1' WHERE id='$idyu'") or die(mysql_error());
}




//*********************************************************************************
// GH PROFIT AND REWARD FINISH SETTING
//*********************************************************************************

$queryyu="select * from tb_gh WHERE saldo='0' and sisa='0' and status='pending' and jenis='3' and autoph='0'";
$resultgggg=mysql_query($queryyu);
while ($rowyuyu=mysql_fetch_array($resultgggg)) {
$idyu=$rowyuyu["id"];
$token=$rowyuyu["token"];
$expiredrf=$eltiempo + $expdp;
mysql_query("UPDATE tb_gh SET status='sukses', autoph='1' WHERE id='$idyu'") or die(mysql_error());
}



//*********************************************************************************
// AUTO PH GH PROFIT
//*********************************************************************************

$queryyu="select * from tb_gh WHERE saldo='0' and sisa='0' and status='pending' and jenis='2' and autoph='0'";
$resultgggg=mysql_query($queryyu);
while ($rowyuyu=mysql_fetch_array($resultgggg)) {
$idyu=$rowyuyu["id"];
$token=$rowyuyu["token"];
$expiredrf=$eltiempo + $expdp;
$expired=$eltiempo + $expph;
$skrg=time();
$nextprofku=$skrg + 86400;
mysql_query("UPDATE tb_ph SET status='pending', harian='1', cekharian='$nextprofku', totalprofit=totalprofit-'1' WHERE token='$token' and jenis='2'") or die(mysql_error());
mysql_query("UPDATE tb_gh SET status='sukses', autoph='1' WHERE id='$idyu'") or die(mysql_error());
}




?>