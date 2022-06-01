<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
    rel="stylesheet">



<header>

    <div class="clearfix top_hader">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <div class="col_contact text-left text-xcenter">

                        <ul>

                            <!--  <li><i class="zmdi zmdi-phone-in-talk"></i><a href="tel:01145661931">+91-11 45661931</a> </li> -->

                            <li><i class="zmdi zmdi-whatsapp"></i><a href="tel:9801064786">+91-9801064786</a> </li>

                            <li><i class="zmdi zmdi-email"></i><a
                                    href="mailto:info@aismgroup.com">info@aismgroup.com</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <div class="text-right col_contact text-xcenter">

                        <ul>

                            <li class="margin0"><a href="certificates-verification.php" class="btn_topOne"><i
                                        class="zmdi zmdi-collection-speaker"></i>Certificates Verification</a></li>

                            <li class="margin0"><a href="#" data-toggle="modal" data-target="#myModal2"
                                    class="btn_top"><i class="zmdi zmdi-assignment-o"></i>Enquiry Now</a></li>
                                    <?php if(!$this->session->userdata('session_id')){?>
                            <li class="margin0"><a href="<?= base_url('login'); ?>" class="btn_topOne"><i class="fa-solid fa-right-to-bracket"></i>Center Login</a></li>
                            <?php }else{?>
                <li><a href="<?=base_url('franchise-center');?>">Logged in As :<?=$this->session->userdata('center_code');?></a></li>
                <li><a href="<?=base_url('login/logout');?>">Logout</a></li>
               <?php } ?>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--===end-of-top-haeader===-->

    <div class="main-header">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 no-maxpadding">

                    <div class="pull-left">

                        <div class="logo">

                            <a class="home-link" href="<?= base_url(''); ?>" title="aismgroup" rel="home">

                                <img id="logo-img" class="img-center" src="<?= base_url('assets/cork/images/main-logo.svg');?>" alt="logo-img">









                            </a>
                        </div>

                        <div class="clear"></div>

                    </div>

                    <div>

                        <nav id="cssmenu">

                            <div id="head-mobile"></div>

                            <div class="button"></div>

                            <ul class="pull-right">

                                <li class="active"><a href="<?= base_url(''); ?>">Home</a></li>

                                <li><a href='<?= base_url('about-us');?>'>About Us</a></li>

                                <li class="dropdown"> <a href='#'>Lead Auditor Courses </a>

                                    <ul>

                                        <li><a href="ohsas-45001-lead-auditor.html">OHSAS 45001 lead auditor </a></li>

                                        <li><a href="qms-iso-9001-lead-auditor.html">QMS ISO 9001 Lead Auditor</a></li>

                                        <li><a href="iso-45001-2018-irca-lead-auditor.html">ISO 45001:2018 IRCA Lead
                                                Auditor</a></li>

                                    </ul>

                                </li>

                                <li><a href="#">IOSH Courses</a>

                                    <ul>

                                        <li><a href="iosh-managing-system.html">IOSH Managing system</a></li>

                                        <li><a href="iosh-working-safety.html">IOSH working safety</a></li>

                                    </ul>

                                </li>

                                <!--<li><a href='#'>Nebosh Courses</a>

                    <ul>

                      <li><a href="nebosh-igc.html">NEBOSH IGC </a></li>

                      <li><a href="#">NEBOSH HSW</a></li>

                    </ul>

                  </li>-->

                                <li><a href='#'>Diploma Courses</a>

                                    <ul>

                                        <li><a href="certificates-courses.html">Certificates Courses</a></li>

                                        <li><a href="diploma-industrial-safety.html">Diploma in Industrial Safety</a>
                                        </li>

                                        <li><a href="">Diploma in Fire Safety</a></li>

                                        <li><a href="#">Certificate in Scarffolding Compitency</a></li>

                                        <li><a href="#">Diploma in Environmental Safety</a></li>

                                        <li><a href="#">Diploma in Construction Safety</a></li>

                                        <li><a href="diploma-food-safety.html">Diploma in Food Safety</a></li>

                                        <li><a href="#">FIRST AID TRANING</a></li>

                                    </ul>

                                </li>
                                <li><a href='#'>Student Zone</a>

                                    <ul>

                                        <li><a href="admit-card.html">Admit Card</a></li>

                                        <li><a href="examination.html">Examination</a>
                                        </li>

                                        <li><a href="admit-card.php">Results</a></li>

                                        <li><a href="digitally-ecertificate.html">Digitally E-Certificate</a></li>

                                        <li><a href="scholarship">Scholarship</a></li>

                                        <li><a href="faqs">FAQs</a></li>

                                        <li><a href="placement">Placement</a></li>



                                    </ul>

                                </li>
                                <li><a href='#'>OSHA 30 Hours</a></li>



                                <li><a href='contact-us.html'>Contact Us</a></li>

                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

            <!--end-of-row-->

        </div>

        <!--end-of-container-->

    </div>

