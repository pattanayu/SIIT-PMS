<?php
/**
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



get_header(); ?>


	
		<div class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>



		<?php 
		if(get_the_title() == 'Account')
		{?>
		
		<div class="container" style="background-color: white; margin-bottom: 20px;">
			<div style=" margin-top: 10px;">
				<h1 style="padding: 10px;">History of Reservation</h1>
				<table class="table">

				    <!--Table head-->
				    <thead style="background-color: #3b1f62;">
				        <tr style="color: white;">
				            <th>#</th>
				            <th>Room Number</th>
				            <th>Category</th>
				            <th>Start Date</th>
				            <th>Status</th>
				            <th>Contact</th>
				        </tr>
				    </thead>
				    <!--Table head-->

				    <!--Table body-->
				    <tbody style="background-color: white;">
				        <tr>
				            <th scope="row">1</th>
				            <td>205</td>
				            <td>Room</td>
				            <td>19/02/2018</td>
				            <td>Living</td>
				            <td></td>
				        </tr>
				        <tr>
				            <th scope="row">2</th>
				            <td>403</td>
				            <td>Room</td>
				            <td>21/05/2018</td>
				            <td>Living</td>
				            <td></td>
				        </tr>
				        <tr>
				            <th scope="row">3</th>
				            <td>245</td>
				            <td>Room</td>
				            <td>02/06/2018</td>
				            <td>Living</td>
				            <td></td>
				        </tr>
				    </tbody>
				    <!--Table body-->
				</table>
			<!--Table-->
	                        
			</div>
		</div>
		<?php
	}
		?>
		
	
<?php get_footer(); ?>