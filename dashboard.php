<!DOCTYPE html>
<html lang="en">
<head>
	<title>DashBoard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <!-- CSS files -->
	<link rel="stylesheet" href="./assets/styles/styles.css">
</head>
<body>
	<?php
		session_start();
		/*session is started if you don't write this line can't use $_Session  global variable*/
		if(empty($_POST['username'])){
			if(!isset($_SESSION['user'])){
				header('Location:./nologin.php');
			}
		}else{
			if(!isset($_SESSION['user'])){
				$_SESSION["user"]=$_POST["username"];
				$_SESSION["date"]=date("M d, Y");
			}
		}
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
		require("controllers/controller.php");
		$control = new Controller();
	?>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<a href="./dashboard.php" class="btn btn-default float-left" role="button"><p class="h2">Manage <b>Employees</b></p></a>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal"><i class="fas fa-plus-circle"></i> <span>Add New Employee</span></a>				
						<div class="search-box">
							<i class="fas fa-search"></i>
						    <input type="text" class="form-control" placeholder="Search&hellip;">
						</div>
						<br>
					</div>
				</div>
			</div>
			<table class="table table-dark table-hover">
				<thead>
					<tr>
                        <th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="DC">
					<?php echo $control->create_view_fulltable(); ?>
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item disabled"><a href="#" >Next</a></li>
				</ul>
			</div>
			<br><br><br>
			<a href="./logout.php" 
                class="btn btn-secondary" 
                role="button" aria-pressed="true">Log Out</a>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="add-form" action="./forms/process-insert.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee <i class="fas fa-plus-circle"></i></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label><i class="fas fa-user"></i> Name</label>
						<input id="add-name" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label><i class="fas fa-envelope"></i> Email</label>
						<input id="add-email" type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label><i class="fas fa-address-card"></i> Address</label>
						<textarea id="add-address" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label><i class="fas fa-phone-alt"></i> Phone</label>
						<input id="add-phone" type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" name="submit" value="Add" >
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee <i class="fas fa-user-edit"></i></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label><i class="fas fa-user"></i> Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label><i class="fas fa-envelope"></i> Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label><i class="fas fa-address-card"></i> Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label><i class="fas fa-phone-alt"></i> Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee <i class="fas fa-user-edit"></i></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Record?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- partial -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                crossorigin="anonymous"></script>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/ae2bc38384.js" crossorigin="anonymous"></script>
		<!--Scripts-->
		<script type="text/javascript" src="./assets/Scripts/form-insert.js"> </script>
</body>
</html>