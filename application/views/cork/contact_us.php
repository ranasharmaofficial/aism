<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>Welcome aismgroup.com</title>
<?php include('headerstylelinks.php'); ?>
</head>
<body>
<div class="wrapper">
   <?php include_once('header.php'); ?>
  <section class="page_breadcrumbs ds color parallax  contact_us section_padding_top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact Us</h2>
          <ol class="breadcrumb highlightlinks">
            <li> <a href="<?= base_url(''); ?>"> Home </a> </li>
            <li class="active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ovelay_1"></div>
  </section>
  <section class="padding-btop50 sction_style2">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="tittle_center">
            <h2>Contact Details</h2>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 text-center">
          <div class="vertical_box padding-btop50 corner padding-rtl40" style="min-height:290px;">
            <div><i class="zmdi zmdi-pin"></i></div>
            <div class="padding-top20">
              <h3>Address</h3>
              <p>G-7 1 st Floor Abul Fazal Part - II, Jamia Nagar New Delhi - 110025</p>
            </div>
            <span class="bottom_corners"></span> </div>
        </div>
        <div class="col-md-4 col-sm-6 text-center">
          <div class="vertical_box padding-btop50 padding-rtl40 corner" style="min-height:290px;">
            <div><i class="zmdi zmdi-email"></i></div>
            <div class="padding-top20">
              <h3>Email Us</h3>
              <p><a href="mailto: info@aismgroup.com">info@aismgroup.com</a></p>
              
            </div>
            <span class="bottom_corners"></span> </div>
        </div>
        <div class="col-md-4 col-sm-6 text-center">
          <div class="vertical_box padding-btop50 padding-rtl40 corner bg_gray" style="min-height:290px;">
            <div><i class="zmdi zmdi-phone-in-talk"></i></div>
            <div class="padding-top20">
              <h3>Contact Us</h3>
              <p><a href="tel:01145661931">+91-11 45661931</a>, <a href="tel:9110185634">+91-9110185634</a></p>
              <p class="margin0"></p>
            </div>
            <span class="bottom_corners"></span> </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="sction_style5 padding-top20 padding-bot50 bg_gray" id="form_id_1">
    <div class="container">
      <div class="row clearfix">
          
        <div class="col-md-12 col-sm-12 no-minpadding">
          <form action="" name="frmcontact" id="frmcontact" method="post">
            
            <div class="col-md-12 col-sm-12 margin-top20">
              <div class="texBox-border0">
                <!-- <h2>Please sign in to send your information request</h2>-->
                <div class="title-botheading padding-top0 text-center">
                  <h2 class="margin0">GET IN TOUCH</h2>
                </div>
                <p>To ensure that you are a trade professional, your information will be verified by our team.</p>
              </div>
              <div class="texBox-border0">
                <div class="mbottom"></div>
                <div class="row">
                  <div class="col-md-6 col-xs-12 col-sm-12 form-group">
                    <input type="text" class="validate[required] form-control input-lg" data-prompt-position="topLeft" placeholder="First Name.." name="contact_fname" id="contact_fname" value="">
                  </div>
                  <div class="col-md-6 col-xs-12 col-sm-12 form-group">
                    <input type="text" class="validate[required] form-control input-lg" data-prompt-position="topLeft" placeholder="Last Name.." name="contact_lname" id="contact_lname" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xs-12 col-sm-12 form-group">
                    <input type="text" name="contact_email" placeholder="Email.." class="validate[required,custom[email]] form-control input-lg" data-prompt-position="topLeft" id="contact_email" value="">
                  </div>
                  <div class="col-md-6 col-xs-12 col-sm-12 form-group">
                    <input type="tel" name="contact_contactno" placeholder="Phone number.." class="validate[required] form-control input-lg" data-prompt-position="topLeft" id="contact_contactno" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xs-12 col-sm-12 form-group">
                    <input type="text" name="contact_city" placeholder="City.." class="validate[required] form-control input-lg" data-prompt-position="topLeft" id="contact_city" value="">
                  </div>
                  <div class="col-md-6 col-xs-12 col-sm-12 form-group">
                    <input type="text" placeholder="Pin Code.." class="validate[required] form-control input-lg" id="contact_zipcode" data-prompt-position="topLeft" name="contact_zipcode" value="">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea name="contact_message" id="contact_message" class="validate[required] form-control" data-prompt-position="topLeft" rows="8" cols="80" placeholder="Describe your professional activity"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xs-12 col-sm-12 form-group">
				  <div id="RecaptchaField2"></div>
                   <!--<div class="g-recaptcha" data-sitekey="6LdkjLAUAAAAAA-FhjaSqyLMe6bTz6NpqTzwRZpq"></div>-->
                  <!--6LdkjLAUAAAAAK7qLNUROyNXMkc_vv-1QQGi5ezK-->
                  </div>
                  
                  
                </div>
               
               <input type="submit" value="Submit" class="btn_style2" id="btn_contact_submit">
			   <div id="errorMsgBox" style="text-align: center;"></div>
              </div>
            </div>
          </form>
        
      </div>
    </div>
  </div></section>
  <!--=====footer start=========-->
  <?php include_once('footer.php'); ?>
  <!--=====footer start end=========-->
