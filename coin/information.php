<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="News";
include "head.php";
?>
    
 <div id="faq" class="row">
                    <div class="col-lg-12">
                        <div id="accordion-example" class="panel-group">
 
<?
$tabla = mysql_query("SELECT * FROM berita ORDER BY id DESC limit 0,20");
while ($registro = mysql_fetch_array($tabla)) {
echo "
 <div class='panel'>
					<div class='panel-heading'>
						
<a data-toggle='collapse' data-parent='#accordion-example' href='#collapseOne". $registro["id"] ."' 
class='accordion-toggle collapsed'><strong><i class=\"fa fa-calendar\"></i> ". date("d M Y h:m:s ",$registro["date"]) ."</strong>
". $registro["subject"] ."</a></div>

<div id='collapseOne". $registro["id"] ."' style='height: 0px;' class='panel-collapse collapse'>
                                    <div class='panel-body'>
							
<p>". $registro["comments"] ."</p>
						</div>
					</div></div>
				
"; } ?>
</div>
</div>
<?
include "foot.php";
?>
