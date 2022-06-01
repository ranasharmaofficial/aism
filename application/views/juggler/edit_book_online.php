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
<title>Update Book Online</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="<?=base_url('assets/juggler/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/juggler/assets/css/plugins.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/juggler/assets/css/scrollspyNav.css')?>" rel="stylesheet" type="text/css" />
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
<div class="header-container fixed-top">
  <?php include('header.php');?>
</div>
<div class="main-container" id="container">
  <div class="overlay"></div>
  <div class="cs-overlay"></div>
  <div class="search-overlay"></div>
  <?php include('left_nav.php');?>
  <div id="content" class="main-content">
    <div class="container">
      <div class="container">
        <div class="row">
          <div id="flHorizontalForm" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-header">
                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Edit Book Online Information</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <form method="post" action="<?=base_url('juggler/book_online/update')?>" name="form" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$PageQry->id?>">
                 
                  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" name="name" value="<?=$PageQry->name?>">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Title</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" name="title" value="<?=$PageQry->title?>">
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Sub Title</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea name="sub_title" class="form-control"><?=$PageQry->sub_title?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Slug</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" name="slug" value="<?=$PageQry->slug?>">
                    </div>
                  </div>
                 
                  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Cost</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" name="cost" value="<?=$PageQry->cost?>">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Meta Title</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" name="meta_title" value="<?=$PageQry->meta_title?>">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Meta Keywords</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea name="meta_keywords" class="form-control"><?=$PageQry->meta_keywords?></textarea>
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Meta Description</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea name="meta_description" class="form-control"><?=$PageQry->meta_description?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Short Description</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea name="short_description" class="form-control"><?=$PageQry->short_description?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Description</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea name="description" class="form-control"><?=$PageQry->description?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hPassword" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Image</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="file" class="form-control" name="image">
                      <?php if($PageQry->image!=''){?>
                      <br>
                      <img src="<?=base_url('assets/images/book-online')?>/<?=$PageQry->image?>" height="100" width="100">
                      <?php }?>
                    </div>
                  </div>
                   <fieldset class="form-group">
                  <div class="row">
                    <label class="col-form-label col-xl-3 col-sm-3 col-sm-2 pt-0">Featured</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <div class="form-check mb-2">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio1" name="featured" class="custom-control-input" value="1" <?php if(isset($PageQry->featured) && $PageQry->featured=='1'){ echo "checked"; } ?>>
                          <label class="custom-control-label" for="hRadio1">Yes</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio2" name="featured" class="custom-control-input" value="0" <?php if(isset($PageQry->featured) && $PageQry->featured=='0'){ echo "checked"; } ?>>
                          <label class="custom-control-label" for="hRadio2">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  </fieldset>
                  <fieldset class="form-group">
                  <div class="row">
                    <label class="col-form-label col-xl-3 col-sm-3 col-sm-2 pt-0">Status</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <div class="form-check">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio1" name="status" class="custom-control-input" value="1" <?php if(isset($PageQry->status) && $PageQry->status=='1'){ echo "checked"; } ?>>
                          <label class="custom-control-label" for="hRadio1">Active</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio2" name="status" class="custom-control-input" value="0" <?php if(isset($PageQry->status) && $PageQry->status=='0'){ echo "checked"; } ?>>
                          <label class="custom-control-label" for="hRadio2">InActive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  </fieldset>
                  <div class="form-group row">
                    <label for="hPassword" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">ID</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                     <?=$PageQry->id?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hPassword" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Modified</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                     <?=$PageQry->modified?>
                    </div>
                  </div>
                  <div class="form-group row">
                   <div class="col-sm-9 col-offset-3">
                      <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </div>
                  </div>
                </form>
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
<script src="<?=base_url('assets/juggler/plugins/highlight/highlight.pack.js')?>"></script>
<script src="<?=base_url('assets/juggler/assets/js/custom.js')?>"></script>
<script src="<?=base_url('assets/juggler/assets/js/scrollspyNav.js')?>"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'description' );
</script>
</body>
</html>
