<?php


//Autenticacion con cedula
Route::post('api/cedula', array('uses' => 'HomeController@authCedula'));

//bienvenida, solo la primera vez que ingresa el usuario
//Confirma que el usuario ya vio el tour, para que no se vuelva a mostrar
Route::post('api/bienvenido', array('uses' => 'HomeController@confirmarBienvenida'));

//Mostrar region actual
//Solo una region esta activa a la vez
Route::get('api/region_actual', array('uses' => 'HomeController@regionActual'));

//El usuario ingresa al test
//Validamos que no lo halla presentado
//Validamos si ya lo ha empezado pero no lo ha terminado
Route::post('api/entrar_test', array('uses' => 'HomeController@entrarTest'));



//guardar una pregunta del test
Route::post('api/guardar_pregunta', array('uses' => 'HomeController@guardarPregunta'));


//guardar el resultado final del test
Route::post('api/resultado_test', array('uses' => 'HomeController@resultadoTest'));




//Mostrar ranking
Route::get('api/ranking', array('uses' => 'HomeController@mostrarRanking'));




//cuando no hay una ruta se envia a pantalla de no existe
Route::get('{url}',function()
    {    return redirect()->to('https://aventuraindependence.com/');   });

Route::get('{url}/{alg}',function()
    {    return redirect()->to('https://aventuraindependence.com/');   });
