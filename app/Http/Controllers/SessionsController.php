<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
         if(auth()->attempt(request(['email' ,'password'])) == false){
            return back()->withErrors([
                'message' => 'Usuario o Contraseña erronea'
            ]);
         } else {
            return redirect()->to('/');
         }
    }
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
