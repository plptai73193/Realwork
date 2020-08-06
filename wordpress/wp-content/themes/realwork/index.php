<?php 
	/* Template Name: Trang Chủ */
	get_header();
	$fieldObject = get_field_object('common_info', 'option');
	$subfields = $fieldObject['sub_fields'];
?>
<div class="main-contact">
   <div class="container">
      <div class="row flex-wrap">
         <?php
				if($subfields){
					foreach ($subfields as $subfield) {
			?>
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="media-body">
               <h4><?php echo $subfield['label'] ?></h4>
               <h6></h6>
            </div>
         </div>
         <?php
				}}
			?>
      </div>
   </div>
</div>
<?php get_footer(); ?>