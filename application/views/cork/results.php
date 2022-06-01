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
  <div class="clearfix"></div>
  
    <section class="resultss">
  <div class="container-fluidd">
    <div class="col-sm-78">
      <div class="resultsShow">
        <h3><?=$PageQry->page_sub_title;?></h3>

    <?php
      $foo = $this -> session -> userdata('result_key');

      //error_reporting(0);
      echo $this->session->tempdata('success');
      echo $this->session->tempdata('exit');
      echo $this->session->tempdata('error');
    ?>
        <form action="<?=base_url('createpdf/index');?>" method="post" target="_blank">
          <div class="form_group">
            <label>Enter Enrollement No. :</label>
            <input type="text" placeholder="Enter Your Enrollement!" value="" required name="enroll">
               <!-- <input type="text" placeholder="Enter Your Enrollement!" value="<?=$enroll;?>" required name="enroll"> -->

          </div>
          <div class="form_group2">
      <?php
        $min_number = 1;
        $max_number = 9;
        $random_number1 = mt_rand($min_number, $max_number);
        $random_number2 = mt_rand($min_number, $max_number);
      ?>
            <label>Sum the numbers :</label>
                <input type="text" name="captchaResult" required>
                <div class="captchno">
                <span class="first-no"><?=$random_number1;?></span>
                <span class="plus-no">+</span>
                <span class="last-no"><?=$random_number2;?></span>

                <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
                <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
            </div>
          </div>

          <div class="GetResult">
      <input type="submit" name="sb" value="Get Result">
      </div>
        </form>
      </div>
    </div>
    <div class="col-sm-56" style="height: 700px; ">
      <?php
      if(isset($foo))
      {
          ?>
          <iframe width="500px" height="230px" src="<?=$foo?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 30px; "></iframe>

          <!--  <iframe src="<?=$foo?>" width="100%" height="auto">
            </iframe> -->
          <?php
      }
      else
      {
        ?>
        <img src="<?=base_url('assets/cork/img/course/bg-student-login.jpg');?>" alt="">
        <?php
      }
      ?>
      
    </div>
  </div>
</section>


  <!-- <section class="download-certificate">
    <div class="container">
      

      <div class="row">
        <div class="col-sm-9">
          <div class="certificatedetail certificatedetail1">
            <div class="schparagrap">
              <h1>Results</h1>

              <div class="resultsTable">
                <div class="table-RRow table-RRowhd">
                  <div class="tbSno">S.NO.</div>
                  <div class="tbTitle">Title</div>
                  <div class="tbResult">Results</div>
                </div>
                <div class="table-RRow table-RRowhdNOTCLOR">
                  <div class="tbSno">1</div>
                  <div class="tbTitle">BCC Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowCLOR">
                  <div class="tbSno">2</div>
                  <div class="tbTitle">CCC Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowhdNOTCLOR">
                  <div class="tbSno">3</div>
                  <div class="tbTitle">VLE Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowCLOR">
                  <div class="tbSno">4</div>
                  <div class="tbTitle">Cybergram Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowhdNOTCLOR">
                  <div class="tbSno">5</div>
                  <div class="tbTitle">IRDA-PoS Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowCLOR">
                  <div class="tbSno">6</div>
                  <div class="tbTitle">eInclusion Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowhdNOTCLOR">
                  <div class="tbSno">7</div>
                  <div class="tbTitle">MOPR Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowCLOR">
                  <div class="tbSno">8</div>
                  <div class="tbTitle">eInclusion Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowhdNOTCLOR">
                  <div class="tbSno">9</div>
                  <div class="tbTitle">WDLP Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowCLOR">
                  <div class="tbSno">10</div>
                  <div class="tbTitle">eVidya Examination</div>
                  <div class="tbResult"><a href="#" class="download-prospectus">View Results</a></div>
                </div>
                <div class="table-RRow table-RRowhdNOTCLOR">
                  <div class="tbSno">11</div>
                  <div class="tbTitle">Theory Examination (O,A,B,C Level)</div>
                  <div class="tbResult">
                    <ul>
                      <li><a href="#">Results</a></li>
                      <li><a href="#">Retotalling</a></li>
                      <li><a href="#">Disclosure of Answer Script</a></li>
                    </ul>
                  </div>
                </div>
              </div>


            </div>

            

          </div>
        </div>
        <div class="col-sm-3">
          <div class="quicklinks">
            <h2>Quick Links</h2>
            <ul>
              <li><a href="#">Download Center Registration</a></li>
              <li><a href="#">Download Student Registration</a></li>
              <li><a href="#">Download Any Desk Software</a></li>
              <li><a href="#">Download Theory Question Sample</a></li>
              <li><a href="#">Download Practical Question Sample</a></li>
            </ul>
          </div>
          <div class="adsbanner">
            <div class="owl-carousel owl-theme adsimag">
              <div class="item"><img src="assets/img/ads1.png" alt=""></div>
              <div class="item"><img src="assets/img/ads2.png" alt=""></div>
              <div class="item"><img src="assets/img/ads3.png" alt=""></div>
              <div class="item"><img src="assets/img/ads4.png" alt=""></div>
              <div class="item"><img src="assets/img/ads5.png" alt=""></div>
            </div>
          </div> 


        </div>
      </div>


    </div>
  </section> -->
  <div class="clearfix"></div>
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

  <script>
    $('.adsimag').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:true,
      autopaly:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:1
        }
      }
    })
  </script>
<style>
  viewer-pdf-sidenav#sidenav {
    display: none;
}
 .resultss iframe {
    height: 700px;
} 
viewer-thumbnail, viewer-pdf-sidenav#sidenav, #sidenav-container{
    display: none;
}
#sidenav-container{display: none !important;}
#main { 
    width: 100%;
}

</style>
</body>
</html>