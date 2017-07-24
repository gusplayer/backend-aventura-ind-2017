<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
	<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" > -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >
	<meta name="keywords" lang="es" content="">
	<meta name="robots" content="All">
	<meta name="description" lang="es" content="">
	<title>IQ - Sapiens | Heroes</title>
	<link rel="stylesheet" href="css/stylesheet.css" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.rwdImageMaps.min.js"></script>
	<script src="scripts/func.js"></script>
</head>
<body class="Back-one">
<div id="mobileMenu">
	<img id="menuShow" src="images/line-menu.png" style="cursor: pointer;" >
	<div class="top-menu-title">
		<i class="icon-user"></i>
		 <?php
                        $nom = explode(" ", Auth::user()->nombres);
                        $label = $nom[0]." ".$nom[1]." ".$nom[2]
          ?>
		<h1>{{ $label }}</h1>
	</div>
	<img src="images/logo-negativo.png">
</div>
<div id="mobile-lateral">
	<img src="images/logo.png" style="width: 100%;">
	<ul>
		<li class="selected"><a href="instrucciones"><i class="icon-profile"></i> <span>Instrucciones</span></a></li>
		<li><a href="mapa"><i class="icon-location2"></i> <span>Mapa</span></a></li>
		<li><a href="logout"><i class="icon-user"></i> <span>Cerrar Sesión</span></a></li>
	</ul>
