<?
$dhost = "localhost"; // Isi dengan localhost
$dusername = "root"; // database user
$dpassword = ""; // database pass
$ddatabase = "mmcm"; // database name
date_default_timezone_set("Africa/Lagos");
error_reporting(0);

$con = mysql_connect($dhost, $dusername, $dpassword) or die("Cannot Connect"); 
mysql_select_db($ddatabase, $con);



if($_COOKIE["username"] and $_COOKIE["password"])
{
$q = mysql_query("SELECT * FROM tb_users WHERE username='{$_COOKIE['username']}' AND password='{$_COOKIE['password']}'") or die(mysql_error());
if(mysql_num_rows($q) == 0)
{
$_COOKIE['username'] = false;
$_COOKIE['password'] = false;
} else {
$loggedin = 1;
$r = mysql_fetch_array($q);
}
}


if($_COOKIE["useradmin"] and $_COOKIE["passadmin"])
{
$q = mysql_query("SELECT * FROM settweb WHERE username='{$_COOKIE['useradmin']}' AND password='{$_COOKIE['passadmin']}'") or die(mysql_error());
if(mysql_num_rows($q) == 0)
{
$_COOKIE['useradmin'] = false;
$_COOKIE['passadmin'] = false;
} else {
$loggedin = 1;
}
}

$relphstat=mysql_query("select * from settph where id='1'");
$relphstatz=mysql_fetch_array($relphstat);
$relphstaty=$relphstatz['releasedate'];

$relphstats=mysql_query("select * from settweb where id='1'");
$relphstatzs=mysql_fetch_array($relphstats);
$relphstatys=$relphstatzs['siname'];
$relphstatyse=$relphstatzs['email'];

$siname=$relphstatys;
$suname=$relphstatyse;


$statrei="select * from settph where id='1'";
$statresi=mysql_query($statrei) or die(mysql_error());
$statrei=mysql_fetch_array($statresi);
$statredi=$statrei['statr'];



?>