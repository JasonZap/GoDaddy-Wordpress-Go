<?php
/**
 * archive.php (for archives and blog landing)
 *
 * @package Maverick
 */

get_header(); ?>

	<div class="content-area u-ma-auto u-max-width-full">
		<h1><?php the_archive_title(); ?></h1>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content' ); ?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php endif; ?>

	</div><!-- .u-ma-auto .u-max-width-full -->

<?php
get_footer();
