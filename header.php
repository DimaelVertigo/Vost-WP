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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
	<div class="wrapper">
		<a href="#home" class="site-header__logo"></a>
		<nav class="header-navigation">
			<ul>
				<li class="header-navigation__item">
					<a href="#ancor1" class="header-navigation__link"><?php the_field('header-navigation__link--1') ?></a>
				</li>
				<li class="header-navigation__item">
					<a href="#ancor2" class="header-navigation__link"><?php the_field('header-navigation__link--2') ?></a>
				</li>
				<li class="header-navigation__item">
					<a href="#ancor3" class="header-navigation__link"><?php the_field('header-navigation__link--3') ?></a>
				</li>
				<li class="header-navigation__item">
					<a href="#ancor4" class="header-navigation__link"><?php the_field('header-navigation__link--4') ?></a>
				</li>
			</ul>
		</nav>
		<div class="language">
			<ul>
				<li class="language__item">
					<a href="#">en</a>
				</li>
				<li class="language__item">
					<a href="#">ru</a>
				</li>
			</ul>
		</div>
		<div class="line line--header"></div>
	</div>
	<!-- wrapper -->
</header>
<!-- site-header -->