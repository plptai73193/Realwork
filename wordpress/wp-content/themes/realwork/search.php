<?php 
	get_header(); 
	$postFound = $wp_query->found_posts;
?>
<div class="main-sanpham-home">
   <div class="container">
      <h2 class="tit-page">
         <?php 
				if($postFound !=''){
					echo 'Tìm thấy '. $postFound . ' Kết quả.';
				} else {
					echo 'Không tìm thấy kết quả nào, vui lòng thử lại.';
				}
			?>
      </h2>
      <div>
         <div class="row flex-wrap">
            <?php 
               while (have_posts()): the_post();
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
<?php get_footer(); ?>