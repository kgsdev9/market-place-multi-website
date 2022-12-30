<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SendboxRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AnnonceMessageController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

        $user = Auth::user()->id;
        $user_annonce  = SendMessage::where('annonceur_id',$user)->get();
        // dd($user_annonce->message);
        return view('dashboard.annonce.send-box-recevied', compact('user_annonce'));
    }


    public function detail($id) {

        $detail_annnonce = SendMessage::find($id);

        return view('dashboard.annonce.detail-inbox', compact('detail_annnonce'));
    }


    public function response($id){

        $detail_poster  = SendMessage::find($id);

        return view('dashboard.annonce.response', compact('detail_poster'));
    }


     public function store(Request  $request ) {

        Validator::make($request->input(),[
            'g-recaptcha-response' => 'required|captcha',
            'number'   => 'required' ,
            'message'  => 'required',
            'required' => 'Veuillez vérifier que vous n\'êtes pas un robot',
            'captcha' => 'Erreur CAPTCHA! réessayez plus tard ou contactez l\'administrateur du site.',
        ])->validate();

        $annonce_id = $request['annonce_id'];
        $poster_id = $request['poster_id']; //celui qui a posté

        $user_id = Auth::user()->id ;
        $user_email = Auth::user()->email  ;

        $message = new SendMessage();
        $message->message = $request['message'];
        $message->email = $user_email ;
        $message->number = $request['number'];
        $message->poste_id = $annonce_id ;
        $message->repondeur_id = $user_id ;
        $message->annonceur_id= $poster_id ;
        $message->save();
        Alert::toast('Message envoyé avec success','success');
        return redirect()->back();

     }
 }
