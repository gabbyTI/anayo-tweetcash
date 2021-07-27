<?
if ($_POST) {
$id=saiful($_POST["id"]);
$username=saiful($_POST["username"]);
$userph=saiful($_POST["userph"]);
$idb=saiful($_POST["idb"]);
$idph=saiful($_POST["idph"]);
$usergh=saiful($_POST["usergh"]);
$idj=saiful($_POST["idj"]);
$idgh=saiful($_POST["idgh"]);
$messages=saiful($_POST["messages"]);
$kamiduh=$r["username"];

$tablab = mysql_query("SELECT * FROM tb_users where username='$userph'"); 
$registrob = mysql_fetch_array($tablab);
$derizb=$registrob["phone"];
$derizab=$registrob["email"];


if($idb==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input ID $skph trx </b><br />";

}
if($username==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input Your Username </b><br />";

}
if ($messages==""){

$error = 1;

$errormsg .= "<b>Error - </b> Please Input Your Messages!</b><br />";

}

if($error == 1)

{

print $errormsg;

} else {

$eltiempo=time();
$query = "INSERT INTO messages (username, userph, idb, idph, usergh, idj, idgh, messages, date) VALUES('$username','$userph','$idb','$idph', '$usergh', '$idj', '$idgh', '$messages', '$eltiempo')";

mysql_query($query) or die(mysql_error());
echo "Messages Has Been Sent. Thanks<br><br></div></div>";
include("foot.php"); ?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php">
<?
           
exit();

}

}

