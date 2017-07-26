<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Auth;

use App\User;
use App\Modulo;
use App\Pregunta;
use DB;

use Carbon\Carbon;

class HomeController extends Controller
{

    public function authCedula(Request $request)
    {
        $cedula = $request->input('cedula');

        $usuario = User::find($cedula);
        if(empty($usuario))
        {
                return response()->json([
                    'exists' => 'false',
                    'tour' => 'false',
                    'name' => 'null',
                    'id' => 'null'
                ]);
        }
        else {
              return response()->json([
                  'exists' => 'true',
                  'tour' => $usuario->estado,
                  'name' => $usuario->nombres,
                  'id' => $usuario->id
              ]);
        }

    }

    public function confirmarBienvenida(Request $request)
    {
      $cedula = $request->input('cedula');

      $usuario = User::find($cedula);
      $usuario->estado='0';
      $usuario->save();

      return response()->json([
                  'update' => 'true',
              ]);
    }

    public function regionActual()
    {
        $modulo = Modulo::where('estado',1)->first();

        return response()->json([
            'region' => 1,
            'descripcion' => $modulo->descripcion
        ]);
    }

    public function entrarTest(Request $request)
    {
        $cedula = $request->input('cedula');

        $usuario = User::find($cedula);

        //test al que tiene acceso el usuario
        $test=$usuario->ronda;
        $pregunta=$usuario->pregunta;

        //Verificar Modulo/ No. test
        $modulo = Modulo::where('estado',1)->first();

        //Si el usuario esta en el test correcto
        if(($modulo->id) == $test)
        {
          return response()->json([
              'autorizado' => 'true',
              'pregunta' => $usuario->pregunta,
              'descripcion' => "continua respondiendo el test desde la pregunta ".$usuario->pregunta
          ]);
        }
        //si el usuario no tiene permitido
        else
        {
          return response()->json([
              'autorizado' => 'false',
              'pregunta' => 'null',
              'descripcion' => "el usuario ya presento el test o no esta autorizado"
          ]);
        }
    }

    public function guardarPregunta(Request $request)
    {
        $cedula = $request->input('cedula');
        $test = $request->input('test');
        $pregunta = $request->input('pregunta');
        $puntaje = $request->input('puntaje');
        $fecha = Carbon::now();

        $modulo = Modulo::where('estado',1)->first();
        $usuario = User::find($cedula);
        //Si el usuario esta en el test correcto
        if(($modulo->id) == $test)
        {
          //Test correcto, vigente, guardamos la respuesta
          if(($usuario->pregunta)<=10){

            $pregunta2= new Pregunta;
            $pregunta2->cedula=$cedula;
            $pregunta2->test=$test;
            $pregunta2->pregunta=$pregunta;
            $pregunta2->puntaje=$puntaje;
            $pregunta2->fecha=$fecha;
            $pregunta2->save();

            $nopregunta=1+$usuario->pregunta;
            $usuario->pregunta= $nopregunta;
            $usuario->save();

            return response()->json([
                'guardado' => 'true',
                'pregunta_guardada' => $nopregunta-1,
                'descripcion' => "continua a la pregunta No. ".$nopregunta
            ]);
          }
          else {
            return response()->json([
                'guardado' => 'false',
                'pregunta_siguiente' => 'null',
                'descripcion' => "El usuario ya presento todas las preguntas, ir a resultado"
            ]);
          }

        }
        else
        {
          //test no correcto, no se guardara.
          return response()->json([
              'guardado' => 'false',
              'descripcion' => "el usuario ya presento el test o no esta autorizado"
          ]);
        }
    }

    public function resultadoTest()
    {
        return view('suspendido');
    }



    public function mostrarRanking()
    {
        return 'presentado';
    }

}
