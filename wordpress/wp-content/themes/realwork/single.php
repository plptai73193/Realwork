<?php get_header(); ?>
<div class="main_section clearfix">
	<div id="content">
		<?php
		while ( have_posts() ) : the_post();
			$author_ID = get_the_author_meta('ID');
			$author_name = get_the_author_meta('display_name');
			$author_desc = get_the_author_meta('description');
			$author_avatar = get_wp_user_avatar();
			$thumb = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri().'/html/shared/img/shared/noimage.jpg';
		?>
		<div class="g_article">
			<h3 class="cat_title"><?php echo get_the_title(); ?></h3>
			<div class="c_article">
				<h4 class="tt01">
				<?php
				$categories = get_the_category(get_the_ID());
				foreach ($categories as $category) {
				$category_name = $category->name;
				$category_id = $category->term_id;
				$category_url = get_category_link( $category_id );
				$category_color = get_field('category_color', 'category_' . $category_id);
				?>
				<a href="<?php echo $category_url; ?>">
					<span style="background-color: <?php echo $category_color; ?> !important"><?php echo $category_name; ?></span>
				</a>
				<?php } ?>
				</h4>
				<p>
					<img src="<?php echo $thumb; ?>" width="100%" alt="<?php echo get_the_title(); ?>"/>
				</p>
				<p class="date"><?php echo get_the_date(); ?></p>
				<article>
					<?php the_content(); ?>
				</article>
				<div class="clearfix w_author">
					<div class="info">
						<div class="bio">
							<h4>
							<a href="<?php echo home_url().'/writer/#author-'.$author_ID; ?>">
								<?php echo $author_name; ?>
							</a>
							</h4>
							<p class="txt"><?php echo $author_desc; ?></p>
						</div>
						<p class="photo_sub">
							<a href="<?php echo home_url().'/writer/#author-'.$author_ID; ?>">
								<?php echo $author_avatar; ?>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<?php endwhile; ?>
		<div class="pagination">
			<?php previous_post_link( '%link', _x( '&laquo; Prev', 'fcv' ), true ); ?>
			<?php next_post_link( '%link', _x( 'Next &raquo;' , 'fcv' ), true ); ?>
		</div>
		
	</div>
	<?php get_sidebar('custom'); ?>
</div>
<?php get_footer(); ?>