<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" > -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
    <meta name="keywords" lang="es" content="">
    <meta name="robots" content="All">
    <meta name="description" lang="es" content="">
    <title>IQ - Sapiens | Heroes</title>
    <link rel="stylesheet" href="css/stylesheet.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 -->    <script type="text/javascript" src="scripts/jquery.rwdImageMaps.min.js"></script>
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
    <img src="images/logo.png">
</div>
<div id="mobile-lateral">
    <img src="images/logo.png" style="width: 100%;">
    <ul>
        <li><a href="instrucciones"><i class="icon-profile"></i> <span>Instrucciones</span></a></li>
        <li class="selected"><a href="mapa"><i class="icon-location2"></i> <span>Mapa</span></a></li>
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
                            <li><a href="instrucciones"><i class="icon-profile"></i> <span>Instrucciones</span></a></li>
                            <li class="selected"><a href="mapa"><i class="icon-location2"></i> <span>Mapa</span></a></li>
                            <li><a href="logout"><i class="icon-user"></i> <span>Cerrar Sesión</span></a></li>
                        </ul>
                        <div class="">
                        <img src="images/logo.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="Back-inside-inter-der">
                     <?php
                        $nom = explode(" ", Auth::user()->nombres);
                        $label = $nom[0]." ".$nom[1]." ".$nom[2]
                     ?>
                <h1>{{ $label }}</h1>
                <div class="Instrucciones2">
                    <img src="images/mapa4.png" class="mapa" usemap="#mapaHome">
                    <map name="mapaHome" style="border-color: #777777">
                        <area shape="circle" coords="578, 845, 210" href="ciudad/1" title="Enter" alt="Enter" style="border-color: #777777;border-style: solid">
                        <area shape="circle" coords="1088, 395, 150" href="ciudad/2" title="Enter" alt="Enter" style="border-color: #777777;border-style: solid">
                        <area shape="circle" coords="588, 225, 150" href="ciudad/3" title="Enter" alt="Enter" style="border-color: #777777;border-style: solid">
                        <area shape="circle" coords="1488, 125, 150" href="ciudad/4" title="Enter" alt="Enter" style="border-color: #777777;border-style: solid">
                    </map>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
