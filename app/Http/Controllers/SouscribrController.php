<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class SouscribrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan  =  Plan::all();
        return view('dashboard.annonce.plan', compact('plan'));
    }


    public function successSusbrice() {
        return view('dashboard.annonce.success');
    }

    public function show(Plan $plan , Request $request)
    {
        $intent = auth()->user()->createSetupIntent();
        return view('dashboard.annonce.souscribe', compact('plan', 'intent'));
    }

    public function subscription(Request $request) {
        $plan = Plan::find($request->plan);
        $jour = 0;

        if($plan->price==20){
            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)->trialUntil(Carbon::now()->addDays(30))->create($request->token);
        }
        elseif ($plan->price==100){
            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)->trialUntil(Carbon::now()->addDays(360))->create($request->token);
        }

    Alert::success('Success', 'Votre Souscription à été effectuée avec success, vous pouvez  poster vos annonces');
    return redirect()->route('success.suscribe');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function list()
    {
        //
        $subscriptions = DB::table('subscriptions')->where('user_id',Auth::user()->id)->get();

        return view('dashboard.annonce.list_subscribe',compact('subscriptions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
