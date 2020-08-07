<?php 
	/* Template Name: Trang Chủ */
   get_header();
   $indexID = 28;
   $commonInfo = get_field('common_info', 'option');
   $homeOverview = get_field('home_overview', $indexID);
?>
<div class="main-contact">
   <div class="container">
      <div class="row flex-wrap">
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="media-body">
               <h4>Gọi ngay cho chúng tôi</h4>
               <h6><a href="tel:<?php echo $commonInfo[0]['phone'] ?>"><?php echo $commonInfo[0]['phone'] ?></a></h6>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="media-body">
               <h4>Email</h4>
               <h6><span><a
                        href="mailto:<?php echo $commonInfo[0]['email'] ?>"><?php echo $commonInfo[0]['email'] ?></a></span>
               </h6>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="media-body">
               <h4>Giờ làm việc</h4>
               <h6><span><?php echo $commonInfo[0]['working_time'] ?></span></h6>
            </div>
         </div>
      </div>
   </div>
</div>
<?php 
   $aboutID = 26;
   $aboutFieldObject = get_field_object('about_info', $aboutID);
   $aboutSubtitle = $aboutFieldObject['sub_fields'];
   $aboutInfo = get_field('about_info', $aboutID);
   $thumb = get_the_post_thumbnail_url($aboutID) ? get_the_post_thumbnail_url($aboutID) : NO_IMAGE;
?>
<div class="main-wraper main-gioithieu light-background">
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
         </div>
         <div class="clear20"></div>
         <div class="more"><a href="<?php echo site_url('gioi-thieu') ?>" class="buy-now">XEM THÊM</a></div>
      </div>
   </div>
</div>

<?php 
   $args = [
      'post_type' => 'post',
      'posts_per_page' => '8',
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => [
         [
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'dich-vu'
         ]
      ]
   ];
   $query = new WP_Query($args);
   if($query->have_posts()){
?>
<div class="main-sanpham-home">
   <div class="container">
      <h2 class="tit-page">Dịch Vụ</h2>
      <div>
         <div class="row flex-wrap">
            <?php 
               while ($query->have_posts()):
                  $query->the_post();
                  $thumb = get_the_post_thumbnail_url($post->ID) ? get_the_post_thumbnail_url($post->ID) : NO_IMAGE;
                  $excerpt = $post->post_excerpt;
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12 product-outer">
               <div class="product-items">
                  <div class="img-product">
                     <a href="<?php the_permalink() ?>" class="eff-scale">
                        <img src="<?php echo $thumb; ?>" class="fullwidth" alt="<?php the_title(); ?>">
                     </a>
                  </div>
                  <p class="date"><?php echo get_the_date('d/m/Y') ?></p>
                  <h4 class="product-name"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                  <div class="excerpt">
                     <?php echo excerpt($excerpt, 20) ?>
                  </div>
                  <a href="<?php the_permalink() ?>" class="buy-now">CHI TIẾT</a>
               </div>
            </div>
            <?php 
               endwhile;
               wp_reset_postdata();
            ?>
         </div>
         <div class="more"><a href="<?php echo site_url('dich-vu') ?>" class="buy-now">XEM THÊM</a></div>
      </div>
   </div>
</div>
<?php 
   } 
?>

<?php 
   $args = [
      'post_type' => 'post',
      'posts_per_page' => '6',
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => [
         [
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'tin-tuc'
         ]
      ]
   ];
   $query = new WP_Query($args);
   if($query->have_posts()){
?>
<div class="main-tintuc light-background">
   <div class="clear20"></div>
   <div class="container">
      <h2 class="tit-page">TIN TỨC</h2>
      <div class="row flex-wrap">
         <?php 
            while ($query->have_posts()):
               $query->the_post();
               $thumb = get_the_post_thumbnail_url($post->ID) ? get_the_post_thumbnail_url($post->ID) : NO_IMAGE;
               $excerpt = $post->post_excerpt;
               $title = $post->post_title;
         ?>
         <div class="col-md-4 col-sm-6 col-xs-6 fwmb">
            <div class="block-news-page">
               <a href="<?php the_permalink() ?>" class="eff-scale">
                  <img src="<?php echo $thumb ?>" class="fullwidth" alt="<?php echo $title ?>">
               </a>
               <span class="date"><?php echo get_the_date('d/m/Y') ?></span>
               <h4 class="bold text-uppercase"><a href="<?php the_permalink() ?>"
                     class="clblack"><?php the_title(); ?></a></h4>
               <div>
                  <?php echo excerpt($excerpt, 20) ?>
               </div>
            </div>
         </div>
         <?php 
            endwhile;
            wp_reset_postdata();
         ?>
      </div>
      <div class="more"><a href="<?php echo site_url('tin-tuc') ?>" class="buy-now">XEM THÊM</a></div>
   </div>
   <div class="clear40"></div>
</div>
<?php 
   } 
?>

<?php 
   $homeFeedbacks = $homeOverview[0]['feedbacks'];
   if($homeFeedbacks && !empty($homeFeedbacks)){
?>
<div class="main-feedback">
   <div class="container">
      <h2 class="tit-page">Feedbacks</h2>
      <div class="block-slider-feedback">
         <div class="slider-feedback owl-carousel owl-theme">
            <?php
               foreach ($homeFeedbacks as $homeFeedback){
                  $thumb = $homeFeedback['profile_picture'] ? $homeFeedback['profile_picture'] : NO_IMAGE;
            ?>
            <div class="item-feedback">
               <div class="avatar-cus"><img src="<?php echo $thumb ?>" alt=""></div>
               <div class="center">
                  <?php echo $homeFeedback['fb_content'] ?>
               </div>
               <p class="center fb_title bold"><?php echo $homeFeedback['fb_title'] ?></p>
            </div>
            <?php 
               }
            ?>
         </div>
      </div>
   </div>
</div>
<?php } ?>


<?php 
   $homePartners = $homeOverview[0]['partner'];
   if($homePartners && !empty($homePartners)){
?>
<div class="main-doitac light-background">
   <div class="container">
      <h2 class="tit-page">ĐỐI TÁC</h2>
      <div class="block-slider-doitac">
         <div class="slider-doitac owl-carousel owl-theme">
            <?php
               foreach ($homePartners as $homePartner){
                  $thumbImage = $homePartner['partner_image']['sizes']['medium'];
                  if (!empty($thumbImage)){
            ?>
            <div class="slide_item"><img src="<?php echo $thumbImage; ?>"></div>
            <?php }} ?>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<?php get_footer(); ?>