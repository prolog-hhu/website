<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main class="container-xl px-3 py-6">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php _e( 'Search results for:', 'twentynineteen' ); ?>
			</h1>
			<div class="page-description"><?php echo get_search_query(); ?></div>
		</header><!-- .page-header -->

		<?php
		// Start the Loop.
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', 'excerpt' );

			// End the loop.
		endwhile;

		// If no content, include the "No posts found" template.
	else :
		get_template_part( 'template-parts/content/content', 'none' );

	endif;
	?>
	</main><!-- #main -->

<?php get_footer(); ?>
