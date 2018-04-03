<?php
/**
 * Template Name: dorm_req
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



if(get_the_title() == 'dorm_req'  )
{
get_header('normal');
}
else
{
get_header();
}
?>

<div class="container">
	<h2 style="padding: 10px; font-weight: bold;">Require Document</h2>
	<div style="border: 1px solid gray; margin-bottom: 20px;"></div>
	<!-- add content here-->
</div>
<div class="container" style="background-color: white; margin-bottom: 20px;">
	<div style=" margin-top: 10px;">
		<p>
			- A copy of SIIT student ID Card
		</p>
		<p>
			- A copy of citizen ID card/passport for international student
		</p>
		<p>
			- A copy of guardian's citizen ID card / passport for non-Thai citizen
		</p>
		<p>
			- A copy of student's household registration
		</p>
		<p>
			- 3 x 1" Photos of applicant in student uniform
		</p>


	</div>

</div>
<a href="http://localhost/property/index.php" class="btn submit-button" style="margin-left: 45%; margin-top: 30px; margin-bottom: 20px;">Back</a>




<?php get_footer(); ?>
