<?php


/**
 *Template Name: index-bkd
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */



get_header(); ?>

<script>



    $(function(){
      // bind change event to select
      $('#selectcampus').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });

</script>
<body onload="function()">
	
		<?php echo do_shortcode('[smartslider3 slider=1]'); ?>			
	
				
				<!--start tab area-->
				<ul class="nav nav-tabs "  >
				    <li class="active"><a data-toggle="tab"  href="#home" style="font-weight: bold;">Dormitory</a></li>
				    <li><a data-toggle="tab" href="#menu1" style="font-weight: bold">Meeting Room</a></li>
				    <li><a data-toggle="tab" href="#menu2" style="font-weight: bold">Commercial Store</a></li>
				    <li><a data-toggle="tab" href="#menu3" style="font-weight: bold">Promotion</a></li>
				</ul>

			<div style="background-color: #DEB887 ; padding: 0px;">
				<div class="tab-content " ">
				    <div id="home" class="tab-pane fade in active">
				    	<div class="container" >
				    		<div class="row">
				    			<div class="col-md-4 ">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/dorm1.jpg"></a>
							      	<p class="p-index-tab">SIIT Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Facility</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Damage Fine</p>
							    </div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Require Document</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Other Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">How to Payment</p>
							    </div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">How to retain or keep room</p>
							    </div>
				    		</div>
				    	</div>
				      
				    </div>
				    <div id="menu1" class="tab-pane fade">
				      	<div class="container">
				    		<div class="row">
				    			<div class="col-md-4 ">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">SIIT Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Facility</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Damage Fine</p>
							    </div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Require Document</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Other Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">How to Payment</p>
							    </div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">How to retain or keep room</p>
							    </div>
				    		</div>
				    	</div>
				    </div>
				    <div id="menu2" class="tab-pane fade">
				      	<div class="container">
				    		<div class="row">
				    			<div class="col-md-4 ">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">SIIT Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Facility</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Damage Fine</p>
							    </div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Require Document</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Other Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">How to Payment</p>
							    </div>
				    		</div>
				    	</div>
				    </div>
				    <div id="menu3" class="tab-pane fade">
				     	<div class="container">
				    		<div class="row">
				    			<div class="col-md-4 ">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">SIIT Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Facility</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Damage Fine</p>
							    </div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Require Document</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Other Dormitory</p>
							    </div>
							    <div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">How to Payment</p>
							    </div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-4">
							      	<a href="#"><img class="img-rounded image-index-tab " src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">How to retain or keep room</p>
							    </div>
				    		</div>
				    	</div>
				    </div>
				</div>
			</div>
	
				<!--End tab-->
				<!--start promote area-->
			
				<div class="form-inline" >
					<div class="col-md-6" style="padding-left: 0px; padding-right: 0px;">
						<img style="height: 325px; width: 100%;" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024">
						<a href="http://localhost/property/dorm-booking/" style="margin-bottom: 0px;" class="btn  button-index">Reservation !</a>
					</div>
					<div class="col-md-6" style="padding-left: 0px; padding-right: 0px; right: 0px; width:50;">
						<?php include('calender.php'); ?>
					</div>
				</div>
			
			


<?php get_footer(); ?>
