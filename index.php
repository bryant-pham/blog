<?php get_header(); ?>

<div class="container-fluid main-content">
	<div class="row">
		<div class="col-sm-2 col-md-4">
			<div class="sidebar hidden-sm hidden-xs">
				<div class="photo-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/blogphoto.jpg" />
				</div>
				<div class="sidebar-text">
					<ul>
						<li>Bryant Pham</li>
						<li>Technologist</li>
						<li>Golden retriever lover</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-9 col-sm-9-offset-3 col-md-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post-container">
				<div class="post-title"><?php the_title() ?></div>
				<div class="post-content"><?php the_content() ?></div>
				<div class="post-date">
					<span><?php the_date() ?></span>
					<span><?php the_time() ?></span>
				</div> 
			</div>	
		<?php endwhile; ?>
			<span id="older-posts-link"><?php previous_posts_link('Older') ?></span>
			<span id="newer-posts-link"><?php next_posts_link('Newer') ?></span>
		<?php endif; ?>
		</div>
		<div class="col-sm-2 col-md-3"></div>
	</div>
</div>
<?php get_footer(); ?>