</header>

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>

<script type="text/javascript">
var recap_fld1, recap_fld2;

var CaptchaCallback = function() {

    recap_fld2 = grecaptcha.render('RecaptchaField2', {
        'sitekey': '6LdkjLAUAAAAAA-FhjaSqyLMe6bTz6NpqTzwRZpq'
    });

    recap_fld1 = grecaptcha.render('RecaptchaField1', {
        'sitekey': '6LdkjLAUAAAAAA-FhjaSqyLMe6bTz6NpqTzwRZpq'
    });

};
</script>

<div class="demo">
    <!--right -->

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">

        <div class="modal-dialog modal-md" role="document">

            <div class="modal-content">

                <div class="modal-header  padding-rtl30">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>

                    <h3 class="modal-title" id="myModalLabel2">Contact Us</h3>

                </div>

                <div class="modal-body padding-bot20 padding-rtl20">

                    <div class="sction_style1" id="form_id_1">

                        <div class="row clearfix">

                            <div>

                            </div>

                            <form action="" name="frmenquiry" id="frmenquiry" method="POST">



                                <div class="col-md-12 col-sm-12">

                                    <div class="texBox-border0">

                                        <!-- <h2>Please sign in to send your information request</h2>-->



                                        <p>To ensure that you are a trade professional, your information will be
                                            verified by our team.</p>

                                    </div>

                                </div>

                                <div class="clearfix">

                                    <div class="col-md-6 col-xs-12 col-sm-12 padding-bot20">

                                        <input type="text" class="validate[required] form-control input-lg"
                                            data-prompt-position="topLeft" placeholder="Name.." name="sender_fname"
                                            id="sender_fname" value="">

                                    </div>

                                    <div class="col-md-6 col-xs-12 col-sm-12 padding-bot20">

                                        <input type="tel" name="sender_contactno" placeholder="Phone number.."
                                            class="validate[required] form-control input-lg"
                                            data-prompt-position="topLeft" id="sender_contactno" value="">

                                    </div>

                                    <div class="col-md-6 col-xs-12 col-sm-12 padding-bot20">

                                        <input type="text" name="sender_email" placeholder="Email Address.."
                                            class="validate[required,custom[email]] form-control input-lg"
                                            data-prompt-position="topLeft" id="sender_email" value="">

                                    </div>

                                    <div class="col-md-6 col-xs-12 col-sm-12 padding-bot20">

                                        <input type="text" name="sender_course" placeholder="Courses.."
                                            class="validate[required] form-control input-lg"
                                            data-prompt-position="topLeft" id="sender_course" value="">

                                    </div>

                                </div>

                                <div class="col-md-12 padding-bot20">

                                    <textarea name="sender_message" id="sender_message"
                                        class="validate[required] form-control" data-prompt-position="topLeft" rows="8"
                                        cols="80" placeholder="Type Your Message here."></textarea>

                                </div>



                                <div class="col-sm-6 col-md-3 col-xs-6 form-group">

                                    <!--<div class="g-recaptcha" data-sitekey="6LdkjLAUAAAAAA-FhjaSqyLMe6bTz6NpqTzwRZpq"></div>-->

                                    <div id="RecaptchaField1"></div>

                                    <!--6LdkjLAUAAAAAK7qLNUROyNXMkc_vv-1QQGi5ezK-->



                                </div>

                                <!--<div class="col-sm-6 col-md-3 col-xs-6 form-group">

                    <button type="button" class="btn_style6" onClick="reloadCaptcha('cimgcaptcha','','../../captchasecimg.php?width=153&amp;height=45&amp;characters=5')"><i class="zmdi zmdi-refresh"></i> &nbsp; &nbsp;Refresh</button>

                  </div>-->

                                <div class="clear"></div>

                                <div class="col-md-12">

                                    <input type="submit" value="Submit" class="btn_style2" id="btn_submit">

                                    <div id="errorMsgBox" style="text-align: center;"></div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

            <!-- modal-content -->

        </div>

        <!-- modal-dialog -->

    </div>

    <!-- modal -->

