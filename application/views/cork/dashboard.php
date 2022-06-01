<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dashboard</title>
      <meta name="description" content="Dashboard">
      <meta name="keywords" content="Dashboard">
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
      <section class="apply-online1">
         <div class="container">
            <div class="row">
               <div class="col-3">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profile</a>
                     </li>
                     <li class="nav-item lession_nav">
                        <a class="nav-link" data-toggle="tab" href="#course" role="tab" aria-controls="course">Course</a>
                     </li>
                     <?php $LessionQry = $this->db->where(['ccid'=>$OrderQry->course_id])->get('tbl_lession')->result();
                        foreach($LessionQry as $LessionRow){
                        ?>
                     <li class="nav-item lession_nav">
                        <a class="nav-link disabled" data-toggle="tab" href="#lession<?=$LessionRow->id?>" role="tab" aria-controls="lession"><?=$LessionRow->name?></a>
                     </li>
                     <?php }?>
                     <li class="nav-item">
                        <a class="nav-link disabled" data-toggle="tab" href="#certificate" role="tab" aria-controls="certificate">Certificate</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('login/logout')?>">Log Out</a>
                     </li>
                  </ul>
               </div>
               <div class="col-9">
                  <div class="tab-content">
                     <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card">
                           <div class="card-body text-center">
                              <h4 class="text-light">Profile</h4>
                              <?php
                                 echo $this->session->flashdata('success');
                                 echo $this->session->flashdata('error');
                                 
                                 ?>
                              <form method="post" action="<?=base_url('dashboard/update_profile')?>" class="pt-2">
                                 <input type="hidden" name="id" value="<?=$ProfileQry->id?>">
                                 <div class="row">
                                    <div class="col-6">
                                       <input type="text" class="form-control" placeholder="First Name" name="first_name" value="<?=$ProfileQry->first_name?>">	
                                    </div>
                                    <div class="col-6">
                                       <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="<?=$ProfileQry->last_name?>">	
                                    </div>
                                    <div class="col-6">
                                       <input type="text" class="form-control" placeholder="Email Address" name="email" value="<?=$ProfileQry->email?>">	
                                    </div>
                                    <div class="col-6">
                                       <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="<?=$ProfileQry->phone?>">
                                    </div>
                                    <div class="col-12">
                                       <textarea name="address" class="form-control" placeholder="Address"><?=$ProfileQry->address?></textarea>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-block text-light py-1" style="background-color: #f18f3b">Update</button>	
                              </form>
                           </div>
                        </div>
                        <button type="button" class="btn btn-block btn-success nextbtn nexttab next">Next</button>
                     </div>
                     <div class="tab-pane" id="course" role="tabpanel">
                        <h4><?=$OrderQry->course?></h4>
                        <?php $ChapterQry = $this->db->where(['ccid'=>$OrderQry->course_id])->get('tbl_lession')->result();
                           $chp=1;
                           foreach($ChapterQry as $ChapterRow){
                           	?>
                        <strong>Chapter <?=$chp?>:</strong> <?=$ChapterRow->name?><br>
                        <?php $chp++; }?>
                        <button type="button" class="btn btn-block btn-success nextbtn nexttab next">Next</button>
                     </div>
                     <?php $LessionQry = $this->db->where(['ccid'=>$OrderQry->course_id])->get('tbl_lession')->result();
                        $ch=1;
                        foreach($LessionQry as $LessionRow){
                        	?>
                     <?php 
                        $QuizzesQry = $this->db->where(['lid'=>$LessionRow->id])->get('tbl_quizzes')->result();
                        ?> 
                     <div class="tab-pane" id="lession<?=$LessionRow->id?>" role="tabpanel">
                        <h4><?=$OrderQry->course?></h4>
                        <strong>Chapter <?=$ch?>:</strong> <strong><?=$LessionRow->name?></strong><br>
                        <?=$LessionRow->description?>
                        <br /><br />
                        <form method="post" action="<?=base_url('dashboard/insert_result')?>">
                           <?php 
                              $sn=1;
                              foreach($QuizzesQry as $QuizzesRow){?>
                           <input type="hidden" name="question[]" value="<?=$QuizzesRow->name?>">
                           <input type="hidden" name="user_id[]" value="<?=$this->session->userdata('user_id')?>">
                           <input type="hidden" name="lid[]" value="<?=$this->session->userdata('user_id')?>">
                           <table width="100%">
                              <tr>
                                 <td width="10"><strong><?=$sn?>.</strong></td>
                                 <td><strong><?=$QuizzesRow->name?> (<?=$QuizzesRow->marks?> Marks)</strong></td>
                              </tr>
                              <?php if($QuizzesRow->question_type==1){?>
                              <tr>
                                 <td width="10">&nbsp;</td>
                                 <td><input type="radio" name="quizzes_answer[]" value="<?=$QuizzesRow->option_one?>"> <?=$QuizzesRow->option_one?><br>
                                    <input type="radio" name="quizzes_answer[]" value="<?=$QuizzesRow->option_two?>"> <?=$QuizzesRow->option_two?><br>
                                    <input type="radio" name="quizzes_answer[]" value="<?=$QuizzesRow->option_three?>"> <?=$QuizzesRow->option_three?><br>
                                    <input type="radio" name="quizzes_answer[]" value="<?=$QuizzesRow->option_four?>"> <?=$QuizzesRow->option_four?>
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan="2"></td>
                              </tr>
                              <?php }else{?>
                              <tr>
                                 <td width="10">&nbsp;</td>
                                 <td>Write your answer<br>
                                    <textarea name="quizzes_answer[]" class="quizzes_area"></textarea>
                                 </td>
                              </tr>
                              <?php }?>
                           </table>
                           <?php $sn++; }?>
                           <button type="submit" class="btn btn-block btn-success nextbtn next">Submit</button>
                        </form>
                        <button type="button" class="btn btn-block btn-success nextbtn nexttab next">Next</button>
                     </div>
                     <?php $ch++; }?>
                     <div class="tab-pane" id="certificate" role="tabpanel"><strong><a href="<?=base_url('dashboard/certificate')?>" target="_blank">Click here to download your certificate</a></strong></div>
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
      <script>
         function bootstrapTabControl(){
                    var i, items = $('.nav-link'), pane = $('.tab-pane');
                    // next
                    $('.nexttab').on('click', function(){
                        for(i = 0; i < items.length; i++){
                            if($(items[i]).hasClass('active') == true){
                                break;
                            }
                        }
                        if(i < items.length - 1){
                            // for tab
                            $(items[i]).removeClass('active');
                            $(items[i+1]).addClass('active');
                            // for pane
                            $(pane[i]).removeClass('show active');
                            $(pane[i+1]).addClass('show active');
                        }
         
                    });
                   // Prev
                    $('.prevtab').on('click', function(){
                        for(i = 0; i < items.length; i++){
                            if($(items[i]).hasClass('active') == true){
                                break;
                            }
                        }
                        if(i != 0){
                            // for tab
                            $(items[i]).removeClass('active');
                            $(items[i-1]).addClass('active');
                            // for pane
                            $(pane[i]).removeClass('show active');
                            $(pane[i-1]).addClass('show active');
                        }
                    });
                }
                bootstrapTabControl();
         
      </script>
   </body>
</html>