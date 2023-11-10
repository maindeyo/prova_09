<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create () {
        return view ('auth.register');

    }

    public function store (Request $request) {
        $name = $request->post('name');
        $email = $request->post('email');
        $password = Hash::make($request->password);

        $usuario = new User;
        $usuario->name=$name;
        $usuario->email=$email;
        $usuario->password=$password;
        $usuario->save();
        Auth::login($usuario);
        return redirect(url('/dashboard')); 
    
}

}
