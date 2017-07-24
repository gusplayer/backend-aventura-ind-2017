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
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" >
        <link rel="stylesheet" href="../mig/css/stylesheet.css" />
        <link rel="stylesheet" href="../mig/css/mapas.css" />
        <link rel="stylesheet" type="text/css" href="../mig/css/remodal.css">
        <link rel="stylesheet" type="text/css" href="../mig/css/remodal-default-theme.css">
    </head>
    <body class="Back-one" style="background-image: url('../mig/images/mapa4/test_fondo.jpg');">
        <section>
            <div class="Back-inside">
                <div class="Back-inside-inter">
                    <div class="Back-inside-inter-der">
                        <div class="Instrucciones2 marco-mapa">
                            <a><img src="../mig/images/mapa4/superheroe.png" class="m4_heroe"></a>
                            <img src="../mig/images/mapa4/luz.png" class="m1_luz">
                            <a><img src="../mig/images/mapa4/superheroe.png" class="m4_heroe-min"></a>
                            <img src="../mig/images/mapa4/luz.png" class="m1_luz-min">
                            <img src="../mig/images/mapa4/mapa4.png" class="mapa">
                            <img src="../mig/images/mapa4/mapa4-min.png" class="mapa-min">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="remodal pregs" data-remodal-id="modal">
            <button data-remodal-action="close" class="remodal-close"></button>
            <form id="test">
                <div class="Preguntas-logo">
                    <img src="../mig/images/Fondo-03.png">
                </div>
                <div class="Preguntas-pregunta">
                    <div class="Preguntas-pregunta-inter">
                        <p id="pregunta"></p>
                    </div>
                    <div class="fondo_puntos1">
                        <img src="../mig/images/puntos.png">
                    </div>
                    <div class="fondo_puntos2">
                        <img src="../mig/images/puntos.png">
                    </div>
                    <div class="../mig/Preguntas-pregunta-centro" id="opciones">
                    </div>
                </div>
                <input type="submit" class="Btn-azul-submit" value="Siguiente">
                <div class="Abajo">
                        <div class="Logoabajo">
                            <img src="../mig/images/logo.png">
                        </div>
                        <div class="cronometro">
                            <img src="../mig/images/Preguntas iQ sapiens-03.png">
                            <a href="#" id="con_tr"></a>
                        </div>
                </div>
            </form>
        </div>

        <div class="remodal" data-remodal-id="modal2">
            <button data-remodal-action="close" class="remodal-close"></button>
            <div class="Preguntas resultado">
                <div class="Preguntas-logo">
                    <img src="../mig/images/Fondo-03.png">
                </div>
                <div class="Preguntas-pregunta">
                    <div class="Preguntas-pregunta-inter">
                    <br>
                        <h3>Resultado</h3>
                        <h3 id="nm_correc"></h3>

                    <table>
                           <tbody>
                               <tr>
                                   <td>1</td>
                                   <td>2</td>
                                   <td>3</td>
                                   <td>4</td>
                                   <td>5</td>
                               </tr>
                               <tr id="retro1">
                               </tr>
                               <tr>
                                   <td>6</td>
                                   <td>7</td>
                                   <td>8</td>
                                   <td>9</td>
                                   <td>10</td>
                               </tr>
                               <tr id="retro2">
                               </tr>
                           </tbody>
                       </table>


                    </div>
                    <div class="fondo_puntos1">
                        <img src="../mig/images/puntos.png">
                    </div>
                    <div class="fondo_puntos2">
                        <img src="../mig/images/puntos.png">
                    </div>
                    <div class="tiempo-total">
                        <img src="../mig/images/Preguntas iQ sapiens-03.png">
                        <a href="javascript://" id="tiempo-total"></a>
                    </div>
                    <div class="Logo-total">
                        <img src="../mig/images/logo.png">
                    </div>
                    <div class="Preguntas-pregunta-centro">
                        <a href="../mapa" class="Btn-azul-submit" id="fin-test">Siguiente</a>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="../mig/js/jquery-1.7.2.min.js"></script>

        <script type="text/javascript">

    $(document).ready(function() {

    window.location.hash = '#';
    ventana = $('[data-remodal-id=modal]').remodal();
    options = {
        closeOnConfirm: false
    };
    realizadas = [];
    correctas = 0;
    heroe = $('.m4_heroe');
    heroemin = $('.m4_heroe-min');
    abrirpreg = heroe.parent();
    abrirpregmin = heroemin.parent();
    ww = document.body.clientWidth;
    actualwidth = ww;
    var ancla = 0;
    var tiempotl;
    punto1 = [{
        left: '30%',
        top: '6%'
    }];
    punto2 = [{
        left: '20%',
        top: '33%'
    }];
    punto3 = [{
        left: '3%',
        top: '63%'
    }];
    punto4 = [{
        left: '32%',
        top: '72%'
    }];
    punto5 = [{
        left: '32%',
        top: '45%'
    }];
    punto6 = [{
        left: '37%',
        top: '37%'
    }, {
        left: '84%',
        top: '37%'
    }];
    punto7 = [{
        left: '76%',
        top: '7%'
    }];
    punto8 = [{
        left: '57%',
        top: '20%'
    }];
    punto9 = [{
        left: '65%',
        top: '70%'
    }];

    punto19 = [{
        left: '77%',
        top: '73%'
    }];
    punto18 = [{
        left: '44%',
        top: '80%'
    }];
    punto17 = [{
        left: '13%',
        top: '64%'
    }];
    punto16 = [{
        left: '43%',
        top: '53%'
    }];
    punto15 = [{
        left: '75%',
        top: '38%'
    }];
    punto14 = [{
        left: '72%',
        top: '7%'
    }];
    punto13 = [{
        left: '49%',
        top: '22%'
    }];
    punto12 = [{
        left: '18%',
        top: '36%'
    }];
    punto11 = [{
        left: '7%',
        top: '20%'
    }];


    luz1 = ['12%', '-6%', '36%'];
    luz2 = ['30%', '12%', '28%'];
    luz3 = ['0%', '20%', '35%'];
    luz4 = ['57%', '-8%', '38%'];
    luz5 = ['65%', '21%', '38%'];
    luz6 = ['37%', '23%', '36%'];
    luz7 = ['28%', '75%', '33%'];
    luz8 = ['-2%', '66%', '36%'];
    luz9 = ['11%', '43%', '36%'];
    luz10 = ['62%', '54%', '40%'];

    luzmin10 = ['69%', '67%', '36%'];
    luzmin9 = ['76%', '33%', '36%'];
    luzmin8 = ['60%', '1%', '36%'];
    luzmin7 = ['49%', '30%', '36%'];
    luzmin6 = ['34%', '63%', '39%'];
    luzmin5 = ['2%', '61%', '39%'];
    luzmin4 = ['19%', '36%', '39%'];
    luzmin3 = ['32%', '2%', '39%'];
    luzmin2 = ['15%', '-4%', '36%'];
    luzmin1 = ['1%', '24%', '36%'];

    prueba = {
        "test": [ @foreach($test as $t)
        {"pregunta":"{!!$t->pregunta!!}","opcion1":"{!!$t->opcion1!!}","opcion2":"{!!$t->opcion2!!}",
        @if(!empty($t->opcion3))
        "opcion3":"{!!$t->opcion3!!}",
        "opcion4":"{!!$t->opcion4!!}"
        @endif
        },
        @endforeach
    ]};

    solucion = [];
    ventana = $('[data-remodal-id=modal]').remodal();
    termino = $('[data-remodal-id=modal2]').remodal(options);
    Conteo(300, '#con_tr'); // Conteo(tiempo en segundos, donde_mostrar)
    jugar();

    $(window).bind('resize orientationchange', function() {
        ww = document.body.clientWidth;
        if (actualwidth != ww) {
            if (ww > 1024) {
                $('.m1_luz-min').removeClass('resplandor');
            }
        }
    });

    $('#test').on('submit', function(e) {
        e.preventDefault();
        data = $(this).serializeArray();
        solucion.push({
            'pregunta': $('#pregunta').html(),
            'respuesta': data[0].value
        });
        abrirpreg.removeAttr('href');
        abrirpregmin.removeAttr('href');
        $('.m1_luz').removeClass('resplandor');
        $('.m1_luz-min').removeClass('resplandor');
        ventana.close();
        jugar();
    });

    function jugar() {
        heroe.removeClass('flotar');
        heroemin.removeClass('flotar');
        if (ancla < 10) {
            if (ancla === 0)
                carga();
            else {
                TweenMax.to(heroe, 5, {
                    bezier: {
                        curviness: 2,
                        type: "thru",
                        values: window['punto' + ancla],
                        autoRotate: ["x", "y", "rotation", 0, true]
                    },
                    ease: Power1.easeInOut,
                    onComplete: carga
                });
                TweenMax.to(heroemin, 5, {
                    bezier: {
                        curviness: 2,
                        type: "thru",
                        values: window['punto' + (ancla + 10)],
                        autoRotate: ["x", "y", "rotation", 0, true]
                    },
                    ease: Power1.easeInOut
                });
            }
        } else if (ancla == 10)
            Stop();
    }

    function carga() {
        heroe.addClass('flotar');
        heroemin.addClass('flotar');
        ventana.open();
        abrirpreg.attr('href', '#modal');
        abrirpregmin.attr('href', '#modal');
        rpreg = random(1, 10, 'pr');
        $('#pregunta').html(prueba.test[rpreg - 1].pregunta);
        nopcion = tamano(prueba.test[rpreg - 1]) - 1;
        rresp = random(1, nopcion, 'rs');
        arr = [];
        for (i = 0; i < nopcion; i++) {
            arr.push('<div class="Preguntas-pregunta-respu">' +
                '<span><input type="radio" name="option" value="' + prueba.test[rpreg - 1]['opcion' + rresp[i]] + '" required=""></span><p>' + prueba.test[rpreg - 1]['opcion' + rresp[i]] + '</p>' +
                '</div>');
        }
        $('#opciones').html(arr.join(''));
        $('.m1_luz').css({
            'top': window['luz' + (ancla + 1)][0],
            'left': window['luz' + (ancla + 1)][1],
            'width': window['luz' + (ancla + 1)][2]
        }).addClass('resplandor');
        if (ww <= 1024) {
            $('.m1_luz-min').css({
                'top': window['luzmin' + (ancla + 1)][0],
                'left': window['luzmin' + (ancla + 1)][1],
                'width': window['luzmin' + (ancla + 1)][2]
            }).addClass('resplandor');
        }

        ancla++;
    }

    function random(min, max, tipo) {
        if (tipo == 'pr') {
            nuevonumero = Math.floor(Math.random() * (max - min + 1) + min);
            while (jQuery.inArray(nuevonumero, realizadas) != -1) {
                nuevonumero = Math.floor(Math.random() * (max - min + 1) + min);
            }
            realizadas.push(nuevonumero);

            return nuevonumero;
        } else {
            respuestas = [];
            nuevonumero = Math.floor(Math.random() * (max - min + 1) + min);
            for (l = 0; l < nopcion; l++) {
                while (jQuery.inArray(nuevonumero, respuestas) != -1) {
                    nuevonumero = Math.floor(Math.random() * (max - min + 1) + min);
                }
                respuestas.push(nuevonumero);
            }
            return respuestas;
        }
    }

    function tamano(obj) {
        var size = 0,
            key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    }

    $('body').on('click', '.Preguntas-pregunta-respu p', function() {
        $(this).prev('span').find('input').click();
    });

    function testprogres() {
        ventana.destroy();
        data = new FormData();
        url = '../puntajes';
        ciudad = '4';
        p_respuestas = [];
        if (device.ios()) {
                if (device.ipad()) {
                  sistema = 'Ipad';
                } else if (device.iphone()) {
                  sistema = 'Iphone';
                } else if (device.ipod()) {
                  sistema = 'Ipod Movil';
                }
              } else if (device.android()) {
                if (device.androidTablet()) {
                  sistema = 'Android Tablet';
                } else {
                  sistema = 'Android Movil';
                }
              } else if (device.windows()) {
                if (device.windowsTablet()) {
                  sistema = 'Windows Tablet';
                } else if (device.windowsPhone()) {
                  sistema = 'Windows Phone';
                } else {
                  sistema = 'Windows PC';
                }
              }
              else {
                sistema  = 'No identificado'
              };
        for (p = 0; p < solucion.length; p++) {
            for (q = 0; q < prueba.test.length; q++) {
                if (solucion[p].pregunta == prueba.test[q].pregunta)
                    if (solucion[p].respuesta == prueba.test[q].opcion1) {
                        correctas++;
                        p_respuestas.push('<td><img src="../mig/images/Check.png"></td>');

                        data.append('pregunta[]', (solucion[p].pregunta).replace(':', ''));
                        data.append('respuesta[]', solucion[p].respuesta);
                    } else {
                        p_respuestas.push('<td><img src="../mig/images/X.png"></td>');
                    }
            }
        }
        data.append('tiempo', tiempotl);

        $.ajax({
                url:url,
                type:'POST',
                data: {'total': correctas,'ciudad': ciudad, 'tiempo':tiempotl, 'sistema':sistema},
                dataType: 'json',
            });

        for (i = 0; i < p_respuestas.length; i++) {
           if (i < 5) {
               $('#retro1').append(p_respuestas[i]);
           } else {
               $('#retro2').append(p_respuestas[i]);
           }
       }
        $('#nm_correc').html(correctas + '/10');
        abrirpreg.attr('href', '#modal2');
        abrirpregmin.attr('href', '#modal2');
        termino.open();
    }

    $('body').on('click', '#opciones label', function() {
        $(this).prev('input').click();
    });

    btnfin = false;

    $('#fin-test').on('click mousedown', function() {
        btnfin = true;
    });

    window.addEventListener("beforeunload", function(e) {
        if (!btnfin) {
            var confirmationMessage = "\Deseas salir del Juego?";
            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Webkit, Safari, Chrome
        }
    });

    var intervalo;

    function Conteo(duracion, sector) {
        if (!isNaN(duracion)) {
            var timer = duracion,
                minutes, segundos;

            intervalo = setInterval(function() {
                minutos = parseInt(timer / 60, 10);
                segundos = parseInt(timer % 60, 10);

                minutos = minutos < 10 ? "0" + minutos : minutos;
                segundos = segundos < 10 ? "0" + segundos : segundos;

                $(sector).html("<a>" + minutos + ":" + segundos + "</a>");
                if (--timer === 0) {
                    timer = duracion;
                    // clearInterval(intervalo);
                    Stop();
                }
            }, 1000);
            t_inicio = new Date();
        }
    }


    function Stop() {
        var t_fin = new Date();
        var t_diferencia = t_fin.getTime() - t_inicio.getTime();
        t_fin.setTime(t_diferencia);
        var minutes_passed = t_fin.getMinutes();
        if (minutes_passed < 10) {
            minutes_passed = "0" + minutes_passed;
        }
        var seconds_passed = t_fin.getSeconds();
        if (seconds_passed < 10) {
            seconds_passed = "0" + seconds_passed;
        }
        var milliseconds_passed = t_fin.getMilliseconds();
        if (milliseconds_passed < 10) {
            milliseconds_passed = "00" + milliseconds_passed;
        } else if (milliseconds_passed < 100) {
            milliseconds_passed = "0" + milliseconds_passed;
        }
        $('#tiempo-total').html(minutes_passed + ":" + seconds_passed);
        tiempotl = minutes_passed + ":" + seconds_passed + "." + milliseconds_passed;
        clearInterval(intervalo);
        testprogres();
    }

});

        </script>

        <script type="text/javascript" src="../mig/js/TweenMax.min.js"></script>
        <script type="text/javascript" src="../mig/js/remodal.min.js"></script>
        <script type="text/javascript" src="../mig/js/device.js"></script>

    </body>
</html>