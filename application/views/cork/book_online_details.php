<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?=$BookView->meta_title?></title>
<meta name="description" content="<?=$BookView->meta_description?>">
<meta name="keywords" content="<?=$BookView->meta_keywords?>">
<link rel="stylesheet" href="<?=base_url('assets/cork/css/owl.carousel.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/cork/css/fontawesome-all.css')?>">
<link href="<?=base_url('assets/cork/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
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
      background-image:url('front-bg.jpg');
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
  <div class="inner-banner contact banner prfilee">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-9">
          <div class="">

            <div class="section-title mb0 headline text-left ">
              <div class="layer-1-3">
                <h2><?=$BookView->title?></h2>
              </div>
            </div>
            <p><?=$BookView->sub_title?></p>
            
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Banner --> 
  <section class="read-more1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="research-read-more1">
            <div class="readmore-inner">
              <!-- <img src="assets/img/profile/research-more1.png" alt="img"> -->
              <div class="enquireform">
                <div class="enquirenow">
                  <div class="card my-4">
                    <div class="cardIfo">
                      <h5>Enquire now</h5>
                    </div>
                    <div class="enquire-body">
                      <form method="POST" action="">
                        <div class="fulldiv">
                          <input type="text" class="form-control" placeholder="Name*" required="">
                        </div>
                        <div class="fulldivrow">
                          <div class="halfdiv">
                            <input type="text" class="form-control" placeholder="Email*" required="">
                          </div>
                          <div class="halfdiv">
                            <input type="text" class="form-control" placeholder="Phone*" required="">
                          </div>
                          <div class="halfdiv">
                            <input type="text" class="form-control" placeholder="Place*" required="">
                          </div>
                          <div class="halfdiv">
                            <input type="text" class="form-control" placeholder="Cource*" required="">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-success">ENQUIRE NOW</button> 
                      </form>
                    </div>
                  </div>  
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 research-read-more2">
          <div class="section-title mb0 headline text-left ">
            <div class="layer-1-3">
              <h2><?=$BookView->name?></h2>
            </div>
          </div>
          <div>
            <?=$BookView->description?>
          </div>

        </div>
      </div>
    </div>
  </section>
  <div style="clear:both;"></div>
  <div class="durationdfg">
    <div class="container">
      <div class="course-detail clearfix"> 
        <div class="duration fee clearfix">
          <div class="detail"> <span>Price:</span> ₹<?=$BookView->cost?> </div>
        </div>
        <div class="duration fee clearfix cnter">
          <a href="#" class="btn">Add to cart <span class="icon-more-icon"></span></a> 
        </div>
        
      </div>
    </div>
  </div>
  <div style="clear:both;"></div>

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