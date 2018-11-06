<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Caffeinated\Shinobi\Models\Roles;
use Caffeinated\Shinobi\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();    
        return view('admin/usuarios/index')->with(compact('users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/usuarios/create');
    }

    public function createPDF()
    {
        $users = User::all(); 
        $pdf = \PDF::loadView('admin/usuarios/pdf', ['users' => $users]);
        return $pdf->download('Reporte Usuarios.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([            
            'username'=>'required|string|min:4|max:120|unique:users',
            'password'=>'required|min:6|confirmed'            
        ]);
        $users = new User();
        $users->username = $request->input('username');      
        $users->password=bcrypt($request->input('password'));            
        $users->save();      
        return redirect('admin/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin/usuarios/edit')->with(compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([            
            'username'=>'required|string|min:4|max:120|unique:users',
            'password'=>'required|min:6|confirmed'                        
        ]);
        $users = User::find($id);
        $users->username = $request->input('username');      
        $users->password=bcrypt($request->input('password'));            
        $users->update(); 
        return redirect('admin/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('admin/usuarios');
    }
}
