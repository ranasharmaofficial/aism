<?php
 $RSerQry = $this->db->where(['status'=>1])->get('tbl_services')->result();
 ?>

<div class="service-sidebar">
  <div class="service-sidebar__single">
    <ul class="list-unstyled service-sidebar__list list-unstyled">
    <?php foreach($RSerQry as $RSerRow){
	$ServiceName = str_replace(' ', '-', strtolower($RSerRow->name));
	?>
      <li><a href="<?=base_url('service')?>/<?=$RSerRow->id?>/<?=$ServiceName?>"><?=$RSerRow->name?></a></li>
      <?php } ?>
    </ul>
  </div>
</div>
