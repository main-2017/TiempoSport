<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tiempo Sport</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="stylesheet" media="(max-width: 768px)" type="text/css" href="css/medium-style.css">
	<link rel="stylesheet" media="(max-width: 544px)" type="text/css" href="css/extra-small-style.css">
</head>
<body>
	<header id="header" class="header-fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light bg-color-white">
  			<a class="navbar-brand" href="#"><img class="img-logo" src="img/logo.png" alt="Tiempo Sport"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
    	<button class="btnz d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3 weather-btn" id="weather">
    		<img src="img/sun.png" class="weather-img"><span id="current-temp" class="temp-actual">20</span><span class="max-min" id="max-Temp">23&#176;</span>
    		<span class="max-min" id="min-temp">11&#176;</span>
    	</button>
    </div>
    <h1 id="slogan" class="slogan-top d-none d-sm-block">Slogan diario</h1>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="tiempo-font">A </span>&nbsp;Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#outstanding-news"><span class="tiempo-font">B </span>&nbsp;Fútbol</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sports"><span class="tiempo-font">C </span>&nbsp;Motores</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#tecnology"><span class="tiempo-font">D </span>&nbsp;Polideportivo</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#entertainment"><span class="tiempo-font">E </span>&nbsp;Extras</a>
      </li>
      <li class="nav-item social-content d-block d-sm-block d-lg-none">
      	<p class="social-icons">F</p>
      	<p class="social-icons">T</p>
      	<p class="social-icons">I</p>
      </li>
    </ul>
  </div>
</nav>
	</header><!-- /header -->
	<div class="container">
		<div class="row information-content d-block d-sm-block d-md-none">
  			<div class="inner-information-content">
  				<h4 class="text-content">Azul/19&#176;</h4>
  			</div>
  			<div class="inner-information-content">
  				<h4 id="today" class="text-content">10 de mayo 2018</h4>
  			</div>
  		</div>
		<div class="row span-content d-none d-md-block">
			<h4 class="span-content-inner" id="dateField"></h4>
		</div>

		<!-- Outstanding news in carousel -->
		<!-- Just visible in small and extra small devices -->
		<h2 class="section-title"><span class="tiempo-font">T </span>Destacadas</h2>
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide col-md-9 no-padding" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="w-100" src="img/slider-01.jpg" alt="First slide">
				      <div class="carousel-caption">
					    <h5 class="inner-carousel-title">El Messias</h5>
					    <p class="inner-carousel-content">A menos de un mes para el Mundial, las ilusiones puestas en el mejor del mundo</p>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="w-100" src="img/slider-02.jpg" alt="Second slide">
				      <div class="carousel-caption">
					    <h5 class="inner-carousel-title">El Rombo campeón</h5>
					    <p class="inner-carousel-content">Renault se impuso cómodamente en el autódromo de Olavarría el pasado domingo</p>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="w-100" src="img/slider-03.jpg" alt="Second slide">
				      <div class="carousel-caption">
					    <h5 class="inner-carousel-title">Dos potencias se saludan</h5>
					    <p class="inner-carousel-content">Floyd Mayweather se robó todas las miradas en el partido a beneficio organizado por Kobe Bryant</p>
					  </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			<div class="col-md-3 no-padding">
				<article class="small-article no-border-top">
					<img class="img-adapt" src="img/min-banner.jpg" alt="Imagen de 276px por 317px"> <!-- Colocar imagen de 276px por 317px -->
				</article>
				<article class="small-article no-border-top smaller">
					<h4 class="label-sm">Titulo</h4>
					<br>
					<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus asperiores numquam enim exercitationem officiis voluptatum molestias consectetur aspernatur dolorum.</p>
				</article>
			</div>
			</div>

		
		<div class="wrapper">
			
		</div>
		<section class="row" id="complementary-news-1">
			<article class="col-lg-4 col-md-4 col-sm-12 small-article">
				<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
			</article>
			<article class="col-lg-4 col-md-4 col-sm-12 small-article">
				<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
			</article>
			<article class="col-lg-4 col-md-4 col-sm-12 small-article">
				<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
			</article>
		</section>
		<div class="wrapper">
			
		</div>
		<div class="row sponsor-banner">
			
		</div>
		<div class="wrapper">
			
		</div>
		<h2 class="section-title"><span class="tiempo-font">T </span>Más Noticias</h2>
		<section class="row" id="media-news">
			
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>	
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>			
		</section>
		<div class="wrapper">
			
		</div>
		<section class="row" id="media-news">
			
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>	
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>			
		</section>
		<div class="wrapper">
			
		</div>

		<section class="row" id="media-news">
			
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>	
			<div class="col-lg-4 col-md-4 col-sm-12 no-padding">
				<article class="small-article">
					<img class="img-adapt" alt="" src="img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</article>
			</div>			
		</section>

		<div class="wrapper">
			
		</div>
		
	</div>
	<div class="row">
		<footer>
			<br>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<ul class="social-field">
						<li><p class="social-icons white">F</p></li>
						<li><p class="social-icons white">T</p></li>
						<li><p class="social-icons white">I</p></li>
					</ul>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h5 class="atribution">&copy;2018 Tiempo Sport</h5>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h5 class="atribution">by Main Group</h5>
				</div>
			</div>
		</footer>
	</div>
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>