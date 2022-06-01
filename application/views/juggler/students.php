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
<title>Student</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="<?=base_url('assets/juggler/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/juggler/assets/css/plugins.css')?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/juggler/plugins/table/datatable/datatables.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/juggler/plugins/table/datatable/dt-global_style.css')?>">
<style>
.bg-confirmed {
	background-color: #17a2b8;
	border-color: #17a2b8;
	color: #fff;
	font-size:10px;
}
.btn{padding:6px;}
</style>
</head>
<body class="sidebar-noneoverflow">
<div class="header-container fixed-top">
  <?php include('header.php');?>
</div>
<div class="main-container" id="container">
  <div class="overlay"></div>
  <div class="cs-overlay"></div>
  <div class="search-overlay"></div>
  <?php include('left_nav.php');?>
  <div id="content" class="main-content">
    <div class="layout-px-spacing">
      <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">         
          <div class="widget-content widget-content-area br-6">
          <div class="col-xl-12 col-lg-12 col-sm-12"><?php 
					  echo $this->session->tempdata('success');
					  echo $this->session->tempdata('error');
				?>
         </div> 
          <div class="col-xl-12 col-lg-12 col-sm-12"><a href="<?=base_url('juggler/student_zone/add')?>" class="btn btn-secondary mb-2 pull_right">Add Student</a></div>
            <div class="table-responsive mb-4 mt-4">           
              <table id="zero-config" class="table table-hover" style="width:100%">
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>ACK No.</th>
                    <th>Admitted Course</th>
                    <th>Session</th>
                    <th>DOB</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php 
				  $s=1;
				 foreach($PageQry as $PageRow){
					$stEnrData = $this->db->where('student_id',$PageRow->id)->get('tbl_enrollment')->num_rows();
					$stAdData = $this->db->where('student_id',$PageRow->id)->get('tbl_admit_card')->num_rows();
					 ?>
                  <tr>
                    <td><?=$s?></td>
                    <td><?=$PageRow->name;?></td>
                    <td><?=$PageRow->student_ack_id;?></td>
                    <td><?=$PageRow->admitted_course;?></td>
                    <td><?=$PageRow->session;?></td>                   
                    <td><?=$PageRow->dob;?></td>                                    
                    <td>
					<?php if($stEnrData >0){?>
						<a href="#" onClick="return confirm('Allready Generated, if You want to generate before delete Generated Enrollment!');"><div class="btn bg-confirmed btn-xs no-margin">Gen Enroll</div></a>
					<?php }else{?>
						<a href="<?=base_url('juggler/student_zone/gen_enroll')?>/<?=$PageRow->id?>" ><div class="btn bg-confirmed btn-xs no-margin">Gen Enroll</div></a>
					<?php }?>
					<?php if($stAdData > 0){?>
						<a href="#" onClick="return confirm('Allready Generated, if You want to generate again before delete Generated Admit Card!');"><div class="btn bg-confirmed btn-xs no-margin">Gen Admit</div></a>
					<?php }else{?>
						<a href="<?=base_url('juggler/student_zone/gen_admit')?>/<?=$PageRow->id?>" ><div class="btn bg-confirmed btn-xs no-margin">Gen Admit</div></a>
					<?php }?>
						<a href="<?=base_url('juggler/student_zone/edit')?>/<?=$PageRow->id?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a> <a href="javascript:void(0);" onClick="confirm('Do you want to delete this?') && deleteItem(<?=$PageRow->id?>)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                  </tr>
                 <?php $s++; } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>ACK No.</th>
                    <th>Admitted Course</th>
                    <th>Session</th>
                    <th>DOB</th>
                    <th>Fathers Name</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
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
<script src="<?=base_url('assets/juggler/plugins/table/datatable/datatables.js')?>"></script>
<script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [10, 20, 50],
            "pageLength": 10 
        });
    </script>
    <script>
function deleteItem(id)
{
  window.location.href = "<?=base_url('juggler/student_zone/delete/')?>"+id;
}
</script>
</body>
</html>