</div>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

<style>
.successMsg {
    color: #008000;
    font-weight: bold;
}

.errorMsg {
    color: #FF0000;
    font-weight: bold;
}
</style>

<script>
function isValidEmailStrict(address)

{

    /*	if (isValidEmail(address) == false) return false;

    	var domain = address.substring(address.indexOf('@') + 1);

    	if (domain.indexOf('.') == -1) return false;

    	if (domain.indexOf('.') == 0 || domain.indexOf('.') == domain.length - 1) return false;

    	return true; */





    var hasError = false;

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;



    var emailaddressVal = address;



    if (!emailReg.test(emailaddressVal))

    {

        ////$("#UserEmail").after('<span class="error">Enter a valid email address.</span>');

        hasError = true;

    }



    if (hasError == true)

    {

        return false;

    } else

        return true;



}





$(document).ready(function()

    {



        $("#frmenquiry").submit(function()

            {

                if ($('#sender_fname').val() == '' || $('#sender_fname').val() == 'First Name')

                {

                    alert("Please enter Your Name.");

                    $('#sender_fname').focus();

                    return false;

                }

                if ($('#sender_contactno').val() == '' || $('#sender_contactno').val() == 'Contact Number')

                {

                    alert("Please enter Your Contact Number");

                    $('#sender_contactno').focus();

                    return false;

                }

                if (isNaN($('#sender_contactno').val()))

                {

                    alert("Please enter Valid Contact Number");

                    $('#sender_contactno').focus();

                    return false;

                }

                if ($('#sender_contactno').val().length != 10)

                {

                    alert("Please enter Valid Contact Number");

                    $('#sender_contactno').focus();

                    return false;

                }

                if ($('#sender_email').val() == '' || $('#sender_email').val() == 'Email')

                {

                    alert("Please enter Your Email ID.");

                    $('#sender_email').focus();

                    return false;

                }

                if ($('#sender_email').val() != '')

                {

                    if (!isValidEmailStrict($('#sender_email').val()))

                    {

                        alert("Please enter Valid Email ID.");

                        $('#sender_email').focus();

                        return false;

                    }

                }

                if ($('#sender_course').val() == '' || $('#sender_course').val() == 'Course')

                {

                    alert("Please enter Course Name.");

                    $('#sender_course').focus();

                    return false;

                }

                if ($('#sender_message').val() == '' || $('#sender_message').val() == 'Message')

                {

                    alert("Please enter Message");

                    $('#sender_message').focus();

                    return false;

                }



                if (!grecaptcha.getResponse(recap_fld1))

                {

                    alert('Please check the "I\'m not a robot" checkbox!');

                    return false;

                }



                $('#btn_submit').attr('disabled', 'disabled');



                $.post("form-query.inc.php", {
                        actionrequired: 'enquiry',
                        sender_fname: $('#sender_fname').val(),
                        sender_course: $('#sender_course').val(),
                        sender_email: $('#sender_email').val(),
                        sender_contactno: $('#sender_contactno').val(),
                        sender_message: $('#sender_message').val(),
                        captcha: grecaptcha.getResponse(recap_fld1),
                        rand: Math.random()
                    }, function(data)

                    {

                        console.log(data);

                        dataArray = data.split('|');

                        if (dataArray[0] == 'yes') //if correct login detail

                        {

                            $("#errorMsgBox").fadeTo(200, 0.1, function() //start fading the messagebox

                                {

                                    $(this).html(dataArray[1]).removeClass().addClass('successMsg')
                                        .fadeTo(500, 1);

                                    $('#sender_fname').val('');

                                    $('#sender_course').val('');

                                    $('#sender_contactno').val('');

                                    $('#sender_email').val('');

                                    $('#sender_message').val('');

                                    grecaptcha.reset();

                                    setTimeout(function() {

                                        $('#errorMsgBox').removeClass().html('');

                                    }, 3000);

                                    $('#btn_submit').removeAttr('disabled');

                                });

                        } else

                        {

                            $("#errorMsgBox").fadeTo(200, 0.1, function() //start fading the messagebox

                                {

                                    $(this).html(dataArray[1]).removeClass().addClass('errorMsg')
                                        .fadeTo(500, 1);

                                    $('#btn_submit').removeAttr('disabled');

                                });

                        }



                    });

                return false; //not to post the  form physically

            });



    });
</script>