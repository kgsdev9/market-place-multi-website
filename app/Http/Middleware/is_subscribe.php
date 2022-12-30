<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class is_subscribe
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


        $subscription = DB::table('subscriptions')->where('user_id',Auth::user()->id)->get();



        if((count($subscription)!=0)){
            $nb_subscription = count($subscription);
            $delay=$subscription[$nb_subscription-1]->trial_ends_at;
            $now = Carbon::now();
            $diff = $now->diffInDays($delay);

          if($diff==0){
            Alert::warning('Accès refusé','Veuillez renouveler votre abonnement');
            return redirect()->route('plan.index');
          }else{
            return $next($request);
          }
        }else{
            // Alert::toast('Vous devez souscrire a un forfait pour poster une annonce','warning');
            Alert::warning('Accès réfusé','Vous devez souscrire a un forfait pour poster une annonce');
            return redirect()->route('plan.index');
        };


    }
}
