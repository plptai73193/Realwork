<?php 
	$postID = get_the_ID();
	$cate	=	get_the_category($postID);
	$cateSlug = $cate[0]->slug;
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 5,
		'orderby' => 'date',
		'order' => 'DESC',
		'tax_query' => [
			[
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => $cateSlug
			]
		]
	];
	$query = new WP_Query($args);
?>
<div class="col-md-3 sidebar">
   <h4 class="tit-aside-right">ĐỌC TIẾP</h4>
   <div class="list-ttv-right">
      <div class="row flex-wrap">
         <?php 
				if($query->have_posts()){
               while ($query->have_posts()):
                  $query->the_post();
                  $thumb = get_the_post_thumbnail_url($post->ID) ? get_the_post_thumbnail_url($post->ID) : NO_IMAGE;
                  $excerpt = $post->post_excerpt;
         ?>
         <div class="col-md-12 col-sm-6 col-xs-6 fwmb">
            <div class="block-news-page">
               <a href="<?php the_permalink() ?>" class="eff-scale">
                  <img src="<?php echo $thumb ?>" class="fullwidth" alt='<?php echo get_the_title(); ?>'>
               </a>
               <h4 class="bold text-uppercase"><a href="<?php the_permalink() ?>"
                     class="clblack"><?php the_title(); ?></a></h4>
               <div>
                  <?php echo excerpt($excerpt, 20) ?>
               </div>
            </div>
         </div>
         <?php 
					endwhile; 
				}
			?>
      </div>
   </div>
</div>