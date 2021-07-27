<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
?>

<?

if(!isset($_COOKIE["useradmin"]) && !isset($_COOKIE["passadmin"]))

{
?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=login.php">

<?
exit();

}


 ?>
<?
if($_COOKIE["useradmin"]==$useradmin)
{

}
if($_COOKIE["useradmin"]!=$useradmin)
{

exit();
}



$zzz=mysql_query("select password from settweb where username='$useradmin'");
$zz=mysql_fetch_array($zzz);
$passwd1=$zz["password"];
if ($passwd1 <> $_COOKIE["passadmin"] and $passwd1 <> "")
{

   echo "Server not found";
exit();
}

?>

<?include "head.php";?>
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<br>

<CENTER>


<font face="verdana" size="4">
<b>Member Statistic</b>
</font>
<BR><BR>

<div class="datagrid">
<table class="table table-bordered" width="50%">
<thead><tr>
<th>Description</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr><td>All Member</td><td><center><? echo $allMember ; ?> Member</center></td></tr>
<tr><td>Active Member</td><td><center><? echo $activeMember ; ?> Member</center></td></tr>
<tr><td>Suspend Member</td><td><center><? echo $suspendMember ; ?> Member</center></td></tr>
<tr><td>Manager Member</td><td><center><? echo $allManager ; ?> Member</center></td></tr>
<tr><td>Latest Member</td><td><center><? echo latestMember() ; ?> </center></td></tr>
<tr><td>Latest Member Suspend</td><td><center><? echo latestMemberSuspend() ; ?> </center></td></tr>
<tr><td>Latest Manager</td><td><center><? echo latestManager() ; ?> </center></td></tr>
</table>
</DIV>
</center>
<BR><BR>





<center>
<font face="verdana" size="4">
<b><? echo $phname; ?> Statistic</b>
</font>

<br><br>

<div class="datagrid">
<table class="table table-bordered" width="50%">
<thead><tr>

<th>Descriptions</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr><td>All <? echo $phname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllPh ; ?> </center></td></tr>
<tr><td>Not Pair <? echo $phname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllPhNotpair ; ?> </center></td></tr>
<tr><td>Pending <? echo $phname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllPhPending ; ?> </center></td></tr>
<tr><td>Problem <? echo $phname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllPhProblem ; ?> </center></td></tr>
<tr><td>Success <? echo $phname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllPhSukses ; ?> </center></td></tr>
</table>
</DIV>
</center>

<BR><BR>


<center>
<font face="verdana" size="4">
<b><? echo $ghname; ?> Statistic</b>
</font>

<br><br>

<div class="datagrid">
<table class="table table-bordered" width="50%">
<thead><tr>

<th>Descriptions</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr><td>All <? echo $ghname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllGh ; ?> </center></td></tr>
<tr><td>Not Pair <? echo $ghname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllGhNotpair ; ?> </center></td></tr>
<tr><td>Pending <? echo $ghname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllGhPending ; ?> </center></td></tr>
<tr><td>Problem <? echo $ghname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllGhProblem ; ?> </center></td></tr>
<tr><td>Success <? echo $ghname; ?></td><td><center><? echo $matauang; ?> <? echo $totalAllGhSukses ; ?> </center></td></tr>
</table>
</DIV>
</center>

<BR><BR>


<center>
<font face="verdana" size="4">
<b>WEB BALANCE STATS</b>
</font>
</center>
<br>
<br>
<div class="datagrid">
<table class="table table-bordered" width="50%">
<thead><tr>

<th><? echo $phname; ?> MEMBER</th>
<th><? echo $ghname; ?> MEMBER </th>
<th>BALANCE WEB</th>
</tr>
</thead>
<tbody>

<td><center>
<font face="arial" size="5">
<? echo $matauang; ?>
<? 

			    $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_ph");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];



                             print number_format($standar); ?>

</center>
</td>
<td><center>
<font face="arial" size="5">
<? echo $matauang; ?>  
<? 

			    $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_gh");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];

                             print number_format($standar); ?>

</center>
</td>
<td height="60"><center>
<font face="arial" size="5">
<? echo $matauang; ?> 
<? 
 $standar = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_gh");

                             $standar = mysql_fetch_array($standar);

                             $standar = $standar["jumlah"];


			    $standarx = mysql_query("SELECT SUM(paket) AS jumlah FROM tb_ph");

                             $standarx = mysql_fetch_array($standarx);

                             $standarx = $standarx["jumlah"];
$kekurangan = $standarx-$standar;

                             print number_format($kekurangan); ?>

</center>
</td>
</tr>
</table>
</DIV>
</center>


<?include "foot.php";?>