<? 
function sendSMS($nohp, $teks, $token, $apiname) {
include 'apiconfig.php';
$url = "http://geraisms.com/sendsms.php";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS,'teks='.urlencode($teks).'&nohp='.$nohp.'&token='.$apiKey.'&apiname='.$apiUsername);
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$content = curl_exec($curlHandle);
curl_close($curlHandle);
return $content;
}
?>