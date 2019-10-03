<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'title' ); ?>
		<?php get_template_part( 'slider' ); ?>
		<?php
		//load general portfolio structure which will load proper template
		get_template_part( 'templates/portfolio/portfolio-structure' );
		?>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>	