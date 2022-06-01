<?php
if (! $this->session->userdata('logged_in')==TRUE)
{
redirect('juggler/login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Admin Dashboard</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
<link href="<?=base_url('assets/juggler/assets/css/loader.css')?>" rel="stylesheet" type="text/css" />
<script src="<?=base_url('assets/juggler/assets/js/loader.js')?>"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="<?=base_url('assets/juggler/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/juggler/assets/css/plugins.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/juggler/plugins/apex/apexcharts.css')?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/juggler/assets/css/dashboard/dash_1.css')?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header-container fixed-top">
  <?php include('header.php');?>
</div>
<div class="main-container" id="container">
  <div class="overlay"></div>
  <div class="search-overlay"></div>
  <?php include('left_nav.php');?>
  <div id="content" class="main-content">
    <div class="layout-px-spacing dash_icon">
      <div class="row layout-top-spacing">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five green">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/change-password')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/change-password')?>">Change Password</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five red">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/social-media')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/social-media')?>">Social Media</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five yellow">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                 <a href="<?=base_url('juggler/information')?>"> <p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/information')?>">Information</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five blue">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/pages')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/pages')?>">Pages</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five sky">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/post')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/post')?>">Post</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five orange">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/post/category')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/post/category')?>">Post Category</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five purple">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/services')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/services')?>">Services</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five magenta">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/category')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/category')?>">Services Category</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five malachite">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/portfolio')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/portfolio')?>">Portfolio</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five violet">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/testimonials')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/testimonials')?>">Testimonials</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five maroon">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/enquiry')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/enquiry')?>">Enquiry</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-five chocolate">
            <div class="widget-content">              
              <div class="w-content">
                <div class="">
                  <a href="<?=base_url('juggler/users')?>"><p class="task-left"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></p></a>
                  <p class="task-completed"><span><a href="<?=base_url('juggler/users')?>">Users</a></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
  </div>
</div>
<script src="<?=base_url('assets/juggler/assets/js/libs/jquery-3.1.1.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/bootstrap/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/assets/js/app.js')?>"></script>
<script>
        $(document).ready(function() {
            App.init();
        });
    </script>
<script src="<?=base_url('assets/juggler/assets/js/custom.js')?>"></script>
<script src="<?=base_url('assets/juggler/plugins/apex/apexcharts.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/assets/js/dashboard/dash_1.js')?>"></script>
</body>
</html>
