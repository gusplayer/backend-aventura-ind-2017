<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="home/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="home/style.css" type="text/css" />
    <link rel="stylesheet" href="home/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="home/css/colors.css" type="text/css" />
    <link rel="stylesheet" href="home/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="home/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="home/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="home/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="home/js/jquery.js"></script>
    <script type="text/javascript" src="home/js/plugins.js"></script>
    
    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <!-- Document Title
    ============================================= -->
    <title>Komercia</title>
</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap nopadding">

                <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('img/bb91.jpg') center center no-repeat; background-size: cover;"></div>

                <div class="section nobg full-screen nopadding nomargin">
                    <div class="container vertical-middle divcenter clearfix">

                        <div class="row center">
                            <a href="index.html"><img src="img/komercia5.png" alt="Canvas Logo" width="180px"><br><br></a>
                        </div>

                        <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.8);">
                            <div class="panel-body" style="padding: 40px;">


                            {{ Form::open(array('url' => 'olvido')) }}


                                      <center><h4 style="margin-bottom: 15px;">Olvidaste tu constraseña?</h4></center>


                                      <p>Escribe tu correo con el que estas registrado.<br> Enviaremos un mensaje con la nueva contraseña.</p>

                                       <div class="line line-sm"></div>

                                       <div class="col_full">

                                       @if(Session::has('mensaje_error'))
                                        <div class=" alert alert-danger">
                                        {{ Session::get('mensaje_error') }}
                                        </div>
                                        @endif

                                        @if(Session::has('mensaje_exito'))
                                        <div class=" alert alert-success">
                                        {{ Session::get('mensaje_exito') }}
                                        </div>
                                        @endif
                                        
                                        @if(Session::has('mensaje_exito'))
                                        @else
                                        {{ Form::email('email', Input::old('email'), array('class' => 'sm-form-control','placeholder' =>'Escribe tu correo ','required'=>'required')) }}
                                        @endif

                                    </div>

                                    

                                    @if(Session::has('mensaje_exito'))
                                    @else
                                        <div class="col_full nobottommargin" style="margin-bottom: 15px;">
                                        <input type="submit" class="button button-3d button-black nomargin" style="background-color:#E35B5B; border-color: #FF0000" value="Enviar">

                                    <a href="inicio"
                                     class="button button-3d button-black nomargin" style=" background-color:#9A9A9A; border-color:#535353" value="login">Volver</a>

                                    </div>
                                    @endif

                                    <div class="col_full " style="margin-top: 12px; margin-bottom: 10px;">

                                        <a href="login" class="fleft" style="color:#2F4F4F" >Iniciar Sesión</a>
                                        
                                    </div>

                                    <div class="col_full nobottommargin">
                                        
                                        <br><a href="registro" class="fleft" style="margin-top: -18px; color: #3B5998">Eres nuevo? Registrate!</a>
                                        
                                    </div>
                                {{ Form::close() }}

                                

                                
                            </div>
                        </div>

                        <div class="row center dark"><small>Copyrights &copy; Todos los derechos reservados</small></div>

                    </div>
                </div>

            </div>

        </section><!-- #content end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="home/js/functions.js"></script>

</body>
</html>