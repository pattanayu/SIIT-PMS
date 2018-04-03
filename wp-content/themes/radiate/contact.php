<?php
/**
 * Template Name: contact
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


if(get_the_title() == 'contact'  )
{
get_header('normal');
}
else
{
get_header();
}
?>
<body onload="changemap()">
<div class="container" style="margin-bottom: 20px; margin-top: 50px;">
	<h2 style="padding: 10px; font-weight: bold;">Contact Us</h2>
	<div style="border: 1px solid gray"></div>
	<div style="font-weight: bold ;margin-top: 20px;">
		<label >Please select Place :</label>
		<select class="form-control" onchange="changemap()" id="mapchange">
			<option value="1">Rangsit Campus</option>
			<option value="2">Bangkadi Campus</option>
			<option value="3">SIIT Dormitory</option>
		</select>
	</div>
	<div id="map" style="width:100%;height:400px;background:lightgray;margin-top: 20px;"></div>
	<h2 style="padding: 10px; font-weight: bold;">Our Staff</h2>
	<div style="border: 1px solid gray"></div>
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-4" style="text-align: center; font-weight: bold;">
			<img style="border-radius: 10px; border: 5px solid white;" src="<?php bloginfo('template_url'); ?>/images/header/cpmd.png" >
			<label>Mr. Saengjan Kwang-Khwang </label>
			<label>Tel.no +66-558-4586 </label>
			<small>Chief of Property Management Division </small>
		</div>
		<div class="col-md-4" style="text-align: center; font-weight: bold;">
			<img style="border-radius: 10px; border: 5px solid white;" src="<?php bloginfo('template_url'); ?>/images/header/Pmod.png" >
			<label>Ms. Rung-aroon Kobkaew  </label>
			<label>Tel.no +66-84-897-5687 </label>
			<br>
			<small>Administration Staff</small>
		</div>
		<div class="col-md-4" style="text-align: center; font-weight: bold;">
			<img style="border-radius: 10px; border: 5px solid white;" src="<?php bloginfo('template_url'); ?>/images/header/tech.png" >
			<label>Mr. Suriya Suttipongwirat   </label>
			<label>Tel.no  </label>
			<br>
			<small>Technician</small>
		</div>

	</div>
	<h2 style="padding: 10px; font-weight: bold;">Our Address</h2>
	<div style="border: 1px solid gray"></div>
	<div style="margin-top: 20px; text-align: left; font-weight: bold;">
		<h4 >Rangsit Campus</h4>
		<small>99 Moo 18, Km. 41 on Paholyothin Highway Khlong Luang, Pathum Thani 12120, Thailand</small>
		<br>
		<label>Tel.	+66-2-986-9009~13,
 		+66-2-986-9103~10,
		+66-2-564-3221~9
		</label>
		<br>
		<label>Fax	+66-2-986-9112~3</label>
	</div>
	<div style="margin-top: 20px; text-align: left; font-weight: bold;">
		<h4 >Bangkadi Campus</h4>
		<small>131 Moo 5, Tiwanont Road, Bangkadi Muang Pathum Thani 12000, Thailand</small>
		<br>
		<label>Tel.	+66 (0) 2501 3505-20
		</label>
		<br>
		<label>Fax	+66 (0) 2501 3524</label>
	</div>

	<script>
	function changemap() {
    var x = document.getElementById("mapchange").value;
    if (x == 1) {
    	var mapOptions = {
	    center: new google.maps.LatLng(14.0688548,100.6073634),
	    zoom: 17,
	    mapTypeId: google.maps.MapTypeId.HYBRID
	}
    }
    if (x==2) {
    	var mapOptions = {
	    center: new google.maps.LatLng(13.9811264,100.5542991),
	    zoom: 18,
	    mapTypeId: google.maps.MapTypeId.HYBRID
	}
    }
    if (x==3) {
    	var mapOptions = {
	    center: new google.maps.LatLng(13.9819963,100.5514658),
	    zoom: 19,
	    mapTypeId: google.maps.MapTypeId.HYBRID
	}
    }
   	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}



	
	</script>


      

</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu0NsynQaWXyyTrrajtsTabdUA454Wn4I&callback=myMap"></script>

<?php get_footer(); ?>

