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
	<header >
		<div class="header">
		  <a class="leftnavbar" style="padding-right: 50px; padding-left: 40px;"><img src="<?php bloginfo('template_url'); ?>/images/header/logo1.png" style="height: 40px;" ></a>
		  <div class="header-left" >
		    <a class="active leftnavbar" href="#home">Home</a>
		    <a class="leftnavbar" href="#contact">How to</a>
		    <a class="leftnavbar" href="#contact">Contact</a>
	
		    <a class="leftnavbar" style="padding:0px;"><select name="campus" class="form-control select-campus" id="selectcampus">
		    	<?php 
		    	if(get_the_title() == 'index-bkd'  )
				{
					?>
				<option value="" selected>Bangkadi</option>
				<option value="http://localhost/property/">Rangsit</option>
				<?php 
				}
				else
				{ ?>
				<option value="" selected>Rangsit</option>
				<option value="http://localhost/property/index-bkd/" >Bangkadi</option>
				<?php 
				}
				?>
  				</select></a>
		    <a class="rightnavbar" href="#contact">Register</a>
		    <a class="rightnavbar" href="#contact">Log in</a>
		    <a class="rightnavbar" href="#home">Account</a>
		  </div>   

		   
		</div>
			
            <!--<a href=""><img src="<?php bloginfo('template_url'); ?>/images/header/logo1.png" style="height: 40px; margin-top: 10px; margin-left: 5%;"></a>
            <select name="campus" class="form-control select-campus" onchange="showcampus()" id="selectcampus">
            	<option value="rangsit">Rangsit</option>
            	<option value="bangkadi">Bangkadi</option>
            </select>-->
            	
            		
            	
				
				
			
           
            
			
	</header><!-- #masthead -->

	

		<div style="background-color: lightgray;">
		<div >



	
	