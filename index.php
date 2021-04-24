<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
        <!-- CSS files -->
        <link rel="stylesheet" href="./assets/styles/login.css">
	</head>
    <body class="p-3 mb-2 bg-primary">
		<div class="card dark Content-Center" >
			<div class="card-body">
				<p class="h3 card-title center-block">INICIAR SESION</p>
				<br>
				<!-- Form -->
				<form action="dashboard.php" method="post">
                    <!--User Field-->
                    <div class="mb-1 input-container">
                        <i class="fas fa-user icon"></i> <label>Name</label>
                        <input  type="text" name="username" id="defaultForm-username" class="form-control validate input-field"
                        placeholder="">
                        <label data-error="wrong" data-success="right" for="defaultForm-user"></label>
                    </div>
					<p class="center-block" >
						<input class="btn btn-info" type="submit" 
						name="submit" value="Entrar" /> 
					</p>
				</form>
				<!-- END --> 
			</div> 
		</div>
        <!-- Footer -->
        <footer id="Foot" class="bg-dark text-center text-white">
                <div class="container-fluid">
                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © <?php echo date("Y"); ?> copyright:
                        <a class="text-white" href="https://www.unicaribe.mx/" target="blank_">
                            Universidad del Caribe</a>
                    </div>
                    <!-- Copyright -->
                </div>
            </footer>
        <!-- End Footer -->
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
	</body>
</html>
