<?php


//Autenticacion con cedula
Route::post('api/cedula', array('uses' => 'HomeController@authCedula'));


//bienvenida, solo la primera vez que ingresa el usuario
//Confirma que el usuario ya vio el tour, para que no se vuelva a mostrar
Route::post('api/bienvenido', array('uses' => 'HomeController@confirmarBienvenida'));


//El usuario ingresa al test
//Validamos que no lo halla presentado
//Validamos si ya lo ha empezado pero no lo ha terminado
Route::get('api/entrar_test', array('uses' => 'HomeController@entrarTest'));


//guardar una pregunta del test
Route::get('api/guardarPregunta', array('uses' => 'HomeController@guardarPregunta'));


//guardar el resultado final del test
Route::get('api/resultado_test', array('uses' => 'HomeController@resultadoTest'));


//Mostrar region actual
//Solo una region esta activa a la vez
Route::get('api/region_actual', array('uses' => 'HomeController@regionActual'));


//Mostrar ranking
Route::get('api/ranking', array('uses' => 'HomeController@mostrarRanking'));


//cuando no hay una ruta se envia a pantalla de no existe
Route::get('{url}',function()
    {    return 'ejemplo';    });

Route::get('{url}/{alg}',function()
    {    return 'ejemplo';    });
