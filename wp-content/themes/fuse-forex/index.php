<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fuse_Forex
 */

get_header(); ?>

<div class="playwithtraders">
	<div class="col-lg-10 col-lg-offset-1">
		<h2 class="playwithtraders__title playwithtraders__title--1">Play with Traders</h2>
		<h3 class="playwithtraders__title playwithtraders__title--2">Compare trader earning power</h3>

		<div class="traders traders--act-1">

			<div class="trader trader--1">
				<div class="choose-trader-card">
					<div class="choose-trader-card__icon"></div>
					<div class="choose-trader-card__text">
						CLICK TO ADD
						<br>TRAIDER</div>
				</div>

				<div class="select-trader-card disabled">
					<div class="select-trader-card__name">Choose trader</div>
					<ul class="select-trader-card__list">
						<li class="select-trader-card__item select-trader-card__item--1" 
								data-capital="2000" 
								data-name="steve cohen"> <i class="select-trader-card__icon select-trader-card__icon--1"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--2" 
								data-capital="3000" 
								data-name="Andreas Halvorsen"> <i class="select-trader-card__icon select-trader-card__icon--2"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--3" 
								data-capital="2000" 
								data-name="George Soros">
							<i class="select-trader-card__icon select-trader-card__icon--3"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--4" 
								data-capital="2000" 
								data-name="Larry Robbins">
							<i class="select-trader-card__icon select-trader-card__icon--4"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--5" 
								data-capital="2000" 
								data-name="William Ackman">
							<i class="select-trader-card__icon select-trader-card__icon--5"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--6" 
								data-capital="2000" 
								data-name="James Simons">
							<i class="select-trader-card__icon select-trader-card__icon--6"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--7" 
								data-capital="2000" 
								data-name="Ken Griffin">
							<i class="select-trader-card__icon select-trader-card__icon--7"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--8" 
								data-capital="2000" 
								data-name="David Shaw">
							<i class="select-trader-card__icon select-trader-card__icon--8"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--9" 
								data-capital="2000" 
								data-name="Ray Dalio">
							<i class="select-trader-card__icon select-trader-card__icon--9"></i>
						</li>
					</ul>
					<button class="select-trader-card__btn btn" disabled>Select</button>
				</div>

				<div class="selected-trader-card disabled">
					<!-- disabled -->
					<header class="trader__header">
						<div class="trader__img">
							<i class="trader__icon"></i>
						</div>
						<div class="trader__name">
							steve
							cohen
						</div>
					</header>
					<div class="trader__capital">
						<div class="trader__capital-text">Net Worth</div>
						<div class="trader__capital-val">12 Billion</div>
					</div>
					<div class="trader__footer">
						<div class="trader__return">Choose another trader</div>
					</div>
				</div>
					
			</div>

			<div class="versus">VS</div>

			<div class="trader trader--2 trader--blur">
				<div class="choose-trader-card">
					<div class="choose-trader-card__icon"></div>
					<div class="choose-trader-card__text">
						CLICK TO ADD
						<br>TRAIDER</div>
				</div>

				<div class="select-trader-card disabled">
					<div class="select-trader-card__name">Choose trader</div>
					<ul class="select-trader-card__list">
						<li class="select-trader-card__item select-trader-card__item--1" 
								data-capital="2000" 
								data-name="steve cohen">
							<i class="select-trader-card__icon select-trader-card__icon--1"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--2" 
								data-capital="2000" 
								data-name="Andreas Halvorsen">
							<i class="select-trader-card__icon select-trader-card__icon--2"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--3" 
								data-capital="2000" 
								data-name="George Soros">
							<i class="select-trader-card__icon select-trader-card__icon--3"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--4" 
								data-capital="2000" 
								data-name="Larry Robbins">
							<i class="select-trader-card__icon select-trader-card__icon--4"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--5" 
								data-capital="2000" 
								data-name="William Ackman">
							<i class="select-trader-card__icon select-trader-card__icon--5"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--6" 
								data-capital="2000" 
								data-name="James Simons">
							<i class="select-trader-card__icon select-trader-card__icon--6"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--7" 
								data-capital="2000" 
								data-name="Ken Griffin">
							<i class="select-trader-card__icon select-trader-card__icon--7"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--8" 
								data-capital="2000" 
								data-name="David Shaw">
							<i class="select-trader-card__icon select-trader-card__icon--8"></i>
						</li>
						<li class="select-trader-card__item select-trader-card__item--9" 
								data-capital="2000" 
								data-name="Ray Dalio">
							<i class="select-trader-card__icon select-trader-card__icon--9"></i>
						</li>
					</ul>
					<button class="select-trader-card__btn btn" disabled>Select</button>
				</div>
				<div class="selected-trader-card disabled">
					<!-- disabled -->
					<header class="trader__header">
						<div class="trader__img">
							<i class="trader__icon"></i>
						</div>
						<div class="trader__name">
							steve
							cohen
						</div>
					</header>
					<div class="trader__capital">
						<div class="trader__capital-text">Net Worth</div>
						<div class="trader__capital-val">12 Billion</div>
					</div>
					<div class="trader__footer">
						<div class="trader__return">Choose another trader</div>
					</div>
				</div>
			</div>

			<div class="arrow arrow--act-1 disabled"></div>
		</div>
		
		<div class="traders traders--act-3 disabled">

			<div class="trader trader--1">
				<header class="trader__header">
					<div class="trader__img">
						<i class="trader__icon"></i>
					</div>
					<div class="trader__name">
						William
						<br>Ackman</div>
				</header>
				<div class="trader__price">4500</div>
					<div class="trader__clock clock clock--slow">
						<div class="clock__data">
							<div class="clock__days">0D</div>
							<div class="clock__time"><label id="hours">00</label>:<label id="minutes">00</label>:<label id="seconds">00</label></div>
						</div>
						<div class='loader-ring loader-ring--1'>
						  <div class='loader-ring-light'></div>
						  <div class='loader-ring-track'></div>
						</div>
						<div class='loader-ring loader-ring--2'>
						  <div class='loader-ring-light'></div>
						  <div class='loader-ring-track'></div>
						</div>
						<div class='loader-ring loader-ring--3'>
						  <div class='loader-ring-light'></div>
						  <div class='loader-ring-track'></div>
						</div>
					</div>
				<div class="tooltip">?</div>
				<ul class="tooltip__list disabled">
					<li class="tooltip__item tooltip__item--1">Sickness</li>
					<li class="tooltip__item tooltip__item--2">Homeless</li>
					<li class="tooltip__item tooltip__item--3">Starving</li>
				</ul>
			</div>

			<div class="versus">VS</div>

			<div class="trader trader--2">
				<header class="trader__header">
					<div class="trader__img">
						<i class="trader__icon"></i>
					</div>
					<div class="trader__name">
						William
						<br>Ackman</div>
				</header>
				<div class="trader__price">10500</div>
					<div class="trader__clock clock clock--slow">
						<div class="clock__data">
							<div class="clock__days">0D</div>
							<div class="clock__time"><label id="hours2">00</label>:<label id="minutes2">00</label>:<label id="seconds2">00</label></div>
						</div>
						<div class='loader-ring loader-ring--1'>
						  <div class='loader-ring-light'></div>
						  <div class='loader-ring-track'></div>
						</div>
						<div class='loader-ring loader-ring--2'>
						  <div class='loader-ring-light'></div>
						  <div class='loader-ring-track'></div>
						</div>
						<div class='loader-ring loader-ring--3'>
						  <div class='loader-ring-light'></div>
						  <div class='loader-ring-track'></div>
						</div>
					</div>
				<div class="tooltip">?</div>
				<ul class="tooltip__list disabled">
					<li class="tooltip__item tooltip__item--1">Sickness</li>
					<li class="tooltip__item tooltip__item--2">Homeless</li>
					<li class="tooltip__item tooltip__item--3">Starving</li>
				</ul>
			</div>

			<div class="arrow arrow--act-3"></div>
		</div>

		<div class="traders traders--act-4 disabled"><!-- disabled -->

			<div class="singlecard">
				<p class="singlecard__text">Use one of the buttons bellow to unlock the content</p>
				<ul class="social-list">
					<li class="social-list__item">
						<a href="#" class="social-list__link social-list__link--twitter">Tweet</a>
					</li>
					<li class="social-list__item">
						<a href="#" class="social-list__link social-list__link--facebook">Like Us</a>
					</li>
					<li class="social-list__item">
						<a href="#" class="social-list__link social-list__link--google-plus">+1 Us</a>
					</li>
				</ul>
				<div class="arrow arrow--act-4"></div>
			</div>
		</div>

		<div class="traders traders--act-5 disabled"><!-- disabled -->

			<div class="singlecard">
				<p class="singlecard__text">Copy this code you will need it later</p>
				<div class="clipboard">
					<p class="clipboard__input" data-code="1BZHJF5RL28KDR9"></p>
					<button class="clipboard__btn btn">Copy</button>
				</div>
				<div class="arrow arrow--act-5"></div>
			</div>
		</div>

		<div class="traders traders--act-6 disabled"><!-- disabled -->

			<div class="singlecard">
				<p class="singlecard__text">Enter your e-mail</p>
				<div class="contact-form">
					<input type="text" class="contact-form__input" placeholder="Paste email here">
					<button class="contact-form__btn btn">Submit</button>
				</div>
			</div>
		</div>

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
      <li class="col-xs-6 col-lg-3 posts-filter__item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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

		<ul class="posts-filter__list posts-filter__list--latest posts-filter__list--disabled">

			<?php
		  $args = array(
		      'posts_per_page' => 4,
		      'orderby' => 'view_count'
		      );
		  $query = new WP_Query( $args );
		  if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
          $query->the_post(); ?>
			<li class="col-xs-6 col-lg-3 posts-filter__item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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

			<?php query_posts('showposts=4&cat=3'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<li class="col-xs-6 col-lg-3 posts-filter__item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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

	</div>
</div>

<div class="blockquote">
	<div id="owl-demo" class="owl-carousel">

		<div class="blockquote__carousel col-lg-8 col-lg-offset-2 item">
			<div class="blockquote__avatar"></div>
			<div class="blockquote__name">Benjamin Franklin</div>
			<blockquote class="blockquote__text">
				Remember not only to say the right thing in the right place, but far more difficult still, to leave unsaid the wrong thing at the tempting moment.
			</blockquote>
		</div>

		<div class="blockquote__carousel col-lg-8 col-lg-offset-2 item">
			<div class="blockquote__avatar"></div>
			<div class="blockquote__name">Benjamin Franklin</div>
			<blockquote class="blockquote__text">
				Remember not only to say the right thing in the right place, but far more difficult still, to leave unsaid the wrong thing at the tempting moment.
			</blockquote>
		</div>

		<div class="blockquote__carousel col-lg-8 col-lg-offset-2 item">
			<div class="blockquote__avatar"></div>
			<div class="blockquote__name">Benjamin Franklin</div>
			<blockquote class="blockquote__text">
				Remember not only to say the right thing in the right place, but far more difficult still, to leave unsaid the wrong thing at the tempting moment.
			</blockquote>
		</div>

	</div>
</div>
	


<?php get_footer(); ?>
