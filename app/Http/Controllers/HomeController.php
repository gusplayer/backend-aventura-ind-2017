<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Auth;

use App\User;
use DB;

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
                  'tour' => 'true',
                  'name' => $usuario->nombres,
                  'id' => $usuario->id
              ]);
        }

    }

    public function confirmarBienvenida(Request $request)
    {
      $cedula = $request->input('cedula');

      $usuario = User::find($cedula);
      $usuario->estado='1';
      $usuario->save();

      return response()->json([
                  'update' => 'true',
              ]);
    }

    public function entrarTest()
    {
        return view('contacto');
    }

    public function guardarPregunta()
    {
        return view('restringido');
    }

    public function resultadoTest()
    {
        return view('suspendido');
    }

    public function regionActual()
    {
        return view('error');
    }

    public function mostrarRanking()
    {
        return 'presentado';
    }

}
