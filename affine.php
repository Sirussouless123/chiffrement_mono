<?php

include_once('fonctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiffrement|Polybe</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/2.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <header>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Chiffrement</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>

    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link " href="index.php">Chiffrement de César
        
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="polybe.php">Chiffrement de Polybe
		  <span class="visually-hidden">(current)</span>
		  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="affine.php">Chiffrement affine</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  </header>

  <section class="pt-3 mt-3 ">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="GET">
                        <span class="login100-form-title">
                            Chiffrement affine
                        </span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Entrez le message">
                            <input class="input100" type="text" name="mes" placeholder="Message">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Entrez a">
                            <input class="input100" type="number" name="a" placeholder="Valeur de a">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input mt-3" data-validate="Entrez b">
                            <input class="input100" type="number" name="b" placeholder="Valeur de b">
                            <span class="focus-input100"></span>
                        </div>
						

                        <div class="container-login100-form-btn pt-5">
                            <input class="login100-form-btn" value="Chiffrer" type="submit" name="chiffrer" />

                        </div>
                        <div class="container-login100-form-btn pt-5">
                            <input class="login100-form-btn" value="Dechiffrer" type="submit" name="dechiffrer" />

                        </div>

                        <?php

                        if (isset($_GET['chiffrer'])) {
                        ?>
                            <div class="text-center mt-3 p-2 mb-5 bg-primary rounded-pill">
                                <h3 class="text-success">Résultat</h3>
                                <p class="pt-1  text-center text-white"><?= chiffrementAffine($_GET['mes'],$_GET['a'],$_GET['b']) ?></p>
                            </div>
                        <?php
                        }
                        ?>
                        <?php

                        if (isset($_GET['dechiffrer'])) {
                        ?>
                            <div class="text-center mt-3 p-2 mb-5 bg-primary rounded-pill">
                                <h3 class="text-success">Résultat</h3>
                                <p class="pt-1  text-center text-white"><?= dechiffrementAffine($_GET['mes'],$_GET['a'],$_GET['b']) ?></p>
                            </div>
                        <?php
                        }
                        ?>


                    </form>
                </div>
            </div>
        </div>
    </section>


    


    

  <script src="js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

