<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fuse_Forex
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( ); ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fuse-forex' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		
	</div><!-- .entry-content -->

</article><!-- #post-## -->
