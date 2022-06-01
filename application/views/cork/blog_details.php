<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <title><?=$PostView->post_meta_title?></title>

<meta name="description" content="<?=$PostView->post_meta_description?>">

<meta name="keywords" content="<?=$PostView->post_meta_keywords?>">

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

  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"> -->

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

  <div class="inner-banner contact services">

    <div class="container">

      <div class="row">

        <div class="col-sm-8 col-lg-9">

          <div class="">

            <div class="section-title mb0 headline text-left ">

              <div class="layer-1-3">

                <h2><?=$PostView->post_title?></h2>

              </div>

            </div>



            <p><?=$PostView->post_sub_title?></p>

          </div>

        </div>

        

      </div>

    </div>

  </div>

  <div class="single-blog-sec1">

    <div class="container">

      <div class="row">

        <div class="col-md-8">

          <div class="blog-img1">

            <img src="<?=base_url('assets/images/post')?>/<?=$PostView->post_image?>" alt="single-blog">

          </div>

          <?php

                $originalDate = $PostView->post_date;

                $dDate = date("d", strtotime($originalDate));

                $mDate = date("M", strtotime($originalDate));

                $yDate = date("Y", strtotime($originalDate));

                ?>

          <div class="article">

            <h1><?=$PostView->post_title?> <span><?=$dDate?> <?=$mDate?>. <?=$yDate?> - Posted by:admin</span></h1>

            <hr>

           <?=$PostView->post_description?>

          </div>

           <hr>

  



</div>

<div class="col-md-4">

<?php  $RCatQry = $this->db->where(['status'=>1])->limit(10)->get('tbl_post_category')->result();?>

  <div class="list-category-group">

    <ul class="list-group">

      <?php foreach($RCatQry as $RCatRow){?>

      <li class="list-group-item"><a href="<?=base_url('categories')?>/<?=$RCatRow->category_slug?>"> <?=$RCatRow->category_name?></a></li>

  <?php }?>

    </ul>

  </div>

  <?php  $RPostQry = $this->db->where(['status'=>1])->limit(10)->get('tbl_post')->result();?>

  <div class="list-category-group2">

    <ul class="list-group">

    	<?php foreach($RPostQry as $RPostRow){?>

      <li class="list-group-item "><a href="<?=base_url('post')?>/<?=$RPostRow->post_slug?>/<?=$RPostRow->id?>"> <?=$RPostRow->post_title?></a></li>

  <?php }?>

    </ul>

  </div>

</div>

</div>

</div>

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