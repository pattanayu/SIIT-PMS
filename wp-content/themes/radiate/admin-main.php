<?php
/**
 * Template Name: admin-main
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */



if(get_the_title() == 'admin-main'  )
{
get_header('admin');
}
else
{
get_header();
}
?>
<div class="sidenav">
	<h3 style="text-align: center; color: white; padding: 5px;">Campus</h3>
  <a href="#" >Property</a>
  <a href="#">Contract and Reservation Form</a>
  <a href="#">User</a>
  <a href="#">Expends</a>
</div>
