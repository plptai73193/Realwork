<?php 
   /* Template Name: Liên hệ */
   get_header();
   $pageID = 314;
   $commonInfo = get_field('common_info', 'option');
   $contactField = get_field('contact_us', $pageID);
?>
<div class="main-wraper main-lienhe">
   <div class="clear20"></div>
   <div class="container">
      <h2 class="tit-page">Liên hệ</h2>
      <div class="row flex-wrap">
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="editer">
               <?php echo $contactField ?>
               <p><i class="fas fa-map-marker-alt"></i><?php echo $commonInfo[0]['address'] ?></p>
               <p class="phone-lh"><i class="fas fa-phone"></i><a
                     href="tel:<?php echo $commonInfo[0]['phone'] ?>"><?php echo $commonInfo[0]['phone'] ?></a></p>
               <p><i class="far fa-clock"></i><a
                     href="mail: <?php echo $commonInfo[0]['email'] ?>"><?php echo $commonInfo[0]['email'] ?></a></p>
               <p><i class="far fa-envelope"></i><?php echo $commonInfo[0]['working_time'] ?></p>
            </div>
         </div>
         <div class="clear20 show767 fullwidth"></div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
         </div>
      </div>
   </div>
   <div class="clear40"></div>
</div>
<?php get_footer()?>