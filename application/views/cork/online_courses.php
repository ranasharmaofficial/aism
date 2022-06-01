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

  <div class="inner-banner contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="content">
            <div class="section-title mb0 headline text-left">
              <div class="layer-1-3">
                <h2>Our<span> Courses</span></h2>
              </div>
            </div>
            <p><?=$PageQry->page_sub_title?></p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <section class="allcourses">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 innclm">
          <?php include('side_course.php');?>
          
        </div>
        <div class="col-sm-8 innclm2">
          <div class="row">
            <?php foreach($CoursesQry as $CoursesRow){?>
            <div class="col-md-4 column">
            <div class="col-mcourses">
              <div class="imgdetail">
                <div class="imgcourses">
                  <img src="<?=base_url('assets/images/courses')?>/<?=$CoursesRow->image?>" alt="<?=$CoursesRow->name?>">
                </div>
                <div class="dt-sc-course-overlay">
                  <a title="" href="<?=base_url('course')?>/<?=$CoursesRow->slug?>/<?=$CoursesRow->id?>" class="dt-sc-button small white"> View Course</a>
                </div>
              </div>

              <div class="detailss">
                <span class="dt-sc-course-price"><span class="amount"><?=$CoursesRow->filter == 2 ? "Paid" : "Free"; ?></span></span>

                <h5><a href="<?=base_url('course')?>/<?=$CoursesRow->slug?>/<?=$CoursesRow->id?>" title=""><?=$CoursesRow->name?></a></h5>
                <div class="dt-sc-certificate-badge"><span class="certificate"></span><span class="badge"></span></div>
                <div class="dt-sc-certificate-badge"><span class="certificate"></span><span class="badge"></span></div>

                <div class="dt-sc-course-meta">
                  <!-- <p>  <a href="#" rel="tag">Education</a>  </p>
                  <p> 5&nbsp;Lessons </p> -->
                </div>
              </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
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