</div>
<section>
	<div class="Back-inside">
		<div class="Back-inside-inter">
			<div class="Back-inside-inter-izq" id="desktopMenu">
				<div class="Logo-up">
					<img src="images/Fondo-03.png">
				</div>
				<div class="Menu-bottom">
					<div class="Menu-bottom-sec">
						<ul>
							<li class="selected"><a href="instrucciones"><i class="icon-profile"></i> <span>Instrucciones</span></a></li>
							<li><a href="mapa"><i class="icon-location2"></i> <span>Mapa</span></a></li>
							<li><a href="logout"><i class="icon-user"></i> <span>Cerrar Sesión</span></a></li>
						</ul>
						<div class="">
						<img src="images/logo.png">
						</div>
					</div>
				</div>
			</div>

			<div class="Back-inside-inter-der">

				<div class="Instrucciones" id="movilSec">
					<div class="Instrucciones-sec" id="instruccionesPrimera">
						<div class="Instrucciones-sec-inter">
						<div class="Instruc-conten">
							<h2 class="Titulogrande">Liga iQ sapiens 2016</h2>
							 <h2 class="Titulopequeno">la batalla del conocimiento</h2>
							 <p>Bienvenido a la Liga iQ Sapiens 2016, La batalla del conocimiento. Aquí pondrás a prueba tu sabiduría y tus súper poderes, y lucharás junto a nuestros superhéroes para salvar a la Nación iQ y convertirte en uno de los integrantes de la Fuerza Vencedora iQ que llegará hasta la final de esta batalla.
							 </br></br>
							 La Nación iQ está constituida por cuatro ciudades. Cada una de ellas tiene su propio superhéroe, que te acompañará en tu paso por la ciudad. </p>

							 <!-- <div class="Instruc-mapa-full">
							 	<img src="images/Ejemplo.png">
							 </div> -->

							 <div class="Instruc-mapas">
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad1.jpg">
							 	</div>
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad2.jpg">
							 	</div>
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad3.jpg">
							 	</div>
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad4.jpg">
							 	</div>
							 </div>
						</div>
						</div>
					</div>
					<img class="navArrow right" id="arrowRight" src="images/arrowRight.png" onclick="forwardInst()">
					<img class="navArrow left" id="arrowLeft" src="images/arrowLeft.png" onclick="returnInst()">
					<div class="Instrucciones-sec" id="instruccionesSegunda">
						<div class="Instrucciones-sec-inter">
							<div class="Instruc-conten">
								<h2 class="Titulogrande">Dinámica de la batalla</h2>

								<div class="Instruc-mapa-full">
									<img src="images/Mapa-01.jpg">
								</div>

								<p>Para convertirte en el Superhéroe iQ necesitarás de tus súper poderes de conocimiento, dedicación, concentración y agilidad para vencer a tus contrincantes y salvar a la Nación iQ. Tendrás como guía un mapa de navegación que te llevará por la Nación y el Reto de las 10 preguntas de batalla en cada una de las ciudades.  </p>

								<p>Para poder avanzar, necesitas leer los contenidos de cada ciudad y superar el Reto de las 10 preguntas que aparecerán al final  de cada contenido. El contenido de cada ciudad estará habilitado únicamente por dos días. Pasado este tiempo, desaparecerá para dar paso al Reto, el cual solo va a estar disponible por un día.  </p>

								<p>Cada vez que respondas correctamente una pregunta del Reto obtendrás diez (10) puntos, para un puntaje máximo de 100 puntos por ciudad. Cada uno de los cuatro Retos está cronometrado con una bomba de tiempo de cinco (5) minutos. El sistema únicamente guardará las respuestas de las preguntas que resolviste antes de que explote la bomba.  </p>

								<p>¡Entre menos tiempo tomes para resolver los Retos de las 10 preguntas, estarás más cerca de pertenecer a la Fuerza Vencedora iQ y de convertirte en el Superhéroe iQ! </p>


								<div class="Contener-boton">
									<a href="mapa">
										<span>Comenzar la batalla</span>
										<img src="images/explosion.png">
									</a>
								</div>


								<div class="Nota">
									<h2>Comando central liga iq</h2>
									 <p>Si quieres saber más acerca de la Liga iQ Sapiens 2016 o tienes problemas con tu sesión, ponte en contacto con Alfonso Parada al correo electrónico <span class="email">alfonso.parada@iq-online.com</span> o en el piso 7 del edificio Allianz en Bogotá.  </p>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="Instrucciones" id="desktopSec">
					<div class="Instrucciones-sec">
						<div class="Instrucciones-sec-inter">
						<div class="Instruc-conten">
							<h2 class="Titulogrande">Liga iQ sapiens 2016</h2>
							 <h2 class="Titulopequeno">la batalla del conocimiento</h2>
							 <p>Bienvenido a la Liga iQ Sapiens 2016, La batalla del conocimiento. Aquí pondrás a prueba tu sabiduría y tus súper poderes, y lucharás junto a nuestros superhéroes para salvar a la Nación iQ y convertirte en uno de los integrantes de la Fuerza Vencedora iQ que llegará hasta la final de esta batalla.
							 </br></br>
							 La Nación iQ está constituida por cuatro ciudades. Cada una de ellas tiene su propio superhéroe, que te acompañará en tu paso por la ciudad. </p>


							 <div class="Instruc-mapas">
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad1.jpg">
							 	</div>
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad2.jpg">
							 	</div>
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad3.jpg">
							 	</div>
							 	<div class="Instruc-mapas-interno">
							 		<img src="images/ciudad4.jpg">
							 	</div>
							 </div>
						</div>
						</div>
					</div>
					<div class="Instrucciones-sec">
						<div class="Instrucciones-sec-inter">
							<div class="Instruc-conten">
								<h2 class="Titulogrande">Dinámica de la batalla</h2>

								<div class="Instruc-mapa-full">
									<img src="images/Mapa-01.jpg">
								</div>

							 	<p>Para convertirte en el Superhéroe iQ necesitarás de tus súper poderes de conocimiento, dedicación, concentración y agilidad para vencer a tus contrincantes y salvar a la Nación iQ. Tendrás como guía un mapa de navegación que te llevará por la Nación y el Reto de las 10 preguntas de batalla en cada una de las ciudades.  </p>

							 	<p>Para poder avanzar, necesitas leer los contenidos de cada ciudad y superar el Reto de las 10 preguntas que aparecerán al final  de cada contenido. El contenido de cada ciudad estará habilitado únicamente por dos días. Pasado este tiempo, desaparecerá para dar paso al Reto, el cual solo va a estar disponible por un día.  </p>

							 	<p>Cada vez que respondas correctamente una pregunta del Reto obtendrás diez (10) puntos, para un puntaje máximo de 100 puntos por ciudad. Cada uno de los cuatro Retos está cronometrado con una bomba de tiempo de cinco (5) minutos. El sistema únicamente guardará las respuestas de las preguntas que resolviste antes de que explote la bomba.  </p>

							 	<p>¡Entre menos tiempo tomes para resolver los Retos de las 10 preguntas, estarás más cerca de pertenecer a la Fuerza Vencedora iQ y de convertirte en el Superhéroe iQ! </p>

								<div class="Contener-boton">
									<a href="mapa">
										<span>Comenzar la Batalla</span>
										<img src="images/explosion.png">
									</a>
								</div>

								<div class="Nota">
									<h2>Comando central liga iq</h2>
									 <p>Si quieres saber más acerca de la Liga iQ Sapiens 2016 o tienes problemas con tu sesión, ponte en contacto con Alfonso Parada al correo electrónico <span class="email">alfonso.parada@iq-online.com</span> o en el piso 7 del edificio Allianz en Bogotá.  </p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>
