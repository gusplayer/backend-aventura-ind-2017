<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
		<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" > -->
		<meta name="keywords" lang="es" content="">
		<meta name="robots" content="All">
		<meta name="description" lang="es" content="">
		<title>IQ - Sapiens | Heroes</title>
		<link rel="stylesheet" href="../mig/css/stylesheet.css" />
		<link rel="stylesheet" href="../mig/css/mapas.css" />
		<link rel="stylesheet" type="text/css" href="../mig/css/remodal.css">
		<link rel="stylesheet" type="text/css" href="../mig/css/remodal-default-theme.css">
	</head>
	<body style="margin:0px;">
		<div class="content2 Oculto1">
			<a href="../test/3" class="intro" style="position: relative"><img src="../mig/images/mapa3/test_fondo3.jpg"></a>			
		</div>

		<div class="content3 Oculto1"  style="display:none;">
			<a href="../test/3" class="intro" style="position: absolute;z-index: 400;top: 0px;"><img src="../mig/images/mapa3/test_fondo31.jpg"></a>
		</div>
		<div class="content4 Oculto1"  style="display:none;">
			<a href="../test/3" class="intro" style="position: absolute;z-index: 500;top: 0px;"><img src="../mig/images/mapa3/test_fondo32.jpg"></a>
		</div>

		<div class="content5 Mostrar1">
			<a href="../test/3" style="position: relative"><img src="../mig/images/mapa3/test_fondo3m.jpg"></a>	
		</div>


		<script type="text/javascript" src="../mig/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {   
		    setTimeout(function() {
		        $(".content3").fadeIn(1500);
		    },3000);
		});
		</script>

		<script type="text/javascript">
		$(document).ready(function() {   
		    setTimeout(function() {
		        $(".content4").fadeIn(1500);
		    },4500);
		});
		</script>
		
		<!-- <script>
			$(document).ready(function() {
				setTimeout(function() {
					window.location.href = 'instrucciones_mapa1';
				}, 1500);
			});
		</script> -->

	</body>
</html>