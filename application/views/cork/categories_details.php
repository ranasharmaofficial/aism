<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SEIKO eCommerce HTML 5 Template</title>
<meta name="author" content="">
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
      <div class="container">
        
        <div class="row">
          <div class="col-md-9">
            <div class="blog-post">              
              <div class="blog-content">
                <h2 class="blog-title"><?=$PostCatQry->post_title?></h2>                
                <div class="blog-text">
                <?=$PostCatQry->post_description?>
                </div>                
                <div class="block">
        <div class="container">
        <h2 class="blog-title">Related Videos</h2>   
          <div class="products-grid-wrapper isotope-wrapper">
            <div class="products-grid isotope two-in-row product-variant-5">
             
            <?php foreach($PostQry as $VideoRow){?>
              <div class="product-item large category1">
                <div class="product-item-inside">
                  <div class="product-item-info">
                    <div class="product-item-photo">
                      <div class="carousel-inside slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <?=$VideoRow->post_description?> </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"><a href="<?=base_url('post')?>/<?=$VideoRow->post_slug?>"><?=$VideoRow->post_title?></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">               
            <?php include('sidebar.php');?>       
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
