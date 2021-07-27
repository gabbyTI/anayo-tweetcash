<?
session_start();
require('../config.php');
require('../data.php');
require('../fungsi.php');
functionUserLock();
$userStatus=$r["suspend"];
functionUserBlocked($userStatus);
$title="Dashboard";
include "head.php";
$statri="YES";
?>
<?
$statre="select * from settph where id='1'";
$statres=mysql_query($statre) or die(mysql_error());
$statre=mysql_fetch_array($statres);
$statred=$statre['statr'];

$stattwi="select * from tb_users WHERE username='$user'";
$stattwwi=mysql_query($stattwi) or die(mysql_error());
$stattwi=mysql_fetch_array($stattwwi);
$stattiuser=$stattwi["statr"];



?>


<section class="mbr-cards mbr-section mbr-section-nopadding mbr-parallax-background mbr-after-navbar" id="features3-10" style="background-image: url(assets/images/jumbotron.jpg);">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 120px; padding-bottom: 40px;">
            <div class="container">
              <div class="card cart-block">
         <?   if ($statred == YES){
          
                ?> <?

    if ($stattiuser!=YES)
{
    ?>
 <div class="card-block">
                    <h4 class="card-title"><? echo $myphname; ?></h4>
                    
                    
                    <div class="card-btn"><a href="providehelp" class="btn btn-primary"><? echo $myphname; ?></a></div>
                    </div>
                    <?   }
    else {
        ?>
    <?echo "<font color=\"#cc0000\"><b> <h4><p>PLS $ghname 
    TO ENABLE $phname.</p></h4></b></font><br><br>"?>
        <?  }                                 

?>
                    
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 120px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    
                    <div class="card-block">
                        <h4 class="card-title">TRANSACTIONS</h4>
                        
                        
                        <div class="card-btn"><a href="transactions" class="btn btn-primary">TRANSACTIONS</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 120px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    
                      <?

    if ($stattiuser==YES)
{
    ?>
                    
                    <div class="card-block">
                        <h4 class="card-title"><? echo $ghname; ?></h4>
                        
                        
                        <div class="card-btn"><a href="gethelp" class="btn btn-primary"><? echo $ghname; ?></a></div>
                    </div>
                     <?   }
    else {
        ?>
    <?echo "<font color=\"#cc0000\"><b><h4><p> PLEASE $phname
    TO ENABLE $ghname.</p></h4></b></font><br><br>"?>
        <?  }                                 

?>
                </div>
            </div>
        </div>
        
        
        
    </div>
<?
       echo "<font color=\"#cc0000\"><h3><b>PLEASE Note That You Are Required To $rphname Before You Can $ghname !!! Thanks</b></h3></font><br><br>";
 
  ?>  <?} else{?>
    <div class="card-block">
                    <h4 class="card-title"><? echo $myphname; ?></h4>
                    
                    
                    <div class="card-btn"><a href="providehelp" class="btn btn-primary"><? echo $myphname; ?></a></div>
                    </div>
                      </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 120px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    
                    <div class="card-block">
                        <h4 class="card-title">TRANSACTIONS</h4>
                        
                        
                        <div class="card-btn"><a href="transactions" class="btn btn-primary">TRANSACTIONS</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 120px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                  <div class="card-block">
                        <h4 class="card-title"><? echo $ghname; ?></h4>
                        
                        
                        <div class="card-btn"><a href="gethelp" class="btn btn-primary"><? echo $ghname; ?></a></div>
                    </div>
<?  }
    ?> 
    </section>
<section class="mbr-cards mbr-section mbr-section-nopadding mbr-parallax-background mbr-after-navbar" id="features3-10" style="background-color:grey ;">

<div class="row">
	
<div class="col-lg-8">



<br><br>
<div id="phorder">
<? include ("phtrx.php"); ?>
</div>

<br><br>



<br><br>

<br><br>
<div id="ghorder">
<? include ("ghtrx.php"); ?>
</div>
</div>
<div class="col-lg-4">
<br>
<div id="phlist">
<? include ("listph.php"); ?>
</div><br>


<br><br>
<div id="ghlist">
<? include ("listgh.php"); ?>
</div>
</div></div>
<? include "foot.php";
?>