<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // vamos a verificar primero si el usuario inicia sesion 
        if(auth()->check()){
            // en este if solo entran los administradores al controlador admin 
            if(auth()->user()->rol === 'admin'){
                return $next($request);
            }
        }
        // sino redireccione al inicio 
        return redirect()->to('/');
    }
}
