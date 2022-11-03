<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;



class RegistroController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){

        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'nombre' => 'required|string|min:8',
            'apellido' => 'required',
            'password_confirmation' => 'required|string|min:8'
        ]);
        
        $user = new  User();
        $user->email                    =$request->email;
        $user->password                 = Hash::make($request->password);
        $user->nombre                   =$request->nombre;
        $user->apellido                 =$request->apellido;
        $user->password_confirmation    =$request->password_confirmation;

        $user->save();

        auth()->login($user);
        return redirect()->to('/');
    }
}
