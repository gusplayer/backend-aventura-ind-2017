<?php

namespace App\Http\Controllers;
use DB;
use Input;
use Auth;
use Illuminate\Routing\Controller;
use App\User;
class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        $cedula = Input::get('cedula');

        $profile =  DB::table('users')->where('cedula',$cedula)->first();

        if (empty($profile))
        {
        return redirect()->back()->with('mensaje', 'Número de cédula inválido, inténtalo nuevamente');
        }
        else
        {
        $user = $profile->id;
        Auth::loginUsingId($user);

            //si es primera vez que entra este usuario
            if(0 == $profile->estado)
            {
                $user1= User::find($user);
                $user1->estado=1;
                $user1->save();

                return redirect()->intended('instrucciones');
            }
            //si no es la primera vez
            else
            {
                return redirect()->intended('mapa');
            }

        }
    }
}