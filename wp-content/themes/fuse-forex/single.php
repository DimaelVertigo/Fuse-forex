<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fuse_Forex
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			
			<div class="container">
				<div class="col-lg-12 post-page__post-navigation"><?php the_post_navigation(); ?><a href="<?php echo home_url(); ?>/page-blog" class="back-to-blog">Back to Blog</a></div>
			</div><!-- .entry-content -->
			 		

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
