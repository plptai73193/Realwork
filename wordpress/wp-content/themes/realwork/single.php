<?php 
	get_header();
	$thumb = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : NO_IMAGE;
?>
<div class="main-wraper">
   <div class="clear20"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="thumbnail"><img src="<?php echo $thumb ?>" alt="<?php the_title() ?>"></div>
            <h2 class="tit-page"><?php the_title() ?></h2>
            <div class="editer">
               <?php 
					while(have_posts()): the_post();
						the_content(); 
					endwhile;
					?>
            </div>
            <div class="clear20"></div>
         </div>
         <?php get_sidebar(); ?>
      </div>
   </div>
   <div class="clear40"></div>
</div>
<?php get_footer(); ?>