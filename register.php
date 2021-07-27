<? 
include ("header.php");


$statregp="select * from settweb where id='1'";
$statresgp=mysql_query($statregp) or die(mysql_error());
$statregp=mysql_fetch_array($statresgp);
$regpack=$statregp['regpack'];

?>
<?

if($_GET['r'] and !$_SESSION['r']) { $_SESSION['r'] = $_GET['r']; }
if(($_SESSION['r'] and !$_GET['r']) or (($_SESSION['r'] and $_GET['r']) and $_GET['r'] != $_SESSION['r'])) { $_GET['r'] = $_SESSION['r']; }
$title="JOIN US";
?>


<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding mbr-after-navbar" id="msg-box1-k" style="background-color: rgb(242, 242, 242); padding-top: 90px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">


            


            <div class="mbr-table-md-up">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                    <h2 class="mbr-info-subtitle mbr-section-subtitle"></h2>
                    <h3 class="mbr-info-title mbr-section-title display-2">FILL THE FORM TO REGISTER OR LOGIN</h3>
                </div>

                <div class="mbr-table-cell col-md-4">
                    <div class="text-xs-center"><a class="btn btn-primary" href="login.php">LOGIN</a></div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="mbr-section mbr-parallax-background" id="content5-l" style="background-image: url(assets/images/desert2.jpg); padding-top: 0px; padding-bottom: 0px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <h3 class="mbr-section-title display-2">IMPORTANT</h3>
        <div class="lead"><p>Please Note that it is important to have your money available and be able to do online transfer before you participate in this social community. <? echo $siname ?><span style="font-size: 1.07rem; line-height: 1.5;">&nbsp;is passionately commited to the longevity of this social community of givers. Therefore we have put strict measures in place to largely prevent abuse of this social platform and ensure genuine participants enjoy lifetime rewards on every investment.</span></p></div>
    </div>
            </div>
        </div>
            
            
            
            			
		</div>

</section>

<section class="mbr-section mbr-parallax-background" id="content5-l" style="background-image: url(assets/images/jumbotron.jpg); padding-top: 0px; padding-bottom: 0px;">