</div>
<!--=====end-of-wrapper==========-->

  <style>
.successMsg{color:#008000; font-weight:bold;}
.errorMsg{color:#FF0000; font-weight:bold;}
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
	
	if(!emailReg.test(emailaddressVal))
	{
		////$("#UserEmail").after('<span class="error">Enter a valid email address.</span>');
		hasError = true;
	}

	if(hasError == true)
	{
		return false;
	}
	else
		return true;
	
}


$(document).ready(function()
{
	
	$("#frmcontact").submit(function()
	{
		if($('#contact_fname').val()=='' || $('#contact_fname').val()=='First Name')
		{
			alert("Please enter Your First Name.");
			$('#contact_fname').focus();
			return false;
		}
		if($('#contact_lname').val()=='' || $('#contact_lname').val()=='Last Name')
		{
			alert("Please enter Your Last Name.");
			$('#contact_lname').focus();
			return false;
		}
		if($('#contact_email').val()=='' || $('#contact_email').val()=='Email')
		{
			alert("Please enter Your Email ID.");
			$('#contact_email').focus();
			return false;
		}
		if($('#contact_email').val()!='')
		{
			if(!isValidEmailStrict($('#contact_email').val()))
			{
				alert("Please enter Valid Email ID.");
				$('#contact_email').focus();
				return false;
			}
		}
		if($('#contact_contactno').val()=='' || $('#contact_contactno').val()=='Contact Number')
		{
			alert("Please enter Your Contact Number");
			$('#contact_contactno').focus();
			return false;
		}
		if(isNaN($('#contact_contactno').val()))
		{
			alert("Please enter Valid Contact Number");
			$('#contact_contactno').focus();
			return false;
		}
		if($('#contact_contactno').val().length!=10)
		{
			alert("Please enter Valid Contact Number");
			$('#contact_contactno').focus();
			return false;
		}		
		if($('#contact_city').val()=='' || $('#contact_city').val()=='City')
		{
			alert("Please enter City.");
			$('#contact_city').focus();
			return false;
		}				
		if($('#contact_zipcode').val()=='' || $('#contact_zipcode').val()=='Pincode')
		{
			alert("Please enter Pin Code.");
			$('#contact_zipcode').focus();
			return false;
		}
		if($('#contact_message').val()=='' || $('#contact_message').val()=='Message')
		{
			alert("Please enter Message");
			$('#contact_message').focus();
			return false;
		}
		
		if (!grecaptcha.getResponse(recap_fld2))
		{
            alert('Please check the "I\'m not a robot" checkbox!');
		    return false;
        }
		
		$('#btn_contact_submit').attr('disabled','disabled');
		
		$.post("form-query.inc.php",{ actionrequired:'contact',contact_fname:$('#contact_fname').val(),contact_lname:$('#contact_lname').val(),contact_email:$('#contact_email').val(),contact_contactno:$('#contact_contactno').val(),contact_city:$('#contact_city').val(),contact_zipcode:$('#contact_zipcode').val(),contact_message:$('#contact_message').val(),captcha: grecaptcha.getResponse(recap_fld2),rand:Math.random() } ,function(data)
        {
			console.log(data);
			dataArray=data.split('|');
		  if(dataArray[0]=='yes') //if correct login detail
		  {
		  	$("#errorMsgBox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			 	 	$(this).html(dataArray[1]).removeClass().addClass('successMsg').fadeTo(500,1);
			  		$('#contact_fname').val('');
					$('#contact_lname').val('');
					$('#contact_contactno').val('');
					$('#contact_email').val('');
					$('#contact_city').val('');
					$('#contact_zipcode').val('');
					$('#contact_message').val('');
					grecaptcha.reset();
					setTimeout(function() {
					  $('#errorMsgBox').removeClass().html('');
					}, 3000);
					$('#btn_contact_submit').removeAttr('disabled');
			});	
		  }
		  else 
		  {
		  	$("#errorMsgBox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			 	 $(this).html(dataArray[1]).removeClass().addClass('errorMsg').fadeTo(500,1);
					$('#btn_contact_submit').removeAttr('disabled');
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});

});

</script>	
</body>
</html>
