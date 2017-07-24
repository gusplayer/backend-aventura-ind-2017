<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Test;
use App\Modulo;
use App\Puntos;
use App\User;
use DB;
use Input;
use Auth;
use Carbon\Carbon;


class AventuraController extends Controller
{

    public function mostrarMapa()
    {
        return view('mapa');
    }

    public function mostrarInstruccion()
    {
        return view('instrucciones');
    }

    public function mostrarContenido($id)
    {
        // $modulo = Modulo::find($id);
        // if(empty($modulo))
        //               {
        //                 return redirect()->intended('error');
        //               }
        // if($modulo->estado==1 and $modulo->tipo==0)
        // {
        //     $vista = "ciudad".$id;
        //     return view($vista);
        // }
        // else
        // {
        //     return redirect()->intended('error');
        // }
        $vista = "ciudad".$id;
        return view($vista);
    }

    public function mostrarIntroTest($id)
    {
        $modulo = Modulo::find($id);
        if(empty($modulo))
                      {
                        return redirect()->intended('error');
                      }

            if($modulo->estado==1 and $modulo->tipo==1)
            {
            $vista = "intro_test".$id;
            return view($vista);
            }
            else
            {
                return redirect()->intended('error');
            }
    }

    public function mostrarTest(Request $request, $id)
    {
        $modulo = Modulo::find($id);
        if(empty($modulo))
                      {
                        return redirect()->intended('error');
                      }
        if((Auth::user()->ronda)==$id)
        {


            //Modulo esta activo (1) y en tipo = 1 ( 0=contenido , 1=test)
            if($modulo->estado==1 and $modulo->tipo==1)
            {


                $now = Carbon::now();
                $request->session()->put('inicio_test',$now);

                $test = Test::where('test',$id)
                ->orderBy(DB::raw('RAND()'))
                ->take(10)
                ->get(array('test','pregunta','opcion1','opcion2','opcion3','opcion4'));

                $vista = "test".$id;
                return response()->view($vista,['test' => $test]);
            }
            else
            {
                return redirect()->intended('error');
            }
        }
        //usuario ya presento el test previamente, no tiene acceso
        else
        {
                return redirect()->intended('presentado');
        }

    }

    public function guardarPuntos(Request $request)
    {
        $data = Input::all();
        $total = $data['total'];
        $test = $data['ciudad'];
        $tiempo = $data['tiempo'];
        $sistema = $data['sistema'];

        $inicio = $request->session()->get('inicio_test');

        if((Auth::user()->ronda)==$test)
        {
        $user = User::find(Auth::user()->id);
        $test = $user->ronda;
        $user->ronda = $test+1;
        $user->save();

        $puntos= new Puntos;
        $puntos->user=Auth::user()->id;
        $puntos->test=$test;
        $puntos->total=$total;
        $puntos->tiempo=$tiempo;
        $puntos->sistema=$sistema;
        $puntos->inicio_test=$inicio;
        $puntos->save();

        return "puntaje guardado";
        }//end if
        else
        {
            return "No tiene acceso a esta ciudad";
        }
    }//en function

    public function mostrarRanking()
    {

         $puntos = DB::table('puntos')
        ->join('users', 'puntos.user', '=', 'users.id')
        ->orderBy('updated_at', 'DESC')
        ->get(['cedula','nombres','test','total','sistema','tiempo','puntos.inicio_test','puntos.updated_at']);

        $cont1 = Puntos::where('test', 1)->count();
        $cont2 = Puntos::where('test', 2)->count();
        $cont3 = Puntos::where('test', 3)->count();
        $cont4 = Puntos::where('test', 4)->count();

        return view('ranking',[
            'puntos' => $puntos,
            'cont1' => $cont1,
            'cont2' => $cont2,
            'cont3' => $cont3,
            'cont4' => $cont4
            ]);
    }

    public function pruebaCiudad($id)
    {
            $vista = "ciudad".$id;
            return view($vista);
    }

    public function pruebaIntro($id)
    {
            $vista = "intro_test".$id;
            return view($vista);
    }

    public function pruebaTest(Request $request, $id)
    {
            $now = Carbon::now();
            $request->session()->put('inicio_test',$now);

            $test = Test::where('test',$id)
                ->orderBy(DB::raw('RAND()'))
                ->take(10)
                ->get(array('test','pregunta','opcion1','opcion2','opcion3','opcion4'));

                $vista = "test".$id;
                return response()->view($vista,['test' => $test]);
    }

}
