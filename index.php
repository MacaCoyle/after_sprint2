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
<div class="container">

<header class="header">
<div class="header_wrapper">
<div class="header_logo" >
<a href="index.php"> <img src="images/logo.png"> </a>
</div><!-- cierra header_logo -->
	<div class="botonera">
	<nav class="main-nav" id="myTopnav">
  		<ul>
    		<li><a href="#que_es1">¿Qué es?</a></li>
    		<li><a href="#reglas1">Reglas</a></li>
    		<li><a href="#players">Players</a></li>
    		<li><a href="faqs.php">FAQS</a></li>
    		<li><a href="#descargar">Descargalo</a></li>
    		<li><a href="register.php">Registrate</a></li>
 	 	</ul>
 	 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
	</nav>
	<button class="button_login"> <a href="login.php">Login</a></button>
	</div><!-- cierra botonera -->
</div>
</header>

<main>
<div class="slideshow-container">
	  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img class="banner" src="images/banner.png">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img class="banner" src="images/banner.png">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img class="banner" src="images/banner.png">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div> <!-- cierra carrousel -->

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

		<article id="que_es1" class="que_es">
		<div class="que_es">
		<div class="que_text">
		<h2>¿Qué es? =0</h2>
		<br>
		<p>Es un videojuego de trivia destinado para móviles, tambien tiene su plataforma web. Hay dos modos de juego sin un marcados de puntos en donde solo se hacen preguntas y no rige un timing ni un score por respuesta y esta la version duelo entre jugadores o equipos en donde compiten en ser el primero en obtener todas las preguntas respondias, cada uno de ellos representando una temática específica (Artes, Ciencia, Deportes, Entretenimiento, etc). Para ello, deben rellenar una barra de progreso contestando correctamente preguntas de selección múltiple, cuya temática es determinada previamente por el giro de una ruleta</p>
		</div>
		</div>
		<div class="img_reglas">
		<img src="images/collage-que.png">
		</div> <!-- img_reglas -->


	</article>

	<article id="reglas1" class="reglas">
		<div class="que_es">
		<div class="que_text">
		<h2>Reglas ;)</h2>
		<div class="separador_reglas">
		<h3 class="numeros">1</h3>
		<p>El objetivo del juego es obtener todas la preguntas respondidas de forma original y con el menor tiempo posible.
		</p>
		</div>
		<div class="separador_reglas">
		<h3 class="numeros">2</h3>
		<p>Nunc quis mattis velit, eu aliquet mi. Proin eu leo odio. Vestibulum finibus sagittis turpis, sit amet hendrerit mauris semper in. Vivamus ornare pretium tempor, sit amet hendrerit mauris semper in. Vivamus ornare pretium tempor. 
		</p>
		</div>
		<div class="separador_reglas">
		<h3 class="numeros">3</h3>
		<p>Nunc quis mattis velit, eu aliquet mi. Proin eu leo odio. Vestibulum finibus sagittis turpis
		</p>
		</div><!-- cierro separador de reglas 3 -->
		</div>
		</div>
		<div class="img_reglas">
		<img src="images/mano-after.png">
		</div> <!-- img_reglas -->
		
	</article>
     
	<article id="players" >
	<div class="que_es">
	<h2>¿Quiénes jugaron? :D</h2>
	</div>
	<img class="banner" src="images/bannerfotos.jpg">
	</article>

	<article id="descargar" class="descargalo">
		<div class="descargar">
		<h2>Descargalo ya mismo !</h2>
		<br>
		<p>Y sumate al nuevo trending topic de bares!</p>	
		</div>
		<div class="descargar_imgs">
		<img src="images/screenshome.png">
		<img src="images/collageiphones.png">
		</div> <!-- img_descargalo -->

	</article>
</main>
 
<footer>
	<div class="redes">
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-instagram"></a>
	</div>
	<nav class="footer">
		<uL>
    		<li><a href="index.php#que_es1">¿Qué es?</a></li>
    		<li><a href="index.php#reglas1">Reglas</a></li>
    		<li><a href="faqs.php">FAQS</a></li>
			<li>Copyright  2018. Todos los derechos reservados</li>
		</uL>
	</nav>
</footer>

</div> <!-- cierra container -->

<script type="text/javascript">
  var slideIndex = 0;
showSlides(slideIndex);
</script>
</body>
</html>