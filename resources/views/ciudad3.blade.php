<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" > -->
    <meta name="keywords" lang="es" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
    <meta name="robots" content="All">
    <meta name="description" lang="es" content="">
    <title>IQ - Sapiens | Heroes</title>
     <base href="../" >
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >
    <link rel="stylesheet" href="css/stylesheet.css" />
    <!-- <script src="js/jquery-1.11.1.min.js"></script> -->
    <script type="text/javascript" src="js/extras/jquery.min.1.7.js"></script>
    <script type="text/javascript" src="js/extras/modernizr.2.5.3.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.rwdImageMaps.min.js"></script>

    <link rel="stylesheet" href="modalcont/css/jquery.popdown.css">


    <script type="text/javascript">

    function showInfoBanner() {
        setTimeout(function() {
            document.getElementById('book').className += ' show';
            document.getElementById('slider').className += 'show';
        }, 4000);
    };

    showInfoBanner();


    function loadApp() {


        $(window).resize(function() {
            setSize();
        });

        function setSize() {
            $('.flipbook').turn('size', ($(window).height() * .9 * 1.349), ($(window).height() * .9) );
            $('.flipbook').css('left', -($(window).height() * .9 * 1.349 * .5));
            $('.flipbook').css('top', -($(window).height() * .9 * .5));
        }

        // Create the flipbook
            $('.flipbook').turn({
                width:1229,
                height:911,
                elevation: 50,
                gradients: true,
                autoCenter: true,
            });
            setSize();

    }

    // Load the HTML4 version if there's not CSS transform

    yepnope({
        test : Modernizr.csstransforms,
        yep: ['js/lib/turn.js'],
        nope: ['js/lib/turn.html4.min.js'],
        both: ['css/basic.css'],
        complete: loadApp
    });


    </script>
    <script src="scripts/func.js"></script>



</head>
<body class="Back-riesgo" overflow-y: hidden;
     overflow-x: scroll;>

<div class="flipbook-viewport" id="book">
    <div class="container">
        <div class="flipbook">
            <div class="page" style="background-image:url(images/ciudad3/img1.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img2.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img3.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img4.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img5.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img6.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img7.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img8.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img9.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img10.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img11.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img12.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img13.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img14.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img15.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img16.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img17.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img18.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img19.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img20.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img21.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img22.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img23.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img24.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img25.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img26.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img27.jpg)"></div>
            <div class="double" style="background-image:url(images/ciudad3/img28.jpg)"></div>
            <div class="page" style="background-image:url(images/ciudad3/img29.jpg)"></div> 
        </div>
    </div>
</div>

<div class="centering" id="mobileSlider">
    <div id="slider">
      <a href="ciudad/3#" class="control_next">>></a>
      <a href="ciudad/3#" class="control_prev"><</a>
      <ul>
        <li style="background-image:url(images/ciudad3/img1.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img2.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img3.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img4.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img5.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img6.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img7.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img8.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img9.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img10.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img11.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img12.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img13.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img14.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img15.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img16.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img17.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img18.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img19.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img20.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img21.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img22.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img23.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img24.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img25.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img26.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img27.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img28.jpg)"></li>
        <li style="background-image:url(images/ciudad3/img29.jpg)"></li>

      </ul>
    </div>
</div>

<a href="../mapa">
    <div class="return">
        Salir
    </div>
</a>

<a href="modalcont/pages/ciudad3.html" class="popdown btn" title="Content Demo" style="float:right">
    <div class="lectura">
        Lectura
    </div>
</a>

<script type="text/javascript" src="modalcont/lib/jquery.popdown.js?v=1" /></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.popdown').popdown();
        });
    </script>

</body>
</html>
