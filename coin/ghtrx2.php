<? 
$noUrut = 1;
$lole=$_COOKIE["username"];
$tabla = mysql_query("SELECT * FROM tb_beli where referer='$username'"); 
while ($registro = mysql_fetch_array($tabla)) { 
$derix=$registro["id"];
$deriz=$registro["idph"];
$deric=$registro["iddb"];
$namax=$registro["username"];
$bitcoinxox=$registro["bitcoin"];
$emailxox=$registro["email"];
$phonexox=$registro["phone"];
$phonex=$registro["phone"];
$bitcoinx=round($registro["amountbtc"],8);
$tokenx=$registro["token"];
$konf=$registro["konfirmasi"];
$stats=$registro["status"];
$Datex = date('d F Y, H:i',$registro['date']);
$Expx = date('d F Y, H:i',$registro['exp']);
$Datex = date('d F Y, H:i',$registro['date']);
$Expxa = $registro['exp'];
$tablao = mysql_query("SELECT * FROM tb_jual where token='$tokenx'"); 
$registroo = mysql_fetch_array($tablao);
$idjual= $registroo["id"];
$namaxo=$registroo["username"];
$bitcoinxo=$registroo["bitcoin"];
$phonexo=$registroo["phone"];
$emailxo=$registroo["email"];

$tablap = mysql_query("SELECT * FROM tb_gh where id='$deric'"); 
$registrop = mysql_fetch_array($tablap);
$idtrx= $registrop["idtrx"];

if($stats=='pending'){

if($konf=='0'){
$said="Please Contact Your Sender to Transfer";
$saida="img/ok2.png";
$konfp="<a href=\"verify.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Approve</a><a href=\"reject.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Fake POP</a>";
$oketimes="Exp:";
$oketime=$Datex;
} else
if($konf=='1'){
$said="Waiting Approve. Plese check your BTC and approve soon";
$saida="img/ok1.png";
$konfp="<a href=\"verify.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Approve</a><a href=\"reject.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Fake POP</a>";
$oketimes="Exp Approve";
$oketime=$Datexap;
} 
}

if($stats=='sukses'){
if($konf=='0'){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="<a href=\"hgh\" class=\"neoui-greybutton translate\" style=\"float:right;\">Transaction Success!</a>";
} else
if($konf=='1'){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="<a href=\"hgh\" class=\"neoui-greybutton translate\" style=\"float:right;\">Transaction Success!</a>";
} 
}


if($stats=='problem'){
if($konf=='0'){
$said="You Flagged This Transaction As Fake POP, Contact Support";
$saida="img/block.png";
$konfp="<a href=\"#\" class=\"neoui-greybutton translate\" style=\"float:right;\">Flagged Fake POP</a>";
$oketimes="Exp:";
$oketime=$Datexap;
} else
if($konf=='1'){
$said="You Flagged This Transaction As Fake POP, Contact Support";
$saida="img/block.png";
$konfp="<a href=\"#\" class=\"neoui-greybutton translate\" style=\"float:right;\">Flagged Fake POP</a>";
$oketimes="Exp:";
$oketime=$Datexap;
} 
}

$sqle = "SELECT COUNT(*) AS cnt FROM messages WHERE idb='$derix'";
$resulte = mysql_query($sqle);        
$rowe = mysql_fetch_array($resulte);
$pend = $rowe['cnt'];

$deri=$registro["status"];
if($deri=='pending'){$status='Pending';}
if($deri=='problem'){$status='Blocked';}
if($deri=='sukses'){$status='Success';}

$apel=$registro["exp"];
$jambu=time();
$jeruk=$apel-$jambu;
$sirsak=floor($jeruk/3600);
$sirsake=floor($jeruk/86400);

if($apel > $jambu){$rambutan="$sirsak hours";} 
else{$rambutan="";}

echo "
<div class=\"arrg arrg_out\" style=\"cursor: pointer;\" width=\"100%\">
<table class=\"arrg_tbarrg\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" width=\"100%\">
<tbody>
<tr>
<td class=\"arrg_status_name\" colspan=\"8\"> $said (Request $skgh $idtrx )</td>
<td class=\"arrg_msg\" colspan=\"2\">
<div data-target=\"#pesang$derix\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>Messages : $pend</center></div>

</td>
</tr>
<tr>
<td  class=\"arrg_num\" width=\"10%\"><img src=\"/". $saida ."\" class=\"arrg_status_img\" height=\"36\" width=\"36\"><br>
<span class=\"arrg_sm10\"><span class=\"translate\">Number</span>:<br></span><span class=\"arrg_id\">".  $registro["token"] ."</span></td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_num\" width=\"10%\"><span class=\"arrg_sm10\"><span class=\"translate\">Date of creating</span>:<br></span><span class=\"arrg_date\">". date("Y-m-d ",$registro["date"]) ."</span><br>
<a href=\"hgh\" class=\"neoui-greybutton translate\" style=\"float:right;\">Detail >> </a>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name1\"><span class=\"arrg_user_in\">You <br> ".  $phonexo ."</span>
<div class=\"arrg_bank_in\"> BTC </div> 
<div data-target=\"#confirmg". $derix ."\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>View Confirm</center></div>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td  class=\"arrg_summ\" align=\"center\" class=\"arrg_summ\" align=\"center\">

<span class=\"arrg_amt\">BTC ". $bitcoinx ." </span> 
<div class=\"arrg_out_files\" style=\"\">
<span class=\"files\">
<span class=\"translate\"> $oketimes $oketime</span><br>
<span class=\"translate\">
". $konfp ."</div>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name2\" colspan=\"2\"> <span class=\"arrg_user_out\">".  $namax ." <br> ".  $phonex ." <br> </span>
<div class=\"arrg_bank_out\">
<div data-target=\"#btcnyamodalg$derix\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>Check Payment</center></div>

</td>
";
?>

<div id="btcnyamodalg<? echo $derix; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Transfer Confirmation</h4></div>
                            <div class="modal-body">


<center>


RECEIVED EXACTLY <b> <? echo "BTC ". $bitcoinx .""; ?> </b> from:
<br>
<input type="text" style="text-align:center;"  value="<? echo $bitcoinxox; ?>" class="form-control" readonly/>
<br><br>



Please check Transfer from : <br><br>

<b>
Bitcoin : <b> <? echo "". $registro["bitcoin"] ."" ?> </b> <br><br>


</b>
<br><br>


If Transfer not received, please contact first your Pair :
<br><br>
<b> UserName : </b> <? echo $namax; ?> <br>
<b> Email : </b> <? echo $emailxox; ?> <br>
<b> Phone : </b> <? echo $phonexox; ?> <br><br>
</center>
       
 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
</div>


<div id="confirmg<? echo $derix; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">View Confirm</h4></div>
         <div class="modal-body">
 <?
$id=$_GET["id"];
$tablabbb = mysql_query("SELECT * FROM tb_beli where id='$derix'"); 
$regist= mysql_fetch_array($tablabbb);
$gambar=$regist["pic"];
$pesan=$regist["pesan"];
$link=$regist["linkbtc"];
?>
<b>Picture: </b><br><br>
<a href="<? echo $link; ?>" target="_blank"><img src="<? echo $gambar; ?>" width="300" height="200"></a><br><br>


<b>Messages: </b><br>
<? echo $pesan; ?><br><br>
           
 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
</div>

<div id="pesang<? echo $derix; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Sent Messages</h4></div>
                            <div class="modal-body">

<form method="post" action="">
<input type="hidden" class="form-control" name="username" value="<? echo $r["username"];?>" />
<input type="hidden" class="form-control" name="userph" value="<? echo $registro["username"];?>" />
<input type="hidden" class="form-control" name="idb" value="<? echo $registro["id"];?>" />
<input type="hidden" class="form-control" name="idph" value="<? echo $registro["idph"];?>" />
<input type="hidden" class="form-control" name="usergh" value="<? echo $registroo["username"];?>" />
<input type="hidden" class="form-control" name="idj" value="<? echo $registroo["id"];?>" />
<input type="hidden" class="form-control" name="idgh" value="<? echo $registro["iddb"];?>" />

<textarea name="messages" class="form-control">Type a message here...</textarea>
<br><br>

  <button type="submit" name="submit" class="small ui blue button sbtn callmodal">Sent Messages</button>
</form></div>
                           
<br><br>

<div class="chat-scroller">
                                        <ul class="chats">
<?
$user=$_COOKIE["usNick"];
$tablau = mysql_query("SELECT * FROM messages where idb='$derix'"); 
while($registrou = mysql_fetch_array($tablau)){
$namapsn= $registrou["username"];
$isipsn= $registrou["messages"];
$Datexz = date('d F Y, H:i',$registrou['date']);
$tablauu = mysql_query("SELECT * FROM tb_users where username='$namapsn'"); 
$registrouu = mysql_fetch_array($tablauu);
$avapsn= $registrouu["avatar"];
if($user==$namapsn){
echo "
 <li class=\"out\"><div class=\"message\"><span class=\"chat-arrow\"></span><a href=\"#\" class=\"chat-name\"> $namapsn </a>&nbsp;<span class=\"chat-datetime\">at ". $Datexz ." ===> </span><span class=\"chat-body\"> $isipsn </span></div>
                                            </li>

";
} else {
echo " <li class=\"in\"><div class=\"message\"><span class=\"chat-arrow\"></span><a href=\"#\" class=\"chat-name\"> $namapsn </a>&nbsp;<span class=\"chat-datetime\">at  ". $Datexz ." ===> </span> <span class=\"chat-body\"> $isipsn </span></div>
                                            </li>";} }?>
                                           
                                           
                                        </ul>
                                    </div>


 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
</div>
<?
ECHO "
</tr>

</tbody>
</table>
</div>

";  }  ?>