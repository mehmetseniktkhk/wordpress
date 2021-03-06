<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Polmo
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

	<header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
					<i class="fa fa-bars"></i>
				</button>

					<?php jeweltheme_polmo_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<h1 class="navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; 
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
					?>
			</div>


			<nav id="main-menu" class="navbar-collapse pull-right">
				<?php 
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 4,
					'container'         => 'ul',
					'fallback_cb'       => 'wp_page_menu',
					'container_class'   => 'nav navbar-nav',
					'container_id'    	=> 'main-menu',
					'menu_class'      	=> 'nav navbar-nav',
					'menu_id'         	=> '',
					'depth'           	=> 4,
					)
				);
				?>
			</nav> <!-- /.navbar-collapse  -->
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		</div><!-- /.container -->
	</header><!-- /#masthead -->

<?php
$jeweltheme_polmo_general_blog_title = get_theme_mod('jeweltheme_polmo_general_blog_title','');
$jeweltheme_polmo_general_blog_desc = get_theme_mod('jeweltheme_polmo_general_blog_desc', '');

?>
	<section id="page-head" class="page-head text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
		<div class="head-overlay">
			<div class="section-padding">
				<div class="container">
					<h1 class="page-title">
						<?php echo  wp_kses_post($jeweltheme_polmo_general_blog_title); ?>
					</h1><!-- /.page-title -->
					<p class="page-description">
						<?php echo esc_attr($jeweltheme_polmo_general_blog_desc ); ?>
					</p><!-- /.page-description -->
				</div><!-- /.container -->
			</div><!-- /.section-padding -->
		</div><!-- /.head-overlay -->
	</section><!-- /#page-head -->

	<section id="main-content" class="main-content">
		<div class="container">
			<div class="row">