<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>AISM Group</title>
<?php include('headerstylelinks.php'); ?>
</head>
<body>
<div class="wrapper">
   <?php include_once('header.php'); ?>
  <!-- container -->
  <section class="page_breadcrumbs ds color parallax  iosh_bg section_padding_top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Cirtificate Courses</h2>
          <ol class="breadcrumb highlightlinks">
            <li> <a href="<?= base_url(''); ?>"> Home </a> </li>
            <li><a href="#">IOSH Courses</a></li>
            <li class="active">Cirtificates Courses</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ovelay_1"></div>
  </section>
  <section class="padding-top50 sction_style2 padding-bot30">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="tittle_left">
            <h2>IOSH Course Details</h2>
          </div>
        </div>
        <div class="col-md-7 col-sm-6 text-justify">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p class="margin0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-5 col-sm-6">
          <div class="margin-bot20 margin-top10 about-us-img"><img src="images/nebosh-hsw.jpg" class="img-responsive" alt="" title="" /></div>
        </div>
        <div class="col-md-12">
          <h2>Course Overview</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>
  <!--<section class="sction_style2 padding-top20 padding-bot50 bg_gray" id="form_id_1">
    <div class="container">
      <div class="row clearfix">
        <form action="../../dynd.php" name="frmenquiry" id="frmenquiry" method="post">
          <div class="col-md-12 col-sm-12 margin-top20">
            <div class="texBox-border0">
              <div class="title-botheading padding-top0 tittle_left">
                <h2 class="margin0">Enquiry Now</h2>
              </div>
              <p>To ensure that you are a trade professional, your information will be verified by our team.</p>
            </div>
          </div>
          <div class="clearfix">
            <div class="col-md-6 col-xs-12 col-sm-12 padding-bot30">
              <input type="text" class="validate[required] form-control input-lg" data-prompt-position="topLeft" placeholder="Name.." name="sender_first_name" id="sender_first_name" value="">
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12 padding-bot30">
              <input type="tel" name="sender_phoneno" placeholder="Phone number.." class="validate[required] form-control input-lg" data-prompt-position="topLeft" id="sender_phoneno" value="">
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12 padding-bot30">
              <input type="text" name="sender_email" placeholder="Email Address.." class="validate[required,custom[email]] form-control input-lg" data-prompt-position="topLeft" id="sender_email" value="">
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12 padding-bot30">
              <input type="text" name="sender_city" placeholder="Subject.." class="validate[required] form-control input-lg" data-prompt-position="topLeft" id="sender_city" value="">
            </div>
          </div>
          <div class="col-md-12 padding-bot30">
            <textarea name="sender_activity" id="sender_activity" class="validate[required] form-control" data-prompt-position="topLeft" rows="8" cols="80" placeholder="Type Your Message here."></textarea>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12 form-group padding-bot20">
            <input type="text" class="validate[required] form-control input-lg" placeholder="Enter Captcha Code.." data-prompt-position="topLeft" name="sender_captcha" id="sender_captcha">
          </div>
          <div class="col-sm-6 col-md-2 col-xs-6 form-group"> <img id="cimgcaptcha" alt="captchasecimg" title="Captcha Code requirede" src="images/captchasecimg.jpg" class="img-responsive"> </div>
          <div class="col-sm-6 col-md-3 col-xs-6 form-group">
            <button type="button" class="btn_style6" onClick="reloadCaptcha('cimgcaptcha','','../../captchasecimg.php?width=153&amp;height=45&amp;characters=5')"><i class="zmdi zmdi-refresh"></i> &nbsp; &nbsp;Refresh</button>
          </div>
          <div class="clear"></div>
          <div class="col-md-12">
            <button type="submit" class="btn_style2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>-->
  <!--=====footer start=========-->
  <?php include_once('footer.php'); ?>
  <!--=====footer start end=========-->
</div>

</body>
</html>
