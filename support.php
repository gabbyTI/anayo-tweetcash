<?
$title="CONTACT US";
$sunamee=$suname
?>
<? include ("header.php"); ?>
<section class="mbr-section mbr-after-navbar" id="form1-d" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 80px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">CONTACT US</h3>
                    <small class="mbr-section-subtitle">Please forward every issue to <a href="support@splintercoin.com" target="_top"><? echo $suname ?></a> stating clearly your issue, the phone number associated with your account and the email also. You will recieve a response in 36 hours, or you can write us through the form below. Thank You.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                
                


<b><font color="red">Please do not Create a Ticket for the following Issues </font></b><br><br>
1. <b>My Upline has refused to activate my account.</b> That is between you and sponsor. Not <? echo $siname ?>. Wait for him/her to get alert for transaction.Else report through your PO.
<br>2. <b>When will I be paid or merged? </b> <? echo $siname ?> said once you RECOMMIT and have been confirmed.
<br>3. <b> My down lines have refused to pay me.</b> You will be auto rematched. Do not worry about them.
<br>4. <b> I cannot <?echo $phname;?>.</b> Wait for it to be enabled. <?echo $phname;?> Process may be disabled at that current moment.

                  <p>Filing an Invalid Ticket might lead to the <b>FREEZING</b> of your account. Extreme case will lead to the <b>DELETION</b> of your subsequent account.</p>
<br>  


                    <form action="support.php" enctype="multipart/form-data" method="post">

                        <?
if ($_POST) {
$id=saiful($_POST['id']);
$username=saiful($_POST["username"]);
$email=saiful($_POST["email"]);
$message=saiful($_POST["message"]);
$complaints=saiful($_POST["complaints"]);
$date=saiful($_POST["date"]);
$proof=saiful($_POST["proof"]);
$phone=saiful($_POST["phone"]);

if($username==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input your Username<br />";

}
if($email==NULL) {

$error = 1;

$errormsg .= "<br><br><b>Error</b> - Input Your Email<br />";

}

if ($phone==""){

$error = 1;

$errormsg .= "<b>Error - </b> Please insert Valid Phone No!<br />";

}

if ($message==""){

$error = 1;

$errormsg .= "<b>Error - </b> Please Input Your Messages!<br />";

}

if($error == 1)

{

print $errormsg;

} else {

$eltiempo=time();
$query = "INSERT INTO exsupport (username, email, phone, complaints, date, message, proof) VALUES('$username','$email','$phone','$complaints','$date','$message','$proof')";

mysql_query($query) or die(mysql_error());
echo "Support Has Been Sent. Thanks<br><br>";
include("foot.php"); ?>

<META HTTP-EQUIV="ONCLICK" CONTENT="1;URL=index">
<?
           
exit();

}

}

?>

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-d-name">Username<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="username" required="" data-form-field="Username" id="form1-d-username">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-d-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-d-email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-d-phone">Phone<span class="form-asterisk">*</span></label>
                                    <input type="tel" min="11" max="13" class="form-control" name="phone" required="" max="11" min="11" data-form-field="Phone" id="form1-d-phone">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                             <div class="form-group">
                            <p>
                            Pls specify your complaints type:<br>
                            <select name="complaints">
                            <option value="">Select Complaints Type</option>
                            <option value="fpop">Fake POP Uploaded</option>
                            <option value="Report a Member">Report a Member</option>
                            <option value="pftc">Participant Failed to Confirm</option>
                            <option value="Others">Others</option>
                            </select></div>
                                 <div class="form-group">
                                                  Date Format 24/05/2017<br>
                            <input type="date" name="date" required="">
                            </p></div>
                            </div>
                        <div class="form-group">
                            <label class="form-control-label" for="form1-d-message">Message</label>
                            <textarea class="form-control" name="message" rows="7" maxlength="100" required="" data-form-field="Message" id="form1-d-message"></textarea>
                        </div>
                        <p>
                        <div class="form-group">
Pls Upload proof of payment:<br>
<input type="file" accept="image/*" name="proof" required="" size="2000000" id="imgInp"/ >
<img id="thumnil" 
src="#" 
alt="proof" 
style="display:none; max-width: 160px; max-height: 120px; border: none;"/>
<div id="preview_ie"></div>
<!--<output id="list"></output> -->
</p>
</div>
                        

                        <div><button type="submit" class="btn btn-success" name="btnManage" value="submitTicket">CONTACT US</button></div>
</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<? include ("footer.php"); ?>
