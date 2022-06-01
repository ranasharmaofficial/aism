<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<title><?=$PageQry->page_meta_title?></title>

<meta name="description" content="<?=$PageQry->page_meta_description?>">

<meta name="keywords" content="<?=$PageQry->page_meta_keywords?>">

<?php include('headerstylelinks.php'); ?>
</head>

<body>

<div class="wrapper">

   <?php include_once('header.php'); ?>

  <section class="page_breadcrumbs ds color parallax about_us section_padding_top">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 text-center">

          <h2><?=$PageQry->page_meta_title?></h2>

          <ol class="breadcrumb highlightlinks">

            <li> <a href="<?php echo base_url(''); ?>"> Home </a> </li>

            <li class="active"><?=$PageQry->page_meta_title?></li>

          </ol>

        </div>

      </div>

    </div>

    <div class="ovelay_1"></div>

  </section>

  <section class="padding-btop50">

    <div class="container">

      <div class="row clearfix">

        <div class="col-md-12"> </div>

        <div class="col-md-12 col-sm-12">

          <div class="tittle_left">

            <h2 class="text-uppercase"><?=$PageQry->page_title?></h2>

          </div>
		<div class="col-md-9">
            <p><?=$PageQry->page_description?></p>
 
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
          


        </div>
           

        </div>

       

      </div>

        

    </div>

  </section>

  <!--=====footer start=========-->

  <?php include_once('footer.php'); ?>

  <!--=====footer start end=========-->

</div>


</body>

</html>