?>
<? 
$noUrut = 1;
$lole=$_COOKIE["username"];
$tabla = mysql_query("SELECT * FROM tb_beli where username='$lole'"); 
while ($registro = mysql_fetch_array($tabla)) { 
$derix=$registro["id"];
$deriz=$registro["idph"];
$deric=$registro["iddb"];
$namax=$registro["username"];
$phonex=$registro["phone"];
$bitcoinx=$registro["amountbtc"];
$tokenx=$registro["token"];
$konf=$registro["konfirmasi"];
$stats=$registro["status"];
$Datex = date('d F Y, H:i',$registro['date']);
$Datexap = date('d F Y, H:i',$registro['autoapp']);
$Expx = date('d F Y, H:i',$registro['exp']);
$Expxa = $registro['exp'];
$tablao = mysql_query("SELECT * FROM tb_jual where token='$tokenx'"); 
$registroo = mysql_fetch_array($tablao);
$idjual= $registroo["id"];
$namaxob=$registroo["nama"];
$namaxo=$registroo["username"];
$bitcoinxo=$registroo["bitcoin"];
$phonexo=$registroo["phone"];
$emailxo=$registroo["email"];

$tablap = mysql_query("SELECT * FROM tb_ph where id='$deriz'"); 
$registrop = mysql_fetch_array($tablap);
$idtrx= $registrop["idtrx"];
if($stats=='pending'){
if($konf=='0'){
$said="Please Transfer Now and Confirm to fast approve";
$saida="img/ok2.png";
$konfp="Expired : $Expx <br> <a href=\"confirm.php?id=". $derix ."\"  style=\"float:right;\" class=\"neoui-greybutton translate\" style=\"float:right;\">Confirm Now!</a>";
} else
if($konf=='1'){
$said="Waiting Approve. Contact your Pair to fast Approve";
$saida="img/ok1.png";
$konfp="Approve Limited : $Datexap <br>
<div data-target=\"#confirm". $derix ."\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>View Confirm</center></div>
";
} 
}

if($stats=='sukses'){
if($konf=='0'){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="
<div data-target=\"#confirm". $derix ."\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>View Confirm</center></div>";

} else
if($konf=='1'){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="<div data-target=\"#confirm". $derix ."\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>View Confirm</center></div>";
} 
}

if($stats=='problem'){
if($konf=='0'){
$said="Transaction Flagged As POP, Contact Support";
$saida="img/block.png";
$konfp="Approve Limited : $Datexap <BR><div data-target=\"#confirm". $derix ."\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>Flagged Fake POP</center></div>";
} else
if($konf=='1'){
$said="Transaction Flagged As POP, Contact Support";
$saida="img/block.png";
$konfp="Approve Limited : $Datexap <BR><div data-target=\"#confirm". $derix ."\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>Flagged Fake POP</center></div>";
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
<div class=\"arrg arrg_in\" style=\"cursor: pointer;\" width=\"100%\">
<table class=\"arrg_tbarrg\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" width=\"100%\">
<tbody>
<tr>
<td class=\"arrg_status_name\" colspan=\"8\"> $said (Request $skph $idtrx )</td>
<td class=\"arrg_msg\" colspan=\"2\">
<div data-target=\"#pesan$derix\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>Messages : $pend</center></div>
</td>
</tr>
<tr>
<td  class=\"arrg_num\" width=\"10%\"><img src=\"/". $saida ."\" class=\"arrg_status_img\" height=\"36\" width=\"36\"><br>
<span class=\"arrg_sm10\"><span class=\"translate\">Number</span>:<br></span><span class=\"arrg_id\">".  $registro["token"] ."</span></td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_num\" width=\"10%\"><span class=\"arrg_sm10\"><span class=\"translate\">Date of creating</span>:<br></span><span class=\"arrg_date\">". date("Y-m-d ",$registro["date"]) ."</span><br>
<a href=\"hph\" class=\"neoui-greybutton translate\" style=\"float:right;\">Detail >> </a>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name1\"><span class=\"arrg_user_in\">You <br> ". $registro["phone"] ."</span>
<div class=\"arrg_bank_in\">BTC</div></td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td  class=\"arrg_summ\" align=\"center\" class=\"arrg_summ\" align=\"center\">
<span class=\"arrg_amt\">$matauang ".  number_format($registro["paket"]) ." <br> 
BTC ".  round($bitcoinx,8) ." <br>
<div class=\"arrg_out_files\" style=\"\">
<span class=\"translate\"> "; ?>
<? if ($stats=='sukses'){echo ""; } else { echo "<div id=\"countbox". $derix ."\"></div>";} ?> <? echo "</span>
<span class=\"translate\">
 ". $konfp ."</span></div>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name2\" colspan=\"2\"> <span class=\"arrg_user_out\">".  $namaxo ." <br> ".  $phonexo ." <br> </span>
<div class=\"arrg_bank_out\">
<div data-target=\"#btcnyamodal$derix\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>Pay Now</center></div>
</div>

";?>


<div id="btcnyamodal<? echo $derix; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Transfer Payment</h4></div>
                            <div class="modal-body">



<center>

<img src="https://chart.googleapis.com/chart?chs=110x110&amp;chld=M|0&amp;cht=qr&amp;chl=bitcoin%3A<? echo $bitcoinxo; ?>%3Famount%3D<? echo "". round($bitcoinx,8) ."" ?>" style="height: 200px;width 200px" />
<br>
Send EXACTLY <b> <? echo "BTC ". round($bitcoinx,8) .""; ?> </b> to:
<br>
<input type="text" style="text-align:center;"  value="<? echo $bitcoinxo; ?>" class="form-control" readonly/>
<br><br>


You can transfer <? echo $matauang ?> <? echo "". number_format($registro["paket"]) ."" ?> to : <br><br>

<b> 
<? echo $bitcoinxo; ?>
</b>
<br><br>

Before Transfer, please contact first your Pair :
<br><br>
<b> Name : </b> <? echo $namaxob; ?> <br>
<b> UserName : </b> <? echo $namaxo; ?> <br>
 Email : </b> <? echo $emailxo; ?> <br>
Phone : </b> <? echo $phonexo; ?> <br><br></b>
</center>
          

 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
</div>



<div id="confirm<? echo $derix; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Transfer Confirmation</h4></div>


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


<div id="pesan<? echo $derix; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Messages</h4></div>
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
echo " <li class=\"in\"><div class=\"message\"><span class=\"chat-arrow\"></span><a href=\"#\" class=\"chat-name\"> $namapsn </a>&nbsp;<span class=\"chat-datetime\">at  ". $Datexz ." ===> </span><span class=\"chat-body\"> $isipsn </span></div>
                                            </li>";} }?>
                                           
                                           
                                        </ul>
                                    </div>




 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                            </div>
                        </div>
                    </div>
                </div>

<script type="text/javascript">
var CDown = function() {
	this.state=0;// if initialized
	this.counts=[];// array holding countdown date objects and id to print to {d:new Date(2013,11,18,18,54,36), id:"countbox<? echo $registro['id']; ?>"}
	this.interval=null;// setInterval object
}

CDown.prototype = {
	init: function(){
		this.state=1;
		var self=this;
		this.interval=window.setInterval(function(){self.tick();}, 1000);
	},
	add: function(date,id){
		this.counts.push({d:date,id:id});
		this.tick();
		if(this.state==0) this.init();
	},
	expire: function(idxs){
		for(var x in idxs) {
			this.display(this.counts[idxs[x]], "..:..:..:..");
			this.counts.splice(idxs[x], 1);
		}
	},
	format: function(r){
		var out="";
		out += r.d +" "+((r.d==1)?"day":"days")+", ";
		out += r.h +" "+((r.h==1)?"hour":"hours")+", ";
		out += r.m +" "+((r.m==1)?"min":"mins")+", ";
		out += r.s +" "+((r.s==1)?"sec":"secs")+", ";

		return out.substr(0,out.length-2);
	},
	math: function(work){
		var	y=w=d=h=m=s=ms=0;

		ms=(""+((work%1000)+1000)).substr(1,3);
		work=Math.floor(work/1000);//kill the "milliseconds" so just secs

		y=Math.floor(work/31536000);//years (no leapyear support)
		w=Math.floor(work/604800);//weeks
		d=Math.floor(work/86400);//days
		work=work%86400;

		h=Math.floor(work/3600);//hours
		work=work%3600;

		m=Math.floor(work/60);//minutes
		work=work%60;

		s=Math.floor(work);//seconds

		return {y:y,w:w,d:d,h:h,m:m,s:s,ms:ms};
	},
	tick: function(){
		var now=(new Date()).getTime(),
			expired=[],cnt=0,amount=0;

		if(this.counts)
		for(var idx=0,n=this.counts.length; idx<n; ++idx){
			cnt=this.counts[idx];
			amount=cnt.d.getTime()-now;//calc milliseconds between dates

			// if time is already past
			if(amount<0){
				expired.push(idx);
			}
			// date is still good
			else{
				this.display(cnt, this.format(this.math(amount)));
			}
		}

		// deal with any expired
		if(expired.length>0) this.expire(expired);

		// if no active counts, stop updating
		if(this.counts.length==0) window.clearTimeout(this.interval);
		
	},
	display: function(cnt,msg){
		document.getElementById(cnt.id).innerHTML=msg;
	}
};

window.onload=function(){
	var cdown = new CDown();
<?
$lole=$r["username"];
$tablaj = mysql_query("SELECT * FROM tb_beli where username='$lole'"); 
while ($registroj = mysql_fetch_array($tablaj)) { 
$derixj=$registroj["id"];
$konfgh=$registroj["konfirmasi"];
$dateja=$registroj['exp'];
$skrg=time();
$datej=date('d-m-Y H:i:s',$registroj['exp']);
$dateji=date('d-m-Y H:i:s',$registroj['autoapp']);
if($konfgh=='0'){
$datev = date_create($datej);
date_add($datev, date_interval_create_from_date_string('-1 months'));
$newdatea = date_format($datev, 'Y,m,d,H,i,s');
echo "
cdown.add(new Date(". $newdatea ."), \"countbox". $derixj ."\");"; } 
else {
$datev = date_create($dateji);
date_add($datev, date_interval_create_from_date_string('-1 months'));
$newdatesa = date_format($datev, 'Y,m,d,H,i,s');
echo "
cdown.add(new Date(". $newdatesa ."), \"countbox". $derixj ."\");";
}}?>
};
</script>

<?
ECHO "</td>
</tr>

</tbody>
</table>
</div>


";  }  ?>

