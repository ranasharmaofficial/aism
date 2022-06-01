<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$PageQry->page_meta_title?></title>

<meta name="description" content="<?=$PageQry->page_meta_description?>">

<meta name="keywords" content="<?=$PageQry->page_meta_keywords?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/owl.carousel.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/fontawesome-all.css')?>">
  <link href="<?=base_url('assets/cork/font-awesome/css/font-awesome.min.html')?>" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/flaticon.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/cork/css/meanmenu.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/video.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/lightbox.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/progess.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/animate.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/style.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/cork/css/responsive.css')?>">
  <style>
    .abs input[type=text]{
      border:none;
      border-bottom:2px solid gray;
      margin-bottom:20px;
    } 

    select.form-control{
      border:none;
      outline:none;
      margin-bottom:20px;
      border-bottom:2px solid gray;
    }

    .front-mod{
      background-image:url('front-bg.html');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .abs {
      background-color: rgb(41 51 76);
    }

    .para p{
      font-size:12px;
    }
    .bg-primary {
      background-color: #FFA500!important;
    }
    .abs {
      background-color: #29334c;
    }
    .btn-success {
      color: #fff;
      background-color: #FFA500!important;
      border: none;
    }
    .text-light {
      color: #f8f9fa!important;
      background-color: #FFA500;
      padding: 5px 3px;
      border-radius: 4px;
    }
    .card-body.text-center {
      background-color: #29334c;
    }
    button.btn.btn-block.text-light.py-1 {
      background-color: #FFA500;
    }
  </style>
</head>
<body>
  <?php include('header.php');?>


  <div class="e-certifiacte">
    <div class="container">
      <div class="flashimage">
        <!-- <img src="./assets/img/course/bg-student-login.jpg" alt=""> -->
      </div>
      <div class="content">
        <h2>Digitally Signed Certificate for LBSTC Examinations</h2>
        <div class="verify">
          <a href="#">Verifiy Certificate Details </a>
        </div>

        <div class="notepints">
          <div class="imgFlex">
            <img src="assets/img/course/bc-1.jpg" alt="">
          </div>
          <ul>
            <li>Use <span>Adobe Reader</span> to download the Certificate.</li>
            <li>Use <span>Internet Explorer</span> to download the Certificate.</li>
            <li><a href="#"><span>Steps to Validate Digital Signature</span>. </a></li>

            <li class="lstmarqueee"><marquee>Digitally Signed Certificate for LBSTC Examinations</marquee></li>
          </ul>

          <div class="imgFlex">
            <img src="assets/img/course/bc-1.jpg" alt="">
          </div>
        </div>



        <div class="tableformate">
          <div class="tbl-row tbl-row1">
            <div class="tbl-cl tbl-cl1">
              <h4>Select type of <br> Certificate</h4>
            </div>
            <div class="tbl-cl tbl-cl2">
              <div class="tbl-clrow">
                <p><span>Regular</span> (CCC/BCC/NDLM & O/A/B/C etc.)</p>
                <p><span>Moduler</span> (only O/A/B/C module wise)</p>
              </div>
            </div>
          </div>
          <div class="tbl-row tbl-row-tab">
            <div class="tabbtn tabbtn1">
              <input type="radio" name=""> Regular Certificate
            </div>
            <div class="tabbtn tabbtn2">
              <input type="radio" name=""> Moduler Certificate
            </div>
          </div>
          <div class="RegularCertificate">
            <div class="tbl-row">
              <div class="col-title"><h5>Course For</h5></div>
              <div class="col-input">
                <select>
                  <option>Select...</option>
                  <option>One Select</option>
                  <option>Two Select</option>
                  <option>Three Select</option>
                  <option>Four Select</option>
                </select>
              </div>
            </div>

            <div class="tbl-row">
              <div class="col-title"><h5>Year</h5></div>
              <div class="col-input">
                <select>
                  <option>Select Year</option>
                  <option>2021</option>
                  <option>2020</option>
                  <option>2019</option>
                  <option>2018</option>
                </select>
              </div>
            </div>
            <div class="tbl-row">
              <div class="col-title"><h5>Month</h5></div>
              <div class="col-input">
                <select>
                  <option>Select Month</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                </select>
              </div>
            </div>
            <div class="tbl-row">
              <div class="col-title"><h5>Roll No.</h5></div>
              <div class="col-input">
                <input type="text" name="rollno" >
              </div>
            </div>
            <div class="tbl-row">
              <div class="col-title"><h5>Student DOB</h5></div>
              <div class="col-input">
                <input type="text" name="Student DOB" placeholder="DD/MM/YYYY">
              </div>
            </div>
            <div class="tbl-row">
              <div class="col-title"><h5>Captcha Image</h5></div>
              <div class="col-input">
                <img src="img/CaptchaImage.html" alt="">
              </div>
            </div>
            <div class="tbl-row">
              <div class="col-title"><h5>Captcha Code</h5></div>
              <div class="col-input">
               <input type="text" name="captch code">
             </div>
           </div>
           <div class="tbl-row">
            <div class="col-title"></div>
            <div class="col-input">
              <input class="submitt2" type="submit" value="SUBMIT">
              <button class="buttonn2" type="button">REFRESH</button>
            </div>
          </div>
        </div>
        <div class="ModulerCertificate">
          <div class="tbl-row">

          </div>
        </div>


      </div>
    </div>
  </div>
</div>

<div class="verifycode">
  <form>
    <div class="verifyTitle">
      <h4>Verify Code via Email OR SMS</h4>
    </div>

    <div class="tbl-row">
      <div class="col-title"><h5>Get Verification code on</h5></div>
      <div class="col-input">
       <div class="vcode">
         <input type="radio" name="E-Mail"> E-Mail
       </div>
       <div class="vcode">
         <input type="radio" name="Mobile"> Mobile
       </div>
     </div>
   </div>
   <div class="tbl-row">
    <div class="col-title"><h5>Your 10 digit Mobile Number</h5></div>
    <div class="col-input">
      <div class="sendsms">
        <input type="text" name="mobile no">
        <input type="button" class="vesms" value="Send SMS">
      </div>
    </div>
  </div>

  <div class="tbl-row">
    <div class="col-title"></div>
    <div class="col-input">
      <div class="sendsms">
        <input type="submit" value="SUBMIT">
      </div>
    </div>
  </div>
</form>
</div>
<?php include('footer.php');?>

<script src="<?=base_url('assets/cork/js/jquery-2.1.4.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/owl.carousel.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jarallax.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/lightbox.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jquery.meanmenu.js')?>"></script>
<script src="<?=base_url('assets/cork/js/scrollreveal.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jquery.counterup.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/waypoints.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jquery-ui.js')?>"></script>
<script src="<?=base_url('assets/cork/js/gmap3.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/switch.js')?>"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
<script src="<?=base_url('assets/cork/js/script.js')?>"></script>
<script src="<?=base_url('assets/cork/js/custom.js')?>"></script>
</body>
</html>