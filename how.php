<?

$title="HOW IT WORKS";

?>
<? 
include ("header.php"); 
?>
<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="header1-v" style="background-image: url(assets/images/jumbotron.jpg);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1">HOW IT WORKS</h1>
                    <p class="mbr-section-lead lead"><? echo showcontent (3)?><br></p>
                    <div class="mbr-section-btn"><a class="btn btn-lg btn-primary" href="register.php">SIGN UP</a> <a class="btn btn-lg btn-white btn-white-outline" href="login.php">LOGIN</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#social-buttons1-w"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-section mbr-section-md-padding" id="social-buttons1-w" style="background-color: rgb(255, 255, 255); padding-top: 30px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">SHARE THIS PAGE!</h3>
                <div>

                  <div class="mbr-social-likes" data-counters="false">
                    <span class="btn btn-social facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>
                    </span>
                    <span class="btn btn-social twitter" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>
                    </span>
                    <span class="btn btn-social plusone" title="Share link on Google+">
                        <i class="socicon socicon-googleplus"></i>
                    </span>
                    
                    
                  </div>

                </div>
            </div>
        </div>
    </div>
</section>

<? 
include ("footer.php"); 
?>