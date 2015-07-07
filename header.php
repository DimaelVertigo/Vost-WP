<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Vost
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php bloginfo('stylesheet_url'); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
	<div class="wrapper">
		<a href="<?php echo home_url(); ?>" class="site-header__logo"></a>
		<nav class="header-navigation">
			<ul>
				<li class="header-navigation__item anchors">
					<a href="#ancor1" class="header-navigation__link"><?php the_field('header-navigation__link--1') ?></a>
				</li>
				<li class="header-navigation__item anchors">
					<a href="#ancor2" class="header-navigation__link"><?php the_field('header-navigation__link--2') ?></a>
				</li>
				<li class="header-navigation__item anchors">
					<a href="#ancor3" class="header-navigation__link"><?php the_field('header-navigation__link--3') ?></a>
				</li>
				<li class="header-navigation__item anchors">
					<a href="#ancor4" class="header-navigation__link"><?php the_field('header-navigation__link--4') ?></a>
				</li>
			</ul>
		</nav>
		<div class="language">
			<?php get_sidebar(); ?>
		</div>
		<div class="line line--header"></div>
	</div>
	<!-- wrapper -->
</header>
<!-- site-header -->