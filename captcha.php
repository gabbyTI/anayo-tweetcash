<?php
session_start();
header("Content-type: image/jpg");
//generate Code
function RandomCode($max){
//Huruf dan angka yang akan di acak
$char = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y",
			  "Z","1","2","3","4","5","6","7","8","9");
$keys = array();
while(count($keys) < $max) {
    $x = mt_rand(0, count($char)-1);
    if(!in_array($x, $keys)) {
       $keys[] = $x;   
    }		
}
$random='';
foreach($keys as $key => $val){
   $random .= $char[$val];  
}
return $random;
}
$font='./font/VeraMoBd.ttf'; //setting font yang akan digunakan
$images='./images/bgc.jpg'; //gambar yang akan digunakan sebagai background
$im = imagecreatefromjpeg("$images")or die("Cannot Initialize new GD image stream");
$text_color = imagecolorallocate($im, 0, 0, 0); //menentukan warna text
//Generate kode yang akan dituliskan pada gambar sebanyak 6
$text=RandomCode(6);
//Buat sessi untuk pengecekan pada halaman lain
$_SESSION['captcha']=$text;
//Tuliskan text pada gambar
imagettftext($im, 15, 0, 12, 23, $text_color, $font, $text);
imagejpeg($im);
imagedestroy($im);
?>