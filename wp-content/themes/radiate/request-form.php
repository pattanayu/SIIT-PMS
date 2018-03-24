<?php
/**
 * Template Name: request-form
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

if(is_page(request-form))
{
get_header('normal');
}
else
{
get_header();
}

?>


<div class="container" style="margin-bottom: 20px; margin-top: 50px;">
	<h2 class="fo" style="font-size: 25px; font-weight: bold;">Request Form</h2>
    <div style="border: 1px solid gray"></div>
    <form action="http://localhost/property/index.php" method="post">
        <div class="form-inline" style="margin-top: 20px;">
                        <div class="form-group">
                            <label class="col-md-4" style="font-weight: bold;">แจ้งความประสงค์</label>
                            <textarea class="fo form-control" rows="7" cols="50"></textarea>
                        </div>
        </div>
        <div class="form-inline" style="margin-top: 20px;">
                        <div class="form-group col-md-6">
                            <label class="col-md-3" style="font-weight: bold;" >Name</label>
                            <input type="text" class="form-control col-md-3">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-4" style="font-weight: bold;" >Surname</label>
                            <input type="text" class="form-control col-md-2">
                        </div>
                        <br>
        </div>
         <div class="form-inline" style="margin-top: 20px;">
                        <div class="form-group col-md-6">
                            <label class="col-md-3" style="font-weight: bold;">E-mail</label>
                            <input type="text" class="form-control col-md-3">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-4" style="font-weight: bold;">Mobile Phone</label>
                            <input type="text" class="form-control col-md-2">
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
        <a id="button-modal" class="btn submit-button" style="margin-left: 35%; margin-top: 50px;">
        Sent</a>
        <a href="http://localhost/property/index.php" class="btn submit-button" style="margin-left: 3%; margin-top: 50px;">Cancel</a>
    </form>
    
</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("button-modal");

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