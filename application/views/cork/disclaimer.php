<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="<?=$PageQry->page_meta_keywords?>" />
<meta name="description" content="<?=$PageQry->page_meta_description?>" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
<?=$PageQry->page_meta_title?>
</title>
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,400i,500,500i,600,600i,700,700i&display=swap">
<link rel="stylesheet" href="<?=base_url('assets/cork/css/font-awesome/all.min.css')?>" />
<link rel="stylesheet" href="<?=base_url('assets/cork/css/flaticon/flaticon.css')?>" />
<link rel="stylesheet" href="<?=base_url('assets/cork/css/bootstrap/bootstrap.min.css')?>" />
<link rel="stylesheet" href="<?=base_url('assets/cork/css/owl-carousel/owl.carousel.min.css')?>" />
<link rel="stylesheet" href="<?=base_url('assets/cork/css/animate/animate.min.css')?>"/>
<link rel="stylesheet" href="<?=base_url('assets/cork/css/magnific-popup/magnific-popup.css')?>" />
<link rel="stylesheet" href="<?=base_url('assets/cork/css/style.css')?>" />
</head>
<body>
<?php include('header.php')?>
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center mb-0">
          <h1>
            <?=$PageQry->page_name?>
          </h1>
          <p>
            <?=$PageQry->page_title?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="space-pb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?=$PageQry->page_description?>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php')?>
<div id="back-to-top" class="back-to-top">up</div>
<script src="<?=base_url('assets/cork/js/jquery-3.4.1.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/popper/popper.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/bootstrap/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jquery.appear.js')?>"></script>
<script src="<?=base_url('assets/cork/js/counter/jquery.countTo.js')?>"></script>
<script src="<?=base_url('assets/cork/js/owl-carousel/owl.carousel.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jarallax/jarallax.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/jarallax/jarallax-video.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/magnific-popup/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/horizontal-timeline/horizontal-timeline.js')?>"></script>
<script src="<?=base_url('assets/cork/js/shuffle/shuffle.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/custom.js')?>"></script>
</body>
</html>
