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
				<a href="#" class="btn btn--jumbotron"><?php the_field('btn--jumbotron') ?></a>
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
					<div class="slide">
						<span class="slide__item"><?php the_field('carousel_text_4'); ?></span>
					</div>
				</div><!-- plans_slider -->
				<div id="nav"></div>
			</div><!-- slider -->
			<div class="line line--jumbotron-1"></div>
			<div class="line line--jumbotron-2"></div>
		</section>
	</div><!-- container -->
	<?php get_sidebar(); ?>
	<div class="container container--light clearfix" id="ancor1">

		<section class="content-block-1">
			<div class="wrapper">
				<h2 class="title title--content-block-1 title--dark"><?php the_field('title--content-block-1') ?>
					Это	<span class="title__bold title__bold--dark">новый этап</span>
					рекламной индустрии
				</h2>
				<ul class="content-block-1-list">
				<?php 
					if( have_rows('content-block-1-list__item') ):

					 	// loop through the rows of data
					    while ( have_rows('content-block-1-list__item') ) : the_row();
							?>
							
							<li class="content-block-1-list__item content-block-1-list-item">
								<div class="content-block-1-list-item__header"><?php
					        // display a sub field value
					        the_sub_field('content-block-1-list-item__header'); ?></div>
								<p class="content-block-1-list-item__content"><?php
					        // display a sub field value
					        the_sub_field('content-block-1-list-item__content'); ?></p>
							</li>
					    <?php endwhile;

					else :

					    // no rows found

					endif; 
				?>
					<!-- <li class="content-block-1-list__item content-block-1-list-item">
						<div class="content-block-1-list-item__header">Охват</div>
						<p class="content-block-1-list-item__content">Размещайте рекламу на рекламных плоскостях в популярных торговых точках.
						</p>
					</li>
					<li class="content-block-1-list__item content-block-1-list-item">
						<div class="content-block-1-list-item__header">Цена</div>
						<p class="content-block-1-list-item__content">
							Стоимость в 3 раза дешевле, чем размещение на билборде стандартного размера.
						</p>
					</li>
					<li class="content-block-1-list__item content-block-1-list-item">
						<div class="content-block-1-list-item__header">Таргетинг</div>
						<p class="content-block-1-list-item__content">
							Подбирайте рекламные площадки, в зависимости от возраста, пола и дохода Вашей целевой аудитории.
						</p>
					</li>
					<li class="content-block-1-list__item content-block-1-list-item">
						<div class="content-block-1-list-item__header">Контроль эффективности</div>
						<p class="content-block-1-list-item__content">
							Оперативное управление VOST позволяет изменять контент, охват и частоту рекламы по ходу рекламной кампании.
						</p>
					</li>
					<li class="content-block-1-list__item content-block-1-list-item">
						<div class="content-block-1-list-item__header">
							Динамичный outdoor advertising
						</div>
						<p class="content-block-1-list-item__content">
							Привлекает внимание аудитории и эффективно доносит ключевые сообщения.
						</p>
					</li>
					<li class="content-block-1-list__item content-block-1-list-item">
						<div class="content-block-1-list-item__header">Реклама в точках продаж</div>
						<p class="content-block-1-list-item__content">
							Близость к месту, где можно приобрести товар, положительно влияет на эффективность рекламы.
						</p>
					</li> -->
				</ul>
				<p class="description description--blue description--content-block-1">Мы предлагаем Вам разместить рекламу в торговых сетях и аптеках города Тбилиси. Свяжитесь с менеджером для дополнительной информации и сотрудничества</p>
				<a href="#" class="btn btn--content-block-1">связаться</a>
			</div>
		</section><!-- content-block-1 -->

	</div><!-- container -->

	<div class="container container--dark clearfix" id="ancor2">

		<section class="content-block-2">
			<h2 class="title title--light title--content-block-2">Личный </h2>
			<div class="content-block-2__logo"></div>
			<div class="triangle triangle--bottom triangle--blue"></div>
			<div class="line line--content-block-2"></div>
		</section>
			
	</div><!-- container -->

	<div class="container clearfix">

		<div class="wrapper">
			<section class="content-block-3">
				<div class="description description--blue description--block-3">
					Используйте интерактивные возможности, чтобы удивлять и вовлекать аудиторию в коммуникацию с брендом, демонстрируя возможности продукта совершенно новым способом.
				</div>
			</section>
		</div>

	</div><!-- container -->

	<div class="container container--light clearfix" id="ancor3">
		<div class="wrapper">
			<section class="content-block-4">
				<p class="description desctription--black">Мы устанавливаем витрины VOST в магазинах и бутиках, превращаем обычные фасады в интерактивные поверхности. Технология состоит из:</p>
				<ul class="content-block-4-list-1">
					<li class="content-block-4-list-1__item content-block-4-list-1__item--icon-1"><span>Проектора</span></li>
					<li class="content-block-4-list-1__item content-block-4-list-1__item--icon-2">Компьютера</li>
					<li class="content-block-4-list-1__item content-block-4-list-1__item--icon-3">Прозрачной<br> пленки-экрана</li>
				</ul>
				<div class="dashed-item dashed-item--content-block-4"></div>
				<ul class="content-block-4-list-2">
					<li class="content-block-4-list-2__item"><i class="content-block-4-list-2__icon"></i> <p class="content-block-4-list-2__content">Экран VOST не перекрывает витрину, оборудование не занимает много пространства. Единственное требование — розетка, стеклянная поверхность и интернет.</p></li>
					<li class="content-block-4-list-2__item"><i class="content-block-4-list-2__icon"></i> <p class="content-block-4-list-2__content">Мы устанавливаем личный VOST двух типов: интерактивные витрины на фасадах и информационные стенды внутри помещений.</p></li>
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
					<h3 class="content-block-5__title">Возможности:</h3>
					<ul>
						<li class="content-block-5-list__item">демонстрируйте товары;</li>
						<li class="content-block-5-list__item">коммуницируйте с аудиторией;</li>
						<li class="content-block-5-list__item">транслируйте видеоролики;</li>
						<li class="content-block-5-list__item">изменяйте внешний вид витрины или стенда;</li>
						<li class="content-block-5-list__item">создавайте дополнительную точку продаж;</li>
					</ul>
				</div>
				<div class="dashed-item dashed-item--content-block-5"></div>
				<div class="content-block-5-list">
					<h3 class="content-block-5__title">Для оптимальной работы Вашего VOST мы готовы:</h3>
					<ul>
						<li class="content-block-5-list__item">адаптировать формат материала клиента;</li>
						<li class="content-block-5-list__item">
							разработать motion графику, интерактивное приложение или снять видеоролики;
						</li>
						<li class="content-block-5-list__item">разработать ПО исходя из Ваших потребностей.</li>
					</ul>
				</div>
			</div>
		</section>
	</div><!-- container -->

	<div class="container container--dark clearfix">
		<div class="content-block-6">
			<h2 class="title title--light title--content-block-6"><span class="title__bold">Свяжитесь</span> с нами</h2>
			<div class="triangle triangle--big"></div>
			<div class="line line--content-block-6"></div>
		</div>
	</div><!-- container -->

	<div class="container container--light container--contact-form clearfix">
		<div class="wrapper">
			<section class="content-block-7">
				<form action="">
					<div class="contact-form">
						<div class="contact-form-group clearfix">
							<label for="" class="contact-form-group__label">ФИО:</label>
							<div class="contact-form-group__wrapper contact-form-group__wrapper--name">
								<input type="text" class="contact-form-group__input"></div>
						</div>
						<div class="contact-form-group clearfix">
							<label for="" class="contact-form-group__label">Телефон:</label>
							<div class="contact-form-group__wrapper contact-form-group__wrapper--tel">
								<input type="tel" class="contact-form-group__input"></div>
						</div>
						<div class="contact-form-group clearfix">
							<label for="" class="contact-form-group__label">E-mail:</label>
							<div class="contact-form-group__wrapper contact-form-group__wrapper--email">
								<input type="email" class="contact-form-group__input"></div>
						</div>
						<div class="contact-form-group clearfix">
							<label for="" class="contact-form-group__label">Комментарий:</label>
							<div class="contact-form-group__wrapper contact-form-group__wrapper--msg">
								<textarea name="textarea" class="contact-form-group__textarea"></textarea>
							</div>
						</div>
					</div><!-- contact-form -->		
					<button class="btn btn--contact-form" type="submit">связаться</button>
				</form>
			</section>
		</div>
	</div><!-- container -->
	
	<div class="container container--dark clearfix" id="ancor4">
		<section class="content-block-8">
			<div class="map" id="map"></div>
			<div class="content-block-8-violet">
				<div class="content-block-8-violet__point ">
					<i class="icon"></i>
					<div class="text">Наша <b>рекламная сеть</b></div> 
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
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</p>
					</div>
				</div>
				<div class="promo-slider__slide ">
					<div class="promo-slider-slide promo-slider-slide--2">
						<div class="promo-slider__logo"></div>
						<p class="promo-slider__text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</p>
					</div>
				</div>
				<div class="promo-slider__slide ">
					<div class="promo-slider-slide promo-slider-slide--3">
						<div class="promo-slider__logo"></div>
						<p class="promo-slider__text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</p>
					</div>
				</div>
				<div class="promo-slider__slide ">
					<div class="promo-slider-slide promo-slider-slide--4">
						<div class="promo-slider__logo"></div>
						<p class="promo-slider__text">
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
			<a href="#" class="btn btn--content-block-10">Хочу vost</a>
			<div class="line line--content-block-10"></div>
		</div>
	</div><!-- container -->

<?php get_footer(); ?>
