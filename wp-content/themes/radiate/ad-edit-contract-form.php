<?php
/**
 * Template Name: ad-edit-contract-form
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


if(get_the_title() == 'ad-edit-contract-form'  )
{
get_header('admin');
}
else
{
get_header();
}
?>
<style type="text/css">
	label{
		font-weight: bold;
	}
</style>
<div class="sidenav" id="sidebarslide">
	
  <a class="slidesidebar" href="#" >Properties</a>
  <a class="slidesidebar active" >Contract and Reservation Form</a>
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
<div class="container int">
	<form action="" method="post">
		<h2 style="padding: 10px; font-weight: bold;">Edit Contract</h2>
		<div style="border: 1px solid gray"></div>
		<img src="<?php bloginfo('template_url'); ?>/images/header/rangsit.jpg" style="height: 130px; width: 100px; margin-left:80%; border: 1px solid black; margin-top: 10px;">
		<button class="btn btn-default" style=" margin-left:79%; margin-top: 10px;">Insert Image</button>

			<div class="form-inline" style="margin-top: -80px;">
	  				<div class="form-group col-md-3"  >
	  					<label >First Name:</label>
	  				</div>
	  				<div class="form-group  "  >
	  					<input type="text" name="firstname" class="form-control" style="margin-left: 15px;" value="Krit">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3 " style="margin-top: 20px;" >
	  					<label >Last Name:</label>
	  				</div>
	  				<div class="form-group" style="margin-top: 20px;" >
	  					<input type="text" name="lastname" class="form-control" style="margin-left: 15px;" value="Tong">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;" >
	  					<label >Student ID :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="studentid" class="form-control" value="588447577">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Citizen ID/Passport ID :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="idcard" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Curriculum :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					 <select class="form-control" name="curriculum">
	  					 		<option value="Che">-</option>
                                <option value="Che">ChE</option>
                                <option value="CE">CE</option>
                                <option value="CPE">CPE</option>
                                <option value="EC">EC</option>
                                <option value="EM">EM</option>
                                <option value="IE">IE</option>
                                <option value="IT">IT</option>
                                <option value="MT">MT</option>
                                <option value="ME">ME</option>
                        </select>
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Birth Date :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="Date" name="birthdate" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Age :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="age" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Address.No :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="addrno" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Soi :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="soi" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Street :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="street" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Sub District :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="sub-district" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >District :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="district" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Province/Country :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="country" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Zip Code :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="zipcode" class="form-control">
	  				</div>	
	  		</div>

	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >E-mail :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="email" name="email" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Mobile Phone :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="mphone" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Phone :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="phone" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Number of Month :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="nummonth" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Begin Contract :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="Date" name="begin-date" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >End Contract :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="Date" name="end-date" class="form-control">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label>Resident Type :</label>
	  				</div>
	  				<div class="form-group col-md-7" style="margin-top: 20px;">
	  					 <select class="form-control" name="residenttype">
                              <option value="Type 1 The tenant intends to stay alone with the use of both A and B rooms during the rental period." selected>Type 1 The tenant intends to stay alone with the use of both A and B rooms during the rental period.</option>
                              <option value="Type 2   The tenant stays with his/her specified roommate.">Type 2 The tenant stays with his/her specified roommate.</option>
                              <option value="Type 3  The tenant stays with a roommate that the institute has assigned.">Type 3  The tenant stays with a roommate that the institute has assigned.</option>
                            </select>
	  				</div>	
			</div>
			
			 <button type="submit" class="btn submit-button" style="margin-left: 30%; margin-top: 20px; margin-bottom: 20px;">Edit</button>
  			 <a href="http://localhost/property/contract-meu-rs/" class="btn submit-button" style="margin-left: 5%; margin-top: 20px; margin-bottom: 20px;">Cancel</a>
  			
	</form>

</div>

