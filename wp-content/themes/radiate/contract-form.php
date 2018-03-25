<?php
/**
 * Template Name: contract-form
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


if(is_page(contract-form))
{
get_header('normal');
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
<form action="http://localhost/property/index.php" id="bookform" method="post">
	<div class="container" style="margin-bottom: 20px; margin-top: 50px;">
		<h2 style="padding: 10px; font-weight: bold;">Contract form</h2>
		<div style="border: 1px solid gray"></div>

		<img src="<?php bloginfo('template_url'); ?>/images/header/rangsit.jpg" style="height: 130px; width: 100px; margin-left:80%; border: 1px solid black; margin-top: 10px;">
		<button class="btn btn-default" style=" margin-left:79%; margin-top: 10px;">Insert Image</button>

			<div class="form-inline" style="margin-top: -80px;">
	  				<div class="form-group col-md-3"  >
	  					<label >First Name:</label>
	  				</div>
	  				<div class="form-group  "  >
	  					<input type="text" name="firstname" class="form-control" style="margin-left: 15px;">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3 " style="margin-top: 20px;" >
	  					<label >Last Name:</label>
	  				</div>
	  				<div class="form-group" style="margin-top: 20px;" >
	  					<input type="text" name="lastname" class="form-control" style="margin-left: 15px;">
	  				</div>	
	  		</div>
	  		<div class="form-inline">
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<label >Student ID :</label>
	  				</div>
	  				<div class="form-group col-md-3" style="margin-top: 20px;">
	  					<input type="text" name="studentid" class="form-control">
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
	
	<div id="myModal" class="modal">
		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <div class="container">
		    	<h2>Wait for Approval from Admin</h2>
		    	<label style="padding: 50px;">Click "Ok" button to proceed and check your e-mail for approval </label>
		    	<br>
		    	<button class="btn submit-button" type="submit" style="margin-left: 80%;">Ok</button>
		    </div>
		  </div>
	</div>
	<div style="margin-bottom: 20px;">
	<a id="button-popmodal" class="btn submit-button" style="margin-left: 35%; margin-top: 50px;">
        Submit</a>
    <a href="http://localhost/property/index.php" class="btn submit-button" style="margin-left: 3%; margin-top: 50px;">Cancel</a>
    </div>
</form>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("button-popmodal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<?php get_footer(); ?>