<?
require('../config.php');
require('../data.php');
require('../fungsi.php');
include "head.php";

if (isset($_POST["id"]))
{
$id=saiful($_POST["id"]);
$username=saiful($_POST["username"]);
$idtrx=saiful($_POST["idtrx"]);
$dpro=saiful($_POST["dpro"]);
$paket=saiful($_POST["paket"]);
$saldo=saiful($_POST["saldo"]);
$sisa=saiful($_POST["sisa"]);

$query = "UPDATE tb_ph SET
id='$id', 
username='$username', 
idtrx='$idtrx', 
dpro='$dpro',
paket='$paket', 
saldo='$saldo', 
sisa='$sisa' where id='$id'";

mysql_query($query) or die(mysql_error());
echo "<font color=\"green\"><b>GH edited.</b></font><br><br>";
}

if (isset($_GET["id"]))
{
$id=abs((int)$_GET["id"]);
if ($_GET["option"]=="edit")
{
?>

<?
$tablae = mysql_query("SELECT * FROM tb_ph where id='$ferpax'");
while ($registroe = mysql_fetch_array($tablae)) { 
?>
<div class="row">
                            <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Edit GH</h4>
                                        </div>
                                        <div class="panel-body">

<form method="post" class="form-horizontal" action="delete.php">
<div class="form-group">
									<div class="form-group">
                                      <label class="col-sm-4 control-label">ID </label>
                                       <div class="col-sm-8">
								<textarea name="id" class="form-control" readonly><?= $registroe["id"] ?></textarea>
									   </div>
                                    </div><!-- form-group -->
                                                <label class="col-sm-4 control-label">Trc id</label>
                                                <div class="col-sm-8">
<input type="text" name="idtrx" class="form-control" value="<?= $registroe["idtrx"] ?>" readonly>
</div>
                                    </div><!-- form-group -->
                                    
									<div class="form-group">
                                      <label class="col-sm-4 control-label">Username </label>
                                       <div class="col-sm-8">
								<textarea name="username" class="form-control" readonly><?= $registroe["username"] ?></textarea>
									   </div>
                                    </div><!-- form-group -->
                                    
									<div class="form-group">
                                      <label class="col-sm-4 control-label">Paket </label>
                                       <div class="col-sm-8">
								<textarea name="paket" class="form-control"><?= $registroe["paket"] ?></textarea>
									   </div>
                                    </div><!-- form-group -->
                                    
									<div class="form-group">
                                      <label class="col-sm-4 control-label">Saldo </label>
                                       <div class="col-sm-8">
								<textarea name="saldo" class="form-control"><?= $registroe["saldo"] ?></textarea>
									   </div>
                                    </div><!-- form-group -->
                                    
									<div class="form-group">
                                      <label class="col-sm-4 control-label">Sisa </label>
                                       <div class="col-sm-8">
								<textarea name="sisa" class="form-control"><?= $registroe["sisa"] ?></textarea>
									   </div>
                                    </div><!-- form-group -->
									
  <div class="panel-footer">
                                            <button class="btn btn-primary mr5">Save</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
								</div>
								</div>

</form>

<br><br>

<?
}
?>

<?
}
$noUrut = 1;
$lole=$_COOKIE["username"];
$tabla = mysql_query("SELECT * FROM tb_ph where username='$lole' and id='$id'"); 
while ($registro = mysql_fetch_array($tabla)) { 
$sisaphnya=$pecahan * $registro["saldo"];
$id=$registro["id"];

if ($_GET["option"]=="delete")
{
$queryz = "DELETE FROM tb_ph WHERE username='$lole' and id='$id'";
mysql_query($queryz) or die(mysql_error());
echo "<font color=\"#cc0000\"><b>PH deleted.</b></font><br><br>";
}
}
}
?>
<div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-success mb30">
<thead>
<tr>
<th class="matrixColumn"><h6>ID</h6></th>
<th class="matrixColumn"><h6>Trx id</h6></th>
<th class="matrixColumn"><h6>Username</h6></th>
<th class="matrixColumn"><h6>Saldo*</h6></th>
<th class="matrixColumn"><h6>Paket</h6></th>
<th class="matrixColumn"><h6>Sisa</h6></th>
<th class="matrixColumn"><h6>Option</h6></th>
</tr>
</thead>

<tbody>
<?
$TAMANO_PAGINA = 100;
$pagina = $_GET["pagina"];
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$tabla = mysql_query("SELECT * FROM tb_ph where username='$lole' and id='$id'"); 
while ($registro = mysql_fetch_array($tabla)) { 
echo "

<tr>
<td class=\"matrixOdd last\">
". $registro["id"] ." 
</td>

<td class=\"matrixOdd last\">
". $registro["idtrx"] ."
</td>

<td class=\"matrixOdd last\">
". $registro["username"] ."
</font></td>

<td class=\"matrixOdd last\">
". $registro["saldo"] ."
</font></td>

<td class=\"matrixOdd last\">
". $registro["paket"] ."
</font></td>

<td class=\"matrixOdd last\">
". $registro["sisa"] ."
</font></td>

<td class=\"matrixOdd last\">";
?>

<form method="post" action="delete.php?id=<?=  $id  ?>&option=delete">
<input type="submit" class="btn btn-primary btn-sm"  value="Delete">
</form>

</td>
</tr>
<?
} 
?>
</tbody>
</table>
</div>

<? include "foot.php";
?>