<?php get_header(); ?>

<div class="container-fluid main-content">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post-container">
				<div class="post-title"><?php the_title() ?></div>
				<div class="post-content"><?php the_content() ?></div>
				<div class="post-date">
					<span><?php the_date() ?></span>
					<span><?php the_time() ?></span>
				</div> 
			</div>	
		<?php endwhile; endif; ?>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>
<?php get_footer(); ?>
