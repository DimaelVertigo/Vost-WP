<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vost
 */

get_header(); ?>

	<div class="container container--dark clearfix">

		<section class="jumbotron clearfix">
			<div id="port">
				<div class="parallax-layer parallax-layer-1"></div>		
				<div class="parallax-layer parallax-layer-2"></div>		
				<div class="parallax-layer parallax-layer-3"></div>		
			</div>
			<div class="slider clearfix">
				<div class="slider__logo"></div>
				<a href="#" class="slider__anchor ancLinks"></a>
				<a href="#ancor4" class="btn btn--jumbotron header-navigation__link"><?php the_field('btn--jumbotron') ?></a>
				<div class="plans_slider">
					<div class="slide">
						<span class="slide__item"><?php the_field('carousel_text_1') ?></span>
					</div>
					<div class="slide">
						<span class="slide__item"><?php the_field('carousel_text_2') ?></span>
					</div>
					<div class="slide">
						<span class="slide__item"><?php the_field('carousel_text_3') ?></span>
					</div>
				</div><!-- plans_slider -->
				<div id="nav"></div>
			</div><!-- slider -->
			<div class="line line--jumbotron-1"></div>
			<div class="line line--jumbotron-2"></div>
		</section>

	</div><!-- container -->

	<div class="container container--light clearfix">

		<section class="content-block-1">
			<div class="wrapper">
				<h2 class="title title--content-block-1 title--dark" id="ancor1"><?php the_field('title--content-block-1') ?>
					<!-- <span class="title__bold title__bold--dark"></span> -->
				</h2>
				<ul class="content-block-1-list">
				<?php 
					if( have_rows('content-block-1-list__item') ):

					 	// loop through the rows of data
					    while ( have_rows('content-block-1-list__item') ) : the_row();
							?>
							
							<li class="content-block-1-list__item content-block-1-list-item">
								<div class="content-block-1-list-item__header">
									<span>
										<?php
													        // display a sub field value
													        the_sub_field('content-block-1-list-item__header'); ?></span>
								</div>
								<p class="content-block-1-list-item__content"><?php
					        // display a sub field value
					        the_sub_field('content-block-1-list-item__content'); ?></p>
							</li>
					    <?php endwhile;

					else :

					    // no rows found

					endif; 
				?>
				</ul>
				<p class="description description--blue description--content-block-1"><?php the_field('description--content-block-1') ?></p>
				<a href="#ancor4" class="btn btn--content-block-1 header-navigation__link"><?php the_field('btn--content-block-1') ?></a>
			</div>
		</section><!-- content-block-1 -->

	</div><!-- container -->

	<div class="container container--dark clearfix" id="ancor2">

		<section class="content-block-2">
			<h2 class="title title--light title--content-block-2"><?php the_field('title--content-block-2') ?></h2>
			<div class="content-block-2__logo"></div>
			<div class="triangle triangle--bottom triangle--blue"></div>
			<div class="line line--content-block-2"></div>
		</section>
			
	</div><!-- container -->

	<div class="container clearfix">

		<div class="wrapper">
			<section class="content-block-3">
				<div class="description description--blue description--block-3">
					<?php the_field('description--block-3') ?>
				</div>
			</section>
		</div>

	</div><!-- container -->

	<div class="container container--light clearfix" id="ancor3">
		<div class="wrapper">
			<section class="content-block-4">
				<p class="description desctription--black"><?php the_field('content-block-4-description') ?></p>
				<ul class="content-block-4-list-1">
					<li class="content-block-4-list-1__item content-block-4-list-1__item--icon-1"><span><?php the_field('content-block-4-list-1__item--text1') ?></span></li>
					<li class="content-block-4-list-1__item content-block-4-list-1__item--icon-2"><span><?php the_field('content-block-4-list-1__item--text2') ?></span></li>
					<li class="content-block-4-list-1__item content-block-4-list-1__item--icon-3"><span><?php the_field('content-block-4-list-1__item--text3') ?></span></li>
				</ul>
				<div class="dashed-item dashed-item--content-block-4"></div>
				<ul class="content-block-4-list-2">
					<li class="content-block-4-list-2__item"><i class="content-block-4-list-2__icon"></i> <p class="content-block-4-list-2__content"><?php the_field('content-block-4-list-2__content--text1') ?></p></li>
					<li class="content-block-4-list-2__item"><i class="content-block-4-list-2__icon"></i> <p class="content-block-4-list-2__content"><?php the_field('content-block-4-list-2__content--text2') ?></p></li>
				</ul>
			</section>

		</div>
	</div><!-- container -->

	<div class="container container--light clearfix">
		<section class="content-block-5">
			<div class="content-block-5__picture">
				<div class="triangle triangle--right triangle--white"></div>
			</div>
			<div class="content-block-5__lists">
				<div class="content-block-5-list">
					<h3 class="content-block-5__title"><?php the_field('content-block-5__title1') ?></h3>
					<ul>
						<?php 
		                    if( have_rows('content-block-1-list__item') ):

		                         // loop through the rows of data
		                        while ( have_rows('content-block-5-list1') ) : the_row();
		                            ?>
		                            <li class="content-block-5-list__item">
								<?php
		                            // display a sub field value
		                            the_sub_field('content-block-5-list__item'); ?>

		                            <?php
		                            // display a sub field value
		                            the_sub_field('content-block-1-list-item__content'); ?>
		                            </li>
		                        <?php endwhile;
		                    else :
		                        // no rows found
		                    endif; 
		                ?>
					</ul>
				</div>
				<div class="dashed-item dashed-item--content-block-5"></div>
				<div class="content-block-5-list">
					<h3 class="content-block-5__title"><?php the_field('content-block-5__title2') ?></h3>
					<ul>
						<?php 
		                    if( have_rows('content-block-1-list__item') ):

		                         // loop through the rows of data
		                        while ( have_rows('content-block-5-list2') ) : the_row();
		                            ?>
		                            <li class="content-block-5-list__item">
								<?php
		                            // display a sub field value
		                            the_sub_field('content-block-5-list__item'); ?>

		                            <?php
		                            // display a sub field value
		                            the_sub_field('content-block-1-list-item__content'); ?>
		                            </li>
		                        <?php endwhile;
		                    else :
		                        // no rows found
		                    endif; 
		                ?>
					</ul>
				</div>
			</div>
		</section>
	</div><!-- container -->

	<div class="container container--dark clearfix">
		<div class="content-block-6">
			<h2 class="title title--light title--content-block-6">
			<?php the_field('title--content-block-6') ?>
			<!-- <span class="title__bold">Свяжитесь</span> с нами --></h2>
			<div class="triangle triangle--big"></div>
			<div class="line line--content-block-6"></div>
		</div>
	</div><!-- container -->

	<div class="container container--light container--contact-form clearfix">
		<div class="wrapper">
			<div id="ancor4"></div>
			<section class="content-block-7">
			<?php if(qtrans_getLanguage() == "en") : ?>
				<?php echo do_shortcode( '[contact-form-7 id=124 title=Contact form 1]' ) ?>
			<?php elseif (qtrans_getLanguage() == "ru") : ?>
				<?php echo do_shortcode( '[contact-form-7 id=126 title=Contact form 2]' ) ?>
			<?php elseif (qtrans_getLanguage() == "ge") : ?>
				<?php echo do_shortcode( '[contact-form-7 id=127 title=Contact form 3]' ) ?>
			<?php endif ?>
			</section>
		</div>
	</div><!-- container -->
	
	<div class="container container--dark clearfix">
		<section class="content-block-8">
			<div class="map" id="map"></div>
			<div class="content-block-8-violet">
				<div class="content-block-8-violet__point">
					<i class="icon"></i>
					<div class="text"><?php the_field('content-block-8-violet__point') ?></div> 
				</div>
			</div>
			<div class="line line--content-block-8"></div>
		</section>
	</div><!-- container -->

	<div class="container clearfix">
		<section class="content-block-9">
			<div class="promo-slider">
				<div class="promo-slider__slide ">
					<div class="promo-slider-slide promo-slider-slide--1">
						<div class="promo-slider__logo"></div>
						<p class="promo-slider__text">
							<?php the_field('promo-slider__text--1') ?>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</p>
					</div>
				</div>
				<div class="promo-slider__slide ">
					<div class="promo-slider-slide promo-slider-slide--2">
						<div class="promo-slider__logo"></div>
						<p class="promo-slider__text">
							<?php the_field('promo-slider__text--2') ?>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</p>
					</div>
				</div>
				<div class="promo-slider__slide ">
					<div class="promo-slider-slide promo-slider-slide--3">
						<div class="promo-slider__logo"></div>
						<p class="promo-slider__text">
							<?php the_field('promo-slider__text--3') ?>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</p>
					</div>
				</div>
				<div class="promo-slider__slide ">
					<div class="promo-slider-slide promo-slider-slide--4">
						<div class="promo-slider__logo"></div>
						<p class="promo-slider__text">
							<?php the_field('promo-slider__text--4') ?>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</p>
					</div>
				</div>
			</div><!-- promo-slider -->
			<div class="wrapper"><div id="content-block-9__nav"></div></div>
			<a href="#" class="p_prev"></a>
			<a href="#" class="p_next"></a>
			<div class="content-block-9__text-wrap"></div>
		</section><!-- slider -->
	</div><!-- container -->

	<div class="container container--dark clearfix">
		<div class="content-block-10">
			<a href="#" class="btn btn--content-block-10"><?php the_field('btn--content-block-10') ?></a>
			<div class="line line--content-block-10"></div>
		</div>
	</div><!-- container -->

<?php get_footer(); ?>