</div>
<?

    if ($registeren==1)
{
    ?>

<div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" 
<div id="notify" style="text-align:center">
</div>
            
            <div class="regform">				
					<form action="register.php" method="post">
                    

<?
if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
{
?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=coin/index.php">
<?
exit();
}
?>


<?
if ($_POST) {
$username = saiful($_POST["username"]);
$email = saiful($_POST["email"]);
$phone = saiful($_POST["phone"]);
$referer = saiful($_POST["referer"]);
$password = saiful($_POST["password"]);
$pass=md5($password); 
$aktifasi=md5($email.time()); // encrypted email+timestamp

$namalengkap = saiful($_POST["namalengkap"]);

$bank = saiful($_POST["bank"]);
$norek = saiful($_POST["norek"]);
$nama = saiful($_POST["namalengkap"]);
$type = saiful($_POST["type"]);

$perfectmoney = saiful($_POST["perfectmoney"]);
$bitcoin = saiful($_POST["bitcoin"]);
$payeer = saiful($_POST["payeer"]);

$alamat = saiful($_POST["alamat"]);
$kota = saiful($_POST["kota"]);
$country = saiful($_POST["country"]);
$kodepos = saiful($_POST["kodepos"]);



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

$profitnya= $paket * $profitph;
$semuaprofit = $profitnya * $durasiph;

$lockphnya = $eltiempo + $lockph;
$expiredrf=$eltiempo + $expdp;
$waktughnya=$eltiempo + $selesaiph;
$minwaktugh=$eltiempo + $releaseph;

$unik=rand(111,999);
$uniktoken=acakAngkaHuruf1(30);
$uniktrx=acakAngkaHuruf2(8);



if($_POST['captcha'] != $_SESSION['captcha']){
$error = 1;
$errormsg= "<b>Error -</b> Captcha Wrong<br />";
}

if(!$username)
{
$error = 1;
$errormsg .= "<p><b>Error -</b> Input Your username.</p>";
}

if(!$country)
{
$error = 1;
$errormsg .= "<p><b>Error -</b> Country Of Residence Not Selected.</p>";
}


if($paket < $minph){
$error = 1;
$errormsg .= "<p><b>Sorry, Amount Not Enough to request registration !</b><br>
Minimum $skph is $matauang $minph</p>";
}


if(!$email)
{
$error = 1;
$errormsg .= "<p><b>Error -</b> Input Your Email</p>";
}

if(!$phone)
{
$error = 1;
$errormsg .= "<p><b>Error -</b> Input Your phone</p>";
}




if(!$password)
{
$error = 1;
$errormsg .= "<p><b>Error -</b> Input Your Password</p>";
}


$checkuser = mysql_query("SELECT username FROM tb_users WHERE username='$username'");
$username_exist = mysql_num_rows($checkuser);

$checkphone = mysql_query("SELECT phone FROM tb_users WHERE phone='$phone'");
$phone_exist = mysql_num_rows($checkphone);

$checkemail = mysql_query("SELECT email FROM tb_users WHERE email='$email'");
$email_exist = mysql_num_rows($checkemail);



if($username_exist>0) {
$error = 1;
$errormsg .= "<p><b>Error -</b> Username Exist</p>";
}


if($email_exist >= $maxemail) {
$error = 1;
$errormsg .= "<p><b>Error -</b> Max 1 Email for $maxemail account</p>";
}


if($phone_exist >= $maxhp) {
$error = 1;
$errormsg .= "<p><b>Error -</b> Max 1 Phone Number for $maxhp Account</p>";
}




$checkref = mysql_query("SELECT username FROM tb_users WHERE username='$referer'");
$referer_exist = mysql_num_rows($checkref);

if ($referer_exist<1 and $_POST['referer'] != "") 
{
$error = 1;
$errormsg .= "<p><b>Error -</b>Upline Username Wrong.</p>";
}

if($error == 1)
{
print $errormsg;
} else {

if ($_POST["referer"] != "") {
$checkref = mysql_query("SELECT username FROM tb_users WHERE username='$referer'");
$referer_exist = mysql_num_rows($checkref);

if ($referer_exist>0) {
      $sqlz = "SELECT * FROM tb_users WHERE username='$referer'";
      $resultz = mysql_query($sqlz);        
      $myrowz = mysql_fetch_array($resultz);
$numero=$myrowz["referals"];

      $sqlex = "UPDATE tb_users SET referals='$numero'+1 WHERE username='$referer'";
      $resultex = mysql_query($sqlex);
}
}

$joindate=time();
$laip = $_SERVER['REMOTE_ADDR'];


$qqr="select * from tb_users WHERE username='$referer'";
$hslqr=mysql_query($qqr) or die(mysql_error());
$qqr=mysql_fetch_array($hslqr);
$koy=$qqr["leva"];
$koyr=$qqr["levb"];
$koyrr=$qqr["levc"];
$koyrrr=$qqr["levd"];
$koyrrrr=$qqr["leve"];
$koyrrrrr=$qqr["levf"];
$koyrrrrrr=$qqr["levg"];
$koyrrrrrrr=$qqr["levh"];
$koyrrrrrrrr=$qqr["levi"];
$koyrrrrrrrrr=$qqr["levj"];

function acakwsaifuleh($panjang)
{
	$karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}

$aktifasi=acakwsaifuleh(30);

function acakwsaifule2($panjang)
{
	$karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$codeacx=acakwsaifule2(20);


$query = "INSERT INTO tb_users (username, password, ip, email, bank, norek, nama, namalengkap, bitcoin, payeer, perfectmoney, alamat, kota, country, kodepos, 
phone, referer, joindate, money, moneys, avatar, leva, levb, levc, levd, leve, levf, levg, levh, levi, levj) 
VALUES('$username','$pass','$laip','$email','$bank','$norek','$namalengkap','$namalengkap', '$bitcoin','$payeer', '$perfectmoney', '$alamat', '$kota', '$country', '$kodepos', 
'$phone','$referer','$joindate', '0', '0', '', '$referer', '$koy', '$koyr',  '$koyrr',  '$koyrrr',  '$koyrrrr',  '$koyrrrrr',  '$koyrrrrrr',  '$koyrrrrrrr',  '$koyrrrrrrrr')";
mysql_query($query) or die(mysql_error());



$skrg=time();
$nextprofku=$skrg + 86400;
$profitkuz=$durasiph;
$querytery = "INSERT INTO tb_ph (idtrx, username, namalengkap, bank, norek, nama, bitcoin, perfectmoney, payeer, ec, paket, saldo, sisa,  feeadmin, phone, email, bbm, status, profit, dpro, date, ip, unik, asal,  upline, leva, levb, levc, levd, leve, levf, levg, levh, levi, levj, token, hari, minggu, bulan, tahun, lockph, jenis, kapangh, readygh, totalprofit, harian, cekharian) 
VALUES('$uniktrx', '$username','$namalengkap','$bank','$norek','$namalengkap','$bitcoin', '$pm','$payeer', '$ec', '$paket', '$paket', '$paket', '0', '$phone', '$email', '$bbm', 'dikunci', '$profitnya', '$waktughnya', '$eltiempo', '$laip','$unik', 'PH Manual', '$sponsorku', '$koy', '$koyr', '$koyrr', '$koyrrr', '$koyrrrr', '$koyrrrrr', '$koyrrrrrr', '$koyrrrrrrr', '$koyrrrrrrrr', '$koyrrrrrrrrr', '$uniktoken','$hari', '$minggu', '$bulan', '$tahun', '$lockphnya','1','$minwaktugh','0','$profitkuz','','$nextprofku')";
mysql_query($querytery) or die(mysql_error());

mysql_query("UPDATE tb_users SET phawal='$paket', lastph='$paket' where username='$username'") or die(mysql_error());




$to = $email; 
$subject = "Welcome to ". $namaweb ."";
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
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Welcome to {$namaweb}</div>
    <br />

Welcome to {$namaweb}.<br />
Please find your login details below.<br />
<br />
Email: <b>{$email}</b><br />
Username: <b>{$username}</b><br />
Password: <b>{$password}</b><br />
Phone: <b>{$phone}</b><br />
Upline: <b>{$referer}</b><br />
<br />

Support {$namaweb}<br />
</div></BODY></HTML>";


    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '';

    } else{

        echo '';

    }

    



$tabla = mysql_query("SELECT * FROM tb_users where username='$referer'");
while ($registro = mysql_fetch_array($tabla)) {
$s1 = $registro["email"];
$z1 = $registro["nama"];
$zz1 = $registro["phone"];


$to = $s1; 
$subject = "Get New Downline ". $namaweb ."";
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
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Welcome to {$namaweb}</div>
    <br />

Welcome to {$namaweb}.<br />
Congratulation! You Got new downline.<br />
<br />
Email: <b>{$email}</b><br />
Username: <b>{$username}</b><br />
Phone: <b>{$phone}</b><br />


<br><br>
Support {$namaweb}<br />
</div></BODY></HTML>";


    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '';

    } else{

        echo '';

    }



}


echo "
<div class=\"alert alert-danger text-center\">
<strong>Congratulation!</strong> You Acoount Is Now Registered.  <br>
<a href='login.php'>CLICK HERE TO LOGIN </a>
</div>";

exit();
}
}
?>
   <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-lg-5 col-lg-offset-3">
                    
 <div class="form-group">
