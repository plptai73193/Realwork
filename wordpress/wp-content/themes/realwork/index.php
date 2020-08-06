<?php 
	/* Template Name: Trang Chủ */
	get_header();
   $fieldObject = get_field('common_info', 'option');
?>
<div class="main-contact">
   <div class="container">
      <div class="row flex-wrap">
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="media-body">
               <h4>Gọi ngay cho chúng tôi</h4>
               <h6><a href="tel:<?php echo $fieldObject[0]['phone']?>"><?php echo $fieldObject[0]['phone']?></a></h6>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="media-body">
               <h4>Email</h4>
               <h6><span><a
                        href="mailto:<?php echo $fieldObject[0]['email']?>"><?php echo $fieldObject[0]['email']?></a></span>
               </h6>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="media-body">
               <h4>Giờ làm việc</h4>
               <h6><span><?php echo $fieldObject[0]['working_time']?></span></h6>
            </div>
         </div>
      </div>
   </div>
</div>

<?php 
   $aboutId = 26;
   $pageAbout = get_page($aboutId);
   pr($pageAbout)
?>
<div class="main-wraper main-gioithieu light-background">
   <div class="gioi-thieu-chung">
      <div class="clear20"></div>
      <div class="container">
         <h2 class="tit-page"><?php echo $pageAbout->post_title ?></h2>
         <div class="row flex-wrap">
            <div class="col-md-6 col-sm-12 col-xs-12">
               <img src="img/bn-gt.jpg" class="fullwidth">
            </div>
            <div class="clear20 show991 fullwidth"></div>
            <div class="col-md-6 col-sm-12 col-xs-12">
               <h3 class="tit-gt">GIỚI THIỆU CHUNG</h3>
               <div class="editer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
            </div>
         </div>
         <div class="clear20 hide991"></div>
         <div class="row flex-wrap">
            <div class="col-md-6">
               <h5 class="clred bold">TẦM NHÌN</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-md-6">
               <h5 class="clred bold">SỨ MỆNH</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
         </div>
         <div class="clear20"></div>
      </div>
   </div>
</div>
<?php get_footer(); ?>