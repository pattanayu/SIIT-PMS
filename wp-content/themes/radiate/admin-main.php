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



if(is_page(admin-main))
{
get_header('admin');
}
else
{
get_header();
}


?>
<div class="sidenav">

  <a href="#" >Add/Del/Fix</a>
  <a href="#">Contract and Reservation Form</a>
  <a href="#">Search</a>
  <a href="#">User</a>
  <a href="#">Expends</a>
</div>