</br>
                    <label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" class="form-control" placeholder="Full Name" name="namalengkap" id="namalengkap" required>
					</div>
<div class="form-group">
                    <label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" class="form-control" placeholder="Username" name="username" id="username" required onchange="usernamecheck(this)">
					</div>

                    
                    <div class="form-group">
                    <label>Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" class="form-control" placeholder="Email Address" name="email" id="email" required onchange="emailcheck(this)">
					</div>


<div class="form-group">
                    <label>Country Of Residence</label>
					<select name="country" id="country" required class="form-control">
    <option value="" selected>Select Your Country</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Span">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select>	</div>
                    
                    
                    
 <div class="form-group">
                    <label>Phone Number&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" class="form-control" placeholder="+271234567890" name="phone" id="phone" required onchange="phonecheck(this)">
					</div>
                    
                                        
                    
<div class="form-group">
                    <label>Bitcoin Address</label>
					<input type="text" class="form-control" placeholder="Your Bitcoin Wallet Address" name="bitcoin" id="bitcoin" maxlength="45" required>
					</div>

<?

    if ($regpack==1)
{
    ?>


<div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Enter <? echo($skph) ?>  Amount" name="paket" id="paket" maxlength="45" required>
					</div>
                    
<?
}
?>
                                                     
                    <div class="form-group">
                    <label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
					</div>
                    
<div class="form-group">
                    <label>Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm Password" name="cpass" id="cpass" required>
					</div>
                    
                    
                    <div class="form-group">
                    <label>Referrer</label>
					<input type="text" class="form-control" placeholder="Referrer Username" name="referer" id="referer">
					</div>
                            <div class="form-group">
                            
<img src="coin/captcha.php" />
<br />
 <div class="form-group">
                           
<div class="input-icon right"><input type="text" placeholder="Captcha" name="captcha" class="form-control" required>

            
</div>
<br />


      <div><button type="submit" class="btn btn-success">Register Account</button>
                        
			</div>
            </div></div>

          <a href="login.php" class="btn btn-success btn-block">Login Your Account</a>
                        					</form>
                 </div>

                            </div>
                               </div>
                            
           </br>
            
            
			
		</div>
         <?   }
    else {
        ?>
    <?echo "<font color=\"#cc0000\"><b> <h2><p> REGISTRATION CURRENTLY NOT AVAILABLE.</p></h2></b></font><br><br>"?>
        <?  }                                 

?>
                            

</section>
</div>
<? include ("footer.php");?>
