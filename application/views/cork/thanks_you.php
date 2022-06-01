<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$PageQry->page_meta_title?></title>
<meta name="description" content="<?=$PageQry->page_meta_description?>">
<meta name="keywords" content="<?=$PageQry->page_meta_keywords?>">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<link href="<?=base_url('assets/cork/js/vendor/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/js/vendor/slick/slick.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/js/vendor/swiper/swiper.min.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/js/vendor/magnificpopup/dist/magnific-popup.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/js/vendor/nouislider/nouislider.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/js/vendor/darktooltip/dist/darktooltip.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/css/animate.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/css/style.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/css/megamenu.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/cork/fonts/icomoon-reg/style.css')?>" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>
<body class="boxed">
<div class="fixed-btns">
  <a href="#" class="top-fixed-btn back-to-top"><i class="icon icon-arrow-up"></i></a>
</div>
<div id="wrapper">
  <div class="page-wrapper">
    <?php include('header.php')?>
    <main class="page-main">
      <div class="block">
        <div class="container">
          <ul class="breadcrumbs">
            <li><a href="<?=base_url('/')?>"><i class="icon icon-home"></i></a></li>
            <li>/<span><?=$PageQry->page_name?></span></li>
          </ul>
        </div>
      </div>
      <div class="block">
        <div class="container">
          <div class="title center">
            <h1><?=$PageQry->page_name?></h1>
          </div>
        </div>
      </div>
      <div class="block fullboxed parallax" data-parallax="scroll" data-image-src="images/block-bg-1.jpg">
        <div class="container">
          <div class="row">            
            <div class="col-sm-12">
              <div class="text-wrapper text-lg">
               <?=$PageQry->page_description?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('footer.php')?>
  </div>
</div>
<script src="<?=base_url('assets/cork/js/vendor/jquery/jquery.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/bootstrap/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/swiper/swiper.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/slick/slick.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/parallax/parallax.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/isotope/isotope.pkgd.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/magnificpopup/dist/jquery.magnific-popup.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/countdown/jquery.countdown.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/nouislider/nouislider.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/ez-plus/jquery.ez-plus.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/tocca/tocca.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/scrollLock/jquery-scrollLock.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/darktooltip/dist/jquery.darktooltip.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/vendor/instafeed/instafeed.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/megamenu.min.js')?>"></script>
<script src="<?=base_url('assets/cork/js/app.js')?>"></script>
</body>
</html>
