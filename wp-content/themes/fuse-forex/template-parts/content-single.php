<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fuse_Forex
 */

?>

<div class="post-page">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="post-page-header">
			<div class="posts-filter__tab-triggers">
				<a href="page-blog/#popular" class="ancLinks posts-filter__tab-trigger posts-filter__tab-trigger--popular posts-filter__tab-trigger--enabled">popular</a>
				<a href="page-blog/#latest" class="ancLinks posts-filter__tab-trigger posts-filter__tab-trigger--latest posts-filter__tab-trigger--disabled">latest</a>
				<a href="page-blog/#tutorials" class="ancLinks posts-filter__tab-trigger posts-filter__tab-trigger--tutorials posts-filter__tab-trigger--disabled">tutorials</a>
			</div>
			<?php the_title( '<h1 class="title title--post">', '</h1>' ); ?>

			<div class="posts-filter__meta">
      	<span class="posts-filter__date"><?php the_time('j F Y' ); ?></span>
      	<span class="posts-filter__separator">|</span>
      	<?php the_category() ?>
      </div> 

		</header><!-- .entry-header -->

		
			<div class="col-lg-8 col-lg-offset-2 post-page__content"><?php the_content(); ?></div>
	</article><!-- #post-## -->
</div>