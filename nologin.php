<!DOCTYPE html>
<html lang="en">
    <head>
        <title>No Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- CSS files -->
        <link rel="stylesheet" href="./assets/styles/nologin.css">
    </head>
    <body>
        <div class="full-window container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-template">
                        <img src="./assets/Images/cheemssad.jpg" alt="Cheems Sad" class="img-thumbnail img-responsive">
                        <h1>Oops!</h1>
                        <h2>Error</h2>
                        <div class="error-details">
                            Debes iniciar una sesión para poder acceder al contenido
                        </div>
                        <div class="error-actions">
                            <a href="./index.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-home"></span>
                                Iniciar Sesión </a>
                        </div>
                    </div>
                </div>
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
 	</body>
</html>