<?php
/**
 * The main template file.
 *
 * @package My_Blank_Theme
 */

get_header();
?>

<main id="main" class="site-main">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

</main>

<?php
get_sidebar();
get_footer();