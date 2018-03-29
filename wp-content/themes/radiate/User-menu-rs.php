<?php
/**
 * Template Name: User-menu-rs
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



if(get_the_title() == 'User-menu-rs'  )
{
get_header('admin');
}
else
{
get_header();
}
?>
<div class="sidenav" id="sidebarslide">
	<h3 style="text-align: center; color: white; padding: 5px;">Rangsit </h3>
  <a class="slidesidebar" href="#">Properties</a>
  <a class="slidesidebar" href="#">Contract and Reservation Form</a>
  <a class="slidesidebar active" >User</a>
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
	<h2 style="padding: 10px; font-weight: bold;">User</h2>
	<div style="border: 1px solid gray ;margin-bottom: 20px;"></div>
	<form class="form-inline" action="" style="margin-top: 20px;">
             
              <div class="form-group" >
               <label style="font-weight: bold;">User Type: </label>
				<select class="form-control" name="propertype"> 
							<option value="student">Students</option>
							<option value="renter">Renters</option>
							<option value="teacher">Teachers</option>
							
				</select>
              </div>
              <div class="form-group" style="margin-left: 20px;">
				<select class="form-control" name="propertype"> 
							<option value="present">present</option>
							<option value="old">Old</option>
							
				</select>
              </div>
              <div class="form-group" style="margin-left: 30px;">
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <button class="btn search-button "> Search</button>
              </div>
              
              <div class="form-group" style="margin-left: 30px;">
                <a class="btn submit-button "> Add User</a>
              </div>
    </form>
	<table class="table" style="margin-top: 20px;">

				    <!--Table head-->
				    <thead style="background-color: #3b1f62;">
				        <tr style="color: white;">
				            <th>#</th>
				            <th>ID</th>
				            <th>Name</th>
				            <th>UserName</th>
				            <th>Types</th>
				            <th>Edit</th>
				            <th>Delete</th>
				        </tr>
				    </thead>
				    <!--Table head-->

				    <!--Table body-->
				    <tbody style="background-color: white;">
				        <tr>
				            <th scope="row">1</th>
				            <td>1123</td>
				            <td>Contract</td>
				            <td>Max</td>
				            <td>Student</td>
				            <td> <button class="btn btn-warning">Edit</button> </td>
				            <td> <button class="btn btn-danger">Delete</button> </td>
				        </tr>
				        
				    </tbody>
				    <!--Table body-->
				</table>
			<!--Table-->
</div>