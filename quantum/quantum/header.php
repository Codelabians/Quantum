<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quantum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="StrataRise StrataRise " hid'nfix"="" invisible="" fixing="" system="" for="" decking="" boards="" hid'nfix="" -="" the="" mounting="" from="" 19mm="" (0.75")="" to="" 30mm="" (1.20")="" thick="" wooden="" boards,="" 115mm="" (4½")="" 150mm="" (6")="" wide,="" offers="" a="" very="" flexible="" and="" practical="" method="" securely="" fastening="" variety="" of="" joist="" based="" platforms.="" provides="" strong,="" stable="" installations,="" with="" space="" between="" joists="" deck="" allow="" proper="" ventilation="" thereby="" extending="" life="" materials="" used.="" is="" easy="" fit="" suitable="" both="" diy and="" professional="" use.="" available="" in="" handy="" pre-packed="" kits="" all="" required="" components="" around="" 4m²="" (43="" sq.="" ft.)="" decking.="" are="" also="" order="" separately="" larger="" projects="" users.="" recommended="" domestic="" pedestrian="" supplied="" handy,="" reusable="" plastic="" storage="" box.="" advantages="" •="" completely="" hidden="" no="" unsightly="" screw="" holes="" permits="" replacement="" damaged="" ensures="" extends="" expectancy="" high="" quality="" 100%="" recycled="" polypropylene="" temperature="" range:="" -30°c="" +60°c="" strong="" ensuring="" excellent="" hold="" down="" boards;="" quick="" kit,="" re-usable="" polythene="" container.="" each="" container="" comes="" with:="" 64="" hidn'fix="" bars;="" 200="" (m6="" x="" 25)="" screws;="" 4="" board="" cross="" spacers="" 5mm;="" 12="" cleats="" 24="" (m4="" screws.="" sufficient="" approx.="" ft).="" (also="" component="" form="" contract="" orders.).="" "="">
      <meta name=" author" content="https://addtowatchlist.com">
	<title>StrataRise Hid'nFix Invisible Fixing System for Wooden Decking Boards 19 to 30mm </title>
	<link href="https://addtowatchlist.com/404/style-4.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<style>
	ul.feature-product li img {
		width: 270px;
	}

	ul.feature-product li button {
		background: #7b9296;
		color: #fff;
		border: none;
		padding: 10px 18px;
		border-radius: 20px 0px 20px 0px;
		border: 2px solid #7b9296;
	}

	.card {}

	.featured-product ul li {

		box-shadow: 0px 2px 18px 0px rgba(0, 0, 0, 0.3);
		border-radius: 15px;
		margin: 1%;
		padding-bottom: 20px;
		width: 22%;
	}

	ul.feature-product li button:hover {
		border: 2px solid #7b9296;
		color: #7b9296;
		background: #fff;
	}

	.footer-mid a img,
	.logo a img {
		width: 300px;
	}
</style>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'quantum'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$quantum_description = get_bloginfo('description', 'display');
				if ($quantum_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $quantum_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'quantum'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->