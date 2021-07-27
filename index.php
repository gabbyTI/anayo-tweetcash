<?
$title="HOME";
?>
<? include ("header.php"); ?>


<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="header1-2" style="background-image: url(assets/images/jumbotron.jpg);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1"><p><? echo $siname ?></p></h1>
                    <p class="mbr-section-lead lead"><? echo $siname ?> is an online donation exchange and social network community, We provide an opportunity to earn an incentive of 100% of your donation in <? echo $relphstaty;?> Days. The system is designed based on latest technology with peer to peer model.&nbsp;</p>
                    <div class="mbr-section-btn"><a class="btn btn-lg btn-primary" href="register.php">SIGN UP</a> <a class="btn btn-lg btn-white btn-white-outline" href="login.php">LOGIN</a> <a class="btn btn-lg btn-success" href="how.php">HOW IT WORKS</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#features4-j"><i class="mbr-arrow-icon"></i></a></div>

</section>
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features4-j" style="background-color: rgb(255, 255, 255);">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="etl-icon icon-puzzle mbr-iconfont mbr-iconfont-features4" style="color: rgb(122, 198, 115);"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">METHODOLOGY</h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text"><span style="font-size: 1rem; line-height: 1.5;">Our cutting edge cross-matching matrix-based programming technology ensures you earn 100% profit on every amount you give..</span><br></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="etl-icon icon-wine mbr-iconfont mbr-iconfont-features4" style="color: rgb(65, 168, 95);"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">HOW TO START EARNING</h4>
                        <h5 class="card-subtitle">SUSTAINABLE MATRIX SYSTEM</h5>
                        <p class="card-text">Make payment to the participant you are asked to pay and get participants matched to pay x2 of your initial investment<?
    if ($statredi == 1){
       echo "<font color=\"#cc0000\"><b>, PLS NOTE THAT YOU ARE REQUIRED TO RECOMMIT BEFORE YOU CAN $ghname !!! THANKS.</b></font><br><br>";
 
    }
    else {
        echo ".";
    }
    ?> .</p>
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="mbri-letter mbr-iconfont mbr-iconfont-features4" style="color: rgb(122, 198, 115);"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">RESPONSIBLE SUPPORT</h4>
                        <h5 class="card-subtitle">EFFICIENT SUPPORT SYSTEM</h5>
                        <p class="card-text">One of <? echo $siname ?>'s big points is responsiveness and <? echo $siname ?> makes effective use of this by providing highly responsible support team for you.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
</section>
<? include ("footer.php"); ?>


