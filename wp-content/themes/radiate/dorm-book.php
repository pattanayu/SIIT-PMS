<?php
/**
 * Template Name: dorm-book
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


if(is_page(dorm-booking))
{
get_header('normal');
}
else
{
get_header();
}
?>
<script>
function roomtypeer() {
	var y = 4500;
    var x = document.getElementById("roomtypee").value;
    if (x == 1) {
    	y = 4500;
    	document.getElementById("showfriend").style.display = 'none';
    }
    else if (x == 2) {
    	y = 2500;
    	document.getElementById("showfriend").style.display = '';

    }
    else if (x == 3) {
    	y = 3000;
    	document.getElementById("showfriend").style.display = 'none';
    }
    else if (x == 4) {
    	y = 2500;
    	document.getElementById("showfriend").style.display = 'none';
    }
    document.getElementById("price").innerHTML = y;

}
</script>
<body onload="roomtypeer()">
<form action="http://localhost/property/index.php" id="bookform" method="post">
	<div class="container" style="margin-bottom: 20px; margin-top: 50px;">
		<h2 style="padding: 10px; font-weight: bold;">Dormitory Reservation</h2>
		<div style="border: 1px solid gray"></div>
		<div class="form-inline">
			<div class="col-md-3" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Room Type *</label>
					<select class="form-control" name="roomtype" onchange="roomtypeer()" id="roomtypee"> 
						<option value="1">Room A and B</option>
						<option value="2">Room A and B With Friend</option>
						<option value="3">Room A only</option>
						<option value="4">Room B only</option>
					</select>
				</div>
			</div>
			<div class="col-md-2" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Your Price</label>
					<br>
					<label id="price" style="font-weight: bold;"></label>
				</div>
			</div>
			<div class="col-md-3" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Start Date *</label>
					<input type="Date" name="startdate" class="form-control">
				</div>
			</div>
			<div class="col-md-3" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Number of Month *</label>
					<input type="text" name="numberofmonth" class="form-control">
				</div>
			</div>
		</div>
		<div class="form-inline" id="showfriend">
			<div class="col-md-3"  style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Friend's Name</label>
					<input type="text" name="fname" class="form-control">
				</div>
			</div>
			<div class="col-md-3"  style="margin-top: 20px;">
				<div class="form-group" >
					<label style="font-weight: bold;">Friend's Surname</label>
					<input type="text" name="fsurname" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-bottom: 20px;">
		<h2 style="padding: 10px;">Your Information</h2>
		<div style="border: 1px solid gray"></div>
		<div class="form-inline">
			<div class="col-md-4" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Name</label>
					<br>
					<input type="text" name="name" class="form-control">
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Surname</label>
					<br>
					<input type="text" name="surname" class="form-control">
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Student ID</label>
					<br>
					<input type="text" name="studentid" class="form-control">
				</div>
			</div>
		</div>
		<div class="form-inline">
			<div class="col-md-4" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">E-mail</label>
					<br>
					<input type="text" name="email" class="form-control">
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 20px;">
				<div class="form-group">
					<label style="font-weight: bold;">Mobile Phone</label>
					<br>
					<input type="text" name="mobile" class="form-control">
				</div>
			</div>
			
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
        Reserve</a>
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