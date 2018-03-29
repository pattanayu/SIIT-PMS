<?php
/**
 * Template Name: campus-menu
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



if(get_the_title() == 'campus-menu'  )
{
get_header('admin');
}
else
{
get_header();
}
?>
<div class="sidenav" id="sidebarslide">
	<h3 style="text-align: center; color: white; padding: 5px;">Campus</h3>
  <a class="slidesidebar active" >Properties</a>
  <a class="slidesidebar" href="#">Contract and Reservation Form</a>
  <a class="slidesidebar" href="#">User</a>
  <a class="slidesidebar" href="#">Expends</a>
</div>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("sidebarslide");
var a = header.getElementsByClassName("slidesidebar");
for (var i = 0; i < a.length; i++) {
  a[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<div class="container int" style="height: 599px;">
	<h2 style="padding: 10px; font-weight: bold;">Select Campus</h2>
	<div style="border: 1px solid gray"></div>
	<div class="row">
		<a href="http://localhost/property/create-campus/" class="btn submit-button" style="margin-left: 1%; margin-top: 20px;">Add Campus</a>
		<a href="http://localhost/property/edit-campus/" class="btn submit-button" style="margin-left: 1%; margin-top: 20px;">Edit Campus</a>
	</div>
	
	<div class="row" style="padding: 10px;">
				    			<div class="col-md-4 " style="padding: 10px;">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/rangsit.jpg"></a>
							      	<p class="p-index-tab">Rangsit Campus</p>

							    </div>
							    <div class="col-md-4" style="padding: 10px;">
							      	<a href="#"><img class="img-rounded image-index-tab" src="<?php bloginfo('template_url'); ?>/images/header/bangkadi.jpg_1024"></a>
							      	<p class="p-index-tab">Bangkadi Campus</p>
							    </div>
							   
	</div>
</div>