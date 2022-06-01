<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$CoursesView->meta_title?></title>

<meta name="description" content="<?=$CoursesView->meta_description?>">

<meta name="keywords" content="<?=$CoursesView->meta_keywords?>">
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
                <h2><?=$CoursesView->name?></h2>
              </div>
            </div>
            <p><?=$CoursesView->sub_title?></p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <section class="allcourses">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 innclm">
          <div class="clmbox">
            <div class="sidenav sidenav1">
              <h3>CATEGORIES :</h3>
              <div class="filt">
                <ul>
                    <?php foreach($getCoursesByCategory as $val) { ?>
                      <li class="cat-item cat-item-14">
                        <i class="fas fa-location-arrow"></i>
                            <a href="<?=base_url('course/'.$val->slug.'/'.$val->id);?>"><?=$val->name; ?> <span></span></a>
                      </li>
                    <?php } ?>
                </ul>
              </div>
            </div>
            
          </div>
          
        </div>
        <div class="col-sm-8 innclm2">
          <section id="primary" class="page-with-sidebar with-left-sidebar">
            <div class="dt-sc-course-details">
              <div class="dt-sc-course-image">
                <img src="<?=base_url('assets/cork/img/courses1.jpg')?>">
                <div class="featured-post">
                    <?php if($CoursesView->featured == 1) { ?>
                    <span class="fa fa-trophy"> </span> <span class="text"> Featured </span>
                    <?php } ?>
                </div>
                <div class="dt-sc-certificate-badge">
                    <span class="certificate" onclick="window.location='<?=$CoursesView->certificate_link; ?>'" ></span>
                    <span class="badge" onclick="window.location='<?=$CoursesView->badge_link; ?>'" ></span>
                </div>
              </div>
                <div class="dt-sc-course-details-inner">

                  <h3><?=$CoursesView->name; ?></h3>


                  <div class="entry-metadata">

                    <div class="dt-sc-meta-container">
                      <p>
                          <?php if($CoursesView->filter == 2) { ?>
                          <i class="fa fa-location-arrow"> </i> <a href="#" rel="tag">Reg.Fee:<?=$CoursesView->course_fee; ?>/-</a>
                          <?php } ?>
                      </p>
                      <p><i class="fa fa-book"> </i>
                          <?=$CoursesView->lessons; ?> Lessons
                      </p>
                      <p><i class="fa fa-clock-o"> </i> <?=$CoursesView->duration; ?></p>
                    </div>
                    <div class="dt-sc-status-container">
                        <?php if($CoursesView->filter == 2) { ?>
                      <a href="<?=$CoursesView->purchase_now_link; ?>" target="_self" class="dt-sc-button small filled">
                          <i class="fa fa-shopping-cart"></i> RS.<?=$CoursesView->course_fee; ?> - Purchase Now</a>
                        <?php } ?>
                    </div>
                    </div>
                  </div>
                </div>


                <div class="list-product-discription">
                    <?=$CoursesView->description; ?>
                </div>

              </section>
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
        <script src="<?=base_url('assets/cork/js/script.js')?>"></script>
        <script src="<?=base_url('assets/cork/js/custom.js')?>"></script>
      </body>
      
</html>