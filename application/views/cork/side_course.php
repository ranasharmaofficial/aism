<?php 
 $SCatQry = $this->db->where(['status'=>1])->limit(10)->get('tbl_category')->result();
 ?>
<div class="clmbox">
          <!--  <div class="sidenav sidenav1">
              <h3>Filter by :</h3>
              <div class="filt">
                <ul>
                  <li><input type="radio" name=""> All</li>
                  <li><input type="radio" name=""> Featured Courses</li>
                  <li><input type="radio" name=""> Popular Courses</li>
                </ul>
              </div>
            </div>-->
            <div class="sidenav sidenav2">
              <h3>All Courses</h3>
              <div class="filt">
                <ul>
                 
                  <?php foreach($SCatQry as $SCatRow){ ?>
                  <li><a href="<?=base_url('online-courses/category/'.$SCatRow->id);?>"><i class="far fa-hand-point-right"></i>  <?=$SCatRow->category_name?></a></li>
                <?php }?>
                </ul>
              </div>
            </div>            
           <!-- <div class="sidenav sidenav2">
              <h3>By Cost :</h3>
              <div class="filt">
                <ul>
                  <li><input type="radio" name=""> All</li>
                  <li><input type="radio" name=""> Paid</li>
                  <li><input type="radio" name=""> Free</li>
                </ul>
              </div>
            </div>-->
          </div>