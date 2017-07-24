<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >
    <meta name="keywords" lang="es" content="">
    <meta name="robots" content="All">
    <meta name="description" lang="es" content="">
    <title>IQ - Sapiens | Heroes</title>
    <link rel="stylesheet" href="css/stylesheet.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
</head>
<body class="Back-one">
<section>
    <div class="Back-login">
        <div class="Back-login-sec">
            <div class="Back-login-sec-image">
                <img src="images/Fondo-03.png">
            </div>
            <div class="Back-login-super"></div>
            <div class="Back-login-logo"></div>
            <div class="Back-login-screen"></div>
            <div class="Back-login-sec-conten">
            @if (Session::has('mensaje'))
                <img src="images/Error.png" class="error">
            @endif
                <div class="Back-login-sec-conten-inter">
                    <br>
                    <p>Ingresa los siguientes datos y se parte de la batalla</p>
                    <div class="Forms">

                        <label class="Error">
                        @if (Session::has('mensaje'))
                            <p>Número de cédula inválido, inténtalo nuevamente</p>
                        @endif
                        </label>

                        <form action="auth/login" method="POST">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <input type="text" placeholder="Cédula" name="cedula"
                            title="Ingresa solo los números de tu cédula" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            <input type="submit" value="Comenzar la Batalla" name="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
