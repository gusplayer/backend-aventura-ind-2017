<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Auth;

use App\User;
use App\Modulo;
use App\Pregunta;
use App\Test;
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

        //cuantas preguntas le faltan
        $faltan = 16 - $pregunta;

        //Verificar Modulo/ No. test
        $modulo = Modulo::where('estado',1)->first();

        $preguntas_test = Test::where('test',$modulo->id)
        ->orderBy(DB::raw('RAND()'))
        ->take($faltan)
        ->get(array('pregunta','opcion1','opcion2','opcion3','opcion4'))
        ->toArray();


        $obj = (object) array('1' => 'foo');

        return $obj;

        foreach ($preguntas_test as $key => $value) {
          dd($value);
        }

        return $datos;

        $contador= 0;
        $array_preguntas = null;
        // while($contador <= $faltan)
        // {
        //   $array_preguntas[$contador]=array(['nombre'=>$contador]);
        //
        //   $contador++;
        // }

        // foreach($preguntas_test as $object)
        // {
        //     $array_preguntas[
        //     'autorizado' => true,
        //     'pregunta' => $usuario->pregunta,
        //     'continuar' => true,
        //     'descripcion' => "continua respondiendo el test desde la pregunta ".$usuario->pregunta,
        //     'pregunta' => $preguntas_test->pregunta,
        //     'opciones' => $preguntas_test->pregunta
        //      ]
        //   );
        // }

        // $data = array_map(function($object){
        //     return (array) $object;
        // }, $preguntas_test);

        //Si el usuario esta en el test correcto
        if(($modulo->id) == $test)
        {
          return response()->json([
              $array_preguntas
          ]);
        }
        //si el usuario no tiene permitido
        else
        {
          return response()->json([
              'autorizado' => false,
              'pregunta' => null,
              'continuar' => false,
              'descripcion' => "el usuario ya presento el test o no esta autorizado",
              'preguntas' => null,

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
          if(($usuario->pregunta)<=15){

            //Guardamos el puntaje
            $pregunta2= new Pregunta;
            $pregunta2->cedula=$cedula;
            $pregunta2->test=$test;
            $pregunta2->pregunta=$pregunta;
            $pregunta2->puntaje=$puntaje;
            $pregunta2->fecha=$fecha;
            $pregunta2->save();

            //Se actualiza el numero de preguntas respondidas del usuario
            $nopregunta=1+$usuario->pregunta;
            $usuario->pregunta= $nopregunta;
            $usuario->save();

            return response()->json([
                'guardado' => true,
                'pregunta_guardada' => $nopregunta-1,
                'descripcion' => "continua a la pregunta No. ".$nopregunta,
                'continuar' => true
            ]);
          }
          // el usuario ya respondio las 15 preguntas
          else {
            return response()->json([
                'guardado' => false,
                'pregunta_siguiente' => null,
                'descripcion' => "El usuario ya presento todas las preguntas, ir a resultado",
                'continuar' => false
            ]);
          }

        }
        else
        {
          //test no correcto, no se guardara.
          return response()->json([
              'guardado' => false,
              'pregunta_siguiente' => null,
              'descripcion' => "el usuario ya presento el test o no esta autorizado, debe salir del test",
              'continuar' => false
          ]);
        }
    }

    public function resultadoTest(Request $request)
    {
       $cedula = $request->input('cedula');
       $test = $request->input('test');

       $puntaje = DB::table('preguntas')
       ->where('cedula', $cedula)
       ->where('test', $test)
       ->where('puntaje', 1)
       ->count();

       return response()->json([
           'puntaje' => $puntaje,
           ]);
    }



    public function mostrarRanking()
    {
        return 'presentado';
    }

}
