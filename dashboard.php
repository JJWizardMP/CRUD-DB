<!DOCTYPE html>
<html lang="en">
	<head>
		<title>DashBoard</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Boostrap -->
		<link rel="stylesheet" 
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
			crossorigin="anonymous">
		<!-- Font Awesome -->
		<link rel="stylesheet" 
			href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel='stylesheet' 
			href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel='stylesheet' 
			href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
		<!-- CSS files -->
		<link rel="stylesheet" href="./assets/styles/styles.css">
	</head>
	<body>
		<?php
			session_start();
			/*session is started if you don't write 
				this line can't use $_Session  global variable*/
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
		?>
		<div class="container-xl">
			<div class="table-responsive">
				<div class="table-wrapper">
					<div class="table-title">
						<div class="row">
							<div class="col-sm-8">
								<a href="./dashboard.php" class="btn btn-default float-left" 
									role="button"><p class="h2">Manage <b>Employees</b></p></a>
							</div>
							<div class="col-sm-4 float-right">
								<div class="input-group rounded ">
									<input id="search-term" name="search" type="search" 
										class="form-control rounded" placeholder="Search by name" 
										aria-label="Search" aria-describedby="search-addon" />
									<button id="search-addon" class="input-group-text border-0">
										<i class="fas fa-search"></i>
									</button>
								</div>
								<br>
								<a id="addnew" class="btn btn-info" data-toggle="modal">
									<i class="fas fa-plus-circle"></i><span>Add New Employee</span></a>				
								<br>
							</div>
						</div>
					</div>
					<div id="alert" class="alert alert-dismissible alert-info text-center" 
							style="margin-top:20px; display:none;">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<span id="alert_message"></span>
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
						<tbody id="Dinamic-table">							

						</tbody>
					</table>
					<div id="Dinamic-pagination" class="clearfix">

					</div>
					<br>
					<a href="./logout.php" 
						class="btn btn-secondary" 
						role="button" aria-pressed="true">Log Out</a>
				</div>
			</div>        
		</div>
		<?php include_once("modals.html")?>
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
			integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
			crossorigin="anonymous"></script>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/ae2bc38384.js" crossorigin="anonymous"></script>
		<!--Scripts-->
		<script type="text/javascript" src="./assets/Scripts/Actions.js"> </script>
	</body>
</html>