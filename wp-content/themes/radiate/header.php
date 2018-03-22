<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="parallax-bg">
	<?php if ( get_header_image() && function_exists( 'the_custom_header_markup' ) && is_front_page() && has_header_video() ) :
		the_custom_header_markup();
	endif; ?>
</div>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap clearfix" style="background-color: #3b1f62;">
			
            <a href=""><img src="<?php bloginfo('template_url'); ?>/images/header/logo1.png" style="height: 40px; margin-top: 10px; margin-left: 5%;"></a>
            
			<div class="site-branding">

            <?php if ( is_front_page() || is_home() ) : ?>
   				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
               <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
            <?php endif; ?>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
               <p class="site-description"><?php echo $description; ?></p>
            <?php endif;?>
			</div>

			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h4 class="menu-toggle"></h4>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'radiate' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary-container' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .inner-wrap header-wrap -->
	</header><!-- #masthead -->

	

		<div id="content" class="site-content">
		<div class="inner-wrap">



	
	