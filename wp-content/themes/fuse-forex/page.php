<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fuse_Forex
 */

get_header(); ?>
<div class="blog-page">

<div class="posts-filter container">
	<div class="row">

		<div class="posts-filter__tab-triggers">
			<a href="" class="posts-filter__tab-trigger posts-filter__tab-trigger--popular posts-filter__tab-trigger--enabled">popular</a>
			<a href="" class="posts-filter__tab-trigger posts-filter__tab-trigger--latest posts-filter__tab-trigger--disabled">latest</a>
			<a href="" class="posts-filter__tab-trigger posts-filter__tab-trigger--tutorials posts-filter__tab-trigger--disabled">tutorials</a>
		</div>

		<ul class="posts-filter__list posts-filter__list--popular posts-filter__list--enabled">
		 	<?php query_posts('showposts=4&cat=4'); ?>
			<?php while (have_posts()) : the_post(); ?>
      		
      <li class="col-xs-6 col-lg-4 posts-filter__item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" id="popular">
          <div class="posts-filter__thumbnail">
            <?php the_post_thumbnail(array()); ?>
            <span class="posts-filter__hover-effect hi-icon hi-icon-archive">read</span>
          </div>
          <div class="posts-filter__title"><?php the_title(); ?></div>
          <div class="posts-filter__meta">
          	<span class="posts-filter__date"><?php the_time('j F Y' ); ?></span>
          	<span class="posts-filter__separator">|</span>
          	<?php the_category() ?>
          </div> 
        </a>
      </li>

      <?php endwhile; ?>
			

		</ul>
					
		<ul class="posts-filter__list posts-filter__list--latest posts-filter__list--disabled">

			<?php
		  $args = array(
		      
		      'orderby' => 'view_count'
		      );
		  $query = new WP_Query( $args );
		  if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
          $query->the_post(); ?>
			<li class="col-xs-6 col-lg-4 posts-filter__item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" id="latest">
          <div class="posts-filter__thumbnail">
            <?php the_post_thumbnail(array()); ?>
            <span class="posts-filter__hover-effect hi-icon hi-icon-archive">read</span>
          </div>
          <div class="posts-filter__title"><?php the_title(); ?></div>
          <div class="posts-filter__meta">
          	<span class="posts-filter__date"><?php the_time('j F Y' ); ?></span>
          	<span class="posts-filter__separator">|</span>
          	<?php the_category() ?>
          </div> 
        </a>
      </li>
			<?php }
      } else {
      }
      wp_reset_postdata();
      ?>
		</ul>
		<ul class="posts-filter__list posts-filter__list--tutorials posts-filter__list--disabled">

			<?php query_posts('cat=3'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<li class="col-xs-6 col-lg-4 posts-filter__item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" id="tutorials">
          <div class="posts-filter__thumbnail">
            <?php the_post_thumbnail(array()); ?>
            <span class="posts-filter__hover-effect hi-icon hi-icon-archive">read</span>
          </div>
          <div class="posts-filter__title"><?php the_title(); ?></div>
          <div class="posts-filter__meta">
          	<span class="posts-filter__date"><?php the_time('j F Y' ); ?></span>
          	<span class="posts-filter__separator">|</span>
          	<?php the_category() ?>
          </div> 
        </a>
      </li>
			<?php endwhile; ?>
			
			<?php wp_reset_query(); ?>
		</ul>

		
	</div>
			
</div>

	<div class="graph">
		<div class="line_block_form_outset">
			<div class="line_block_form">
				<h4>Meet the Professional Traders</h4>
				<div class="line_block_input_block">
					<div class="line_block_input_placeholder" onclick="focusOnField()">Enter your e-mail</div>
					<input class="line_block_input" type="text" onkeyup="return checkField(event, this);"></div>
				<div class="line_block_form_triggers_block">
					<div class="line_block_form_trigger buy_trigger">Buy</div>
					<div class="line_block_form_trigger sell_trigger">Sell</div>
				</div>
			</div>
		</div>
		<div class="line_block_outset">
			<div class="draw_line"></div>
			<div class="draw_line_fog"></div>
			<div class="draw_line_grid"></div>
			<div class="draw_line_bg"></div>
			<div id="line_container"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
