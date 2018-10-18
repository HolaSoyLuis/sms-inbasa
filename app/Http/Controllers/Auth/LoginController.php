<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function __construct(){
        /* El form principal se mostrará solo a invitados
        Si ya está autenticado simplemente lo redirecciona al inicio*/
        $this->middleware('guest', ['only' => 'formPrincipal']);
    }

    public function formPrincipal(){
        return view('principal');
    }

    public function login(){
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('inicio');
        }

        return back()->withErrors(['username' => trans('auth.failed')])
            ->withInput(request(['username']));
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
