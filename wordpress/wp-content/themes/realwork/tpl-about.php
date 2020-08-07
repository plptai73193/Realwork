<?php 
   /* Template Name: Giới thiệu */
   get_header();
   $aboutID = 26;
   $aboutFieldObject = get_field_object('about_info', $aboutID);
   $aboutSubtitle = $aboutFieldObject['sub_fields'];
   $aboutInfo = get_field('about_info', $aboutID);
   $companyValues = $aboutInfo[0]['company_value'];
   $thumb = get_the_post_thumbnail_url($aboutID) ? get_the_post_thumbnail_url($aboutID) : NO_IMAGE;
?>
<div class="main-wraper main-gioithieu">
   <div class="gioi-thieu-chung">
      <div class="clear20"></div>
      <div class="container">
         <h2 class="tit-page">giới thiệu</h2>
         <div class="row flex-wrap">
            <div class="col-md-6 col-sm-12 col-xs-12">
               <img src="<?php echo $thumb ?>" class="fullwidth" alt="<?php the_title(); ?>">
            </div>
            <div class="clear20 show991 fullwidth"></div>
            <div class="col-md-6 col-sm-12 col-xs-12">
               <h3 class="tit-gt"><?php echo $aboutSubtitle[0]['label'] ?></h3>
               <div class="editer">
                  <?php 
                     echo $aboutInfo[0]['overview'] 
                  ?>
               </div>
            </div>
         </div>
         <div class="clear20 hide991"></div>
         <div class="row flex-wrap">
            <div class="col-md-6">
               <h5 class="clred bold"><?php echo $aboutSubtitle[1]['label'] ?></h5>
               <?php echo $aboutInfo[0]['vision'] ?>
            </div>
            <div class="col-md-6">
               <h5 class="clred bold"><?php echo $aboutSubtitle[2]['label'] ?></h5>
               <?php echo $aboutInfo[0]['mission'] ?>
            </div>

            <div class="col-md-6">
               <h5 class="clred bold"><?php echo $aboutSubtitle[3]['label'] ?></h5>
               <?php echo $aboutInfo[0]['purpose'] ?>
            </div>

         </div>
         <div class="clear20"></div>
      </div>
   </div>
   <?php 
      if ($companyValues && !empty($companyValues)) {
   ?>
   <div class="gia-tri-cot-loi light-background">
      <div class="clear40"></div>
      <div class="container">
         <h3 class="tit-gt center"><?php echo $aboutSubtitle[4]['label'] ?></h3>
         <div class="row flex-wrap">
            <?php 
               foreach ($companyValues as $companyValue) {
                  if (!empty($companyValue)) {
                     $valueThumb = $companyValue['value_image'] ? $companyValue['value_image'] : NO_IMAGE;
            ?>
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="block-lsht">
                  <div class="flex-start">
                     <div class="img-lsht"><img src="<?php echo $valueThumb ?>" class="fullwidth"
                           alt="<?php echo $companyValue['value_title'] ?>"></div>
                     <div class="content-lsht">
                        <p class="year-lsht"><?php echo $companyValue['value_title'] ?></p>
                        <div>
                           <?php echo $companyValue['value_content'] ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php }} ?>
         </div>
      </div>
      <div class="clear40"></div>
   </div>
   <?php 
      }
   ?>
</div>
<?php get_footer()?>