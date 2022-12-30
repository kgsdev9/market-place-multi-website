<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionActor
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

        if(isset(Auth::user()->role->name )) {
            if(Auth::user()->role->name !="acheteur") {
                Alert::toast("Accès Reservés aux Acheteurs, veuillez vous conformer  à la charte du Groupe VTP, Cordialement!",'warning');
                 return redirect()->route('home');
               }
           }



        return $next($request);
    }
}
