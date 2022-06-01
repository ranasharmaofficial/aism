<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?=$CategoryQry->category_name?></title>
      <meta name="description" content="<?=$CategoryQry->category_name?>">
      <meta name="keywords" content="<?=$CategoryQry->category_name?>">
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
                           <h2><?=$CategoryQry->category_name?></h2>
                        </div>
                     </div>
                     <p><?=$CategoryQry->category_name?></p>
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
                     </div>
                  </div>
               </div>
               <div class="col-md-6 research-read-more2">
                  <div class="section-title mb0 headline text-left ">
                     <div class="layer-1-3">
                        <h2><?=$CategoryQry->category_name?></h2>
                     </div>
                  </div>
                  <div>
                     <?=$CategoryQry->description?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div style="clear:both;"></div>
      <section id="best-course" class="best-course-section">
         <div class="container">
            <div class="section-title mb45 headline text-center "  >
               <span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
               <h2>Browse Our<span> Best Course.</span></h2>
            </div>
            <div class="best-course-area mb45">
               <div class="row">
                  <?php foreach($CourseQry as $FCourseRow){?>
                  <div class="col-md-3">
                     <div class="best-course-pic-text relative-position "  >
                        <div class="best-course-pic relative-position">
                           <img src="<?=base_url('assets/images/courses')?>/<?=$FCourseRow->image?>" alt="">
                           <div class="trend-badge-2 text-center text-uppercase"> <i class="fas fa-bolt"></i> <span>Trending</span> </div>
                           <div class="course-price text-center gradient-bg"> <span>INR <?=$FCourseRow->course_fee?></span> </div>
                           <div class="course-rate ul-li">
                              <ul>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                              </ul>
                           </div>
                           <div class="course-details-btn"> <a href="<?=base_url('course')?>/<?=$FCourseRow->slug?>/<?=$FCourseRow->id?>">COURSE DETAIL <i class="fas fa-arrow-right"></i></a> </div>
                           <div class="blakish-overlay"></div>
                        </div>
                        <div class="best-course-text">
                           <div class="course-title mb20 headline relative-position">
                              <h3><a href="<?=base_url('course')?>/<?=$FCourseRow->slug?>/<?=$FCourseRow->id?>"><?=$FCourseRow->name?></a></h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
         </div>
      </section>
      <div style="clear:both;"></div>
      <section class="how-apply how-apply2">
         <div class="container">
            <div class="section-title mb20 headline text-center ">
               <span class="subtitle text-uppercase">THERE ARE MANY WAYS TO LEARN</span>
               <h2><span>How to Apply</span></h2>
            </div>
            <ul class="row">
               <?php 
                  $ap=1;
                  
                  foreach($ApplyQry as $ApplyRow){?>
               <li class="col-sm-4 <?php if($ap==1){echo 'active';}?>">
                  <div class="icon-block"> <span class="num"><?=$ap?></span> <img src="<?=base_url('assets/images/apply')?>/<?=$ApplyRow->image?>" alt="<?=$ApplyRow->name?>"></div>
                  <h3><?=$ApplyRow->name?></h3>
                  <?=$ApplyRow->description?>
               </li>
               <?php $ap++;}?>
            </ul>
            <div class="button-wrapper"> <a href="apply-online-2.html" class="btn">apply now <span class="icon-more-icon"></span></a> </div>
         </div>
      </section>
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