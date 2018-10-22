<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuariosController extends Controller
{
    //
    public function index(){      
      $users = User::all();      
      return view('admin.usuarios.index')->with(compact('users'));   
    }
    
    public function create(){
      return view("admin.usuarios.create");
    }
    
    public function store(Request $request){      
      $users = new User();
      $users->username = $request->input('username');      
      $users->password=bcrypt($request->input('password'));            
      $users->save();      
      return redirect('admin/usuarios/create');
    }             
}
