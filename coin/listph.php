<?
$noUrut = 1;
$lole=$_COOKIE["username"];
$tabla = mysql_query("SELECT * FROM tb_ph where username='$lole' and status!='ditahan' ORDER BY id DESC limit 0,100"); 
while ($registro = mysql_fetch_array($tabla)) { 
$sisaphnya=$pecahan * $registro["saldo"];
$ferpax=$registro["id"];
$ferpaxd=$registro["username"];
$ferpa=$registro["paket"];
$ferp=$registro["saldo"];
$pairnya=$ferpa - $ferp;
$frozenStatus=$registro["status"];
$jembi= date("l, d M Y ",$registro["lockph"]);
if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Flagged Fake POP';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Flagged Fake POP';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';} else
  if($frozenStatus=='dilock'){$button='warning'; $mystats='Wait Transfer DP';}
  if($frozenStatus=='dikunci'){$button='warning'; $mystats='Wait To Open Pair';}


if($ferpa==$ferp){$cancelbutton="<a href=\"delete.php?id=". $ferpax ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Cancel Transactions!</a>";}



echo "
<div id_order=\"". $registro["idtrx"] ."\" class=\"ordin \" id=\"order_in_". $registro["idtrx"] ."\" style=\"cursor: pointer;\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"6\" width=\"100%\">
<tbody><tr>
<td><img src=\"/img/strelka32.png\" height=\"32\" width=\"32\"></td>
<td class=\"ord_title\"><span class=\"translate\">Request to $skph </span><br><span class=\"order_in_id\"> <b>$skph ". $registro["idtrx"] ."</b></span></td>
</tr>
<tr>
<td colspan=\"2\" class=\"ord_body\">
<div class=\"ord_body_info\">
<span class=\"translate\">Participant</span> : 
<span class=\"order_in_fio\"> ". $registro["username"] ." </span><br>
<span class=\"translate\">Amount</span> : <span class=\"order_in_amount\">$matauang ". number_format($registro["paket"]) ."</span> <span class=\"order_in_currency\"></span><br>
<span class=\"rest_in\"><span class=\"translate\">Balance Remaining </span> : <span class=\"order_in_rest\">$matauang ". number_format($registro["saldo"]) ."</span> <span class=\"order_in_currency\"></span><br></span>
<span class=\"translate\">Date</span> : <span class=\"order_in_date\">". date("l, d M Y ",$registro["date"]) ."</span><br>
<span class=\"translate\">Open date</span> : <span class=\"order_in_status\">". $jembi ."</span><br>
<span class=\"translate\">Release Date</span> : <span class=\"order_in_date\">". date("l, d M Y ",$registro["kapangh"]) ."</span><br>
<span class=\"translate\">Status</span> : <span class=\"order_in_status\">". $mystats ."</span>
</div>
<div class=\"ord_body_is_avto\"><img src=\"/img/avto37.png\" alt=\"\"></div>
</td>
</tr>
<tr><td colspan=\"2\">$cancelbutton
<div data-target=\"#listdetailmodal$ferpax\" data-toggle=\"modal\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;\"><center>View Detail</center></div>
"; ?>



<div id="listdetailmodal<? echo $ferpax; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-responsive-label" class="modal-title">Detail Transactions</h4></div>
                            <div class="modal-body">

              
<? echo showPhOrderMemberKananModal($ferpaxd,$ferpax); ?> <br>
<? echo showPhOrderMemberKananModalList($ferpaxd,$ferpax); ?>


 <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-success">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
</div>


<? echo "
</td></tr>
</tbody></table>
</div> ";
}
?>