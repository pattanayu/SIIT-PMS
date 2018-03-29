<?php
/**
 * Template Name: ex-dorm-room
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



if(get_the_title() == 'ex-dorm-room'  )
{
get_header('normal');
}
else
{
get_header();
}
?>

<div class="container">
	<h2 style="padding: 10px; font-weight: bold;">SIIT Dormitory room</h2>
	<div style="border: 1px solid gray; margin-bottom: 20px;"></div>
	<?php echo do_shortcode('[smartslider3 slider=4]');?>
	<!-- add content here-->
</div>




<?php get_footer(); ?>