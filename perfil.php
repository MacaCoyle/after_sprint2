<?php
  require_once 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Passion+One:400,700,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/main.js"></script>
<title>After question</title>

</head>
<body>
<header class="header">
<div class="header_wrapper">
<div class="header_logo" >
<a href="index.php"> <img src="images/logo.png"> </a>
</div>
  <div class="botonera">
  <nav class="main-nav">
      <ul>
        <li><a href="index.php#que_es1">¿Qué es?</a></li>
        <li><a href="index.php#reglas1">Reglas</a></li>
        <li><a href="index.php#players">Players</a></li>
        <li><a href="faqs.php">FAQS</a></li>
        <li><a href="index.php#descargar">Descargalo</a></li>
        <li><a href="register.php">Registrate</a></li>
    </ul>
  </nav>
  <button class="button_login"> <a href="login.php">Login</a></button>
  </div>
</div>
</header>

    <main class="welcome">

      <?php if (controlarLogin()) { ?>

      <h2> Bienvenido <?php echo $_SESSION["email"]; ?> </h2>

      <a href="logout.php">Logout</a>

      <?php } else { ?>
      <h1>No estás logueado.</h1>

      <?php } ?>

    </main>
<footer>
  <div class="redes">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a>
  </div>
  <nav class="footer">
    <uL>
      <li>¿Qué es?</li>
      <li>Reglas</li>
      <li>FAQS</li>
      <li>Copyright  2018. Todos los derechos reservados</li>
    </uL>
  </nav>
</footer>

</div> <!-- cierra container -->
  </body>
</html>
