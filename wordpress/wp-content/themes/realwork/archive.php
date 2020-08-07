<?php 
	get_header(); 
	$cate = get_queried_object();
	$slug = $cate->slug;
	$pageName = $cate->name;
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	if ($slug == 'dich-vu') {
		$args = [
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC',
			'paged' => $paged,
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
         <?php echo custom_pagination(); ?>
      </div>
   </div>
</div>
<?php 
	}} else{ 
		$args = [
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC',
			'paged' => $paged,
			'tax_query' => [
				[
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => $slug
				]
			]
		];
		$query = new WP_Query($args);
		if($query->have_posts()){
?>
<div class="main-tintuc">
   <div class="clear20"></div>
   <div class="container">
      <h2 class="tit-page"><?php echo $pageName ?></h2>
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
   </div>
   <div class="clear40"></div>
</div>
<?php }} ?>
<?php get_footer(); ?>