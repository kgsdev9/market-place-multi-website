<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    //

     public function smsform_to_seller($id){

        $role = Role::where('name','vendeur')->first();
        $destinateur=User::where('owner_id',$id)
        ->where('role_id',$role->id)
        ->first();
        return view('message.form', compact('destinateur') );

    }




     public function smsform_to_carrier($id){

        $role = Role::where('name','transporteur')->first();
        $destinateur=User::where('owner_id',$id)
        ->where('role_id',$role->id)
        ->first();
        return view('message.form', compact('destinateur') );

     }


     public function  store(Request $request)  {


      $input =  $request->input() ;

        Validator::make($request->all(),[
            'subjet'=>['required'],
            'destinateur' =>['required'],
            'content' =>['required'],
        ])->validate();

        $sms =  Message::create([
            'user_id' =>Auth::user()->id,
            'sujet'=>$input['subjet'],
            'destinataire_id' => $input['destinateur']  ,
            'contenu'=>  $input['content']
        ]);



        Alert::toast('Message envoyé à avec succès','success');


        return redirect()->route('liste.sms');

     }


     public function  liste_message(){

        $message=Message::where('user_id',Auth::user()->id)->orderByDESC('created_at')->paginate(10);

        return view('message.acheteur.send',compact('message'));
     }


     public function show($id)
     {
         //
         $messages = Message:: orderByDesc('created_at')->where('destinataire_id',$id)->get();


         return  view('account.message.recu',[
             'messages'=>$messages
         ]);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function detail($id)
     {
         //
         $message = Message::find($id);
         return view('message.detail',[
             'message'=>$message,
         ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request)
     {
         //

      $input =  $request->input() ;

      Validator::make($request->all(),[
          'subjet'=>['required'],
          'content' =>['required'],
      ])->validate();

      $sms =  Message::where('id',$input['sms_id'])->update([
          'sujet'=>$input['subjet'],
          'contenu'=>  $input['content']
      ]);



      Alert::toast('Message modifer avec succès','success');


      return redirect()->route('liste.sms');
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
         Message::find($id)->delete();
         Alert::toast('message supprimer','success');
         return redirect()->route('liste.sms');
     }


     public function responseform($id){

         $destinataire = User::where('id',$id)->get()->first();

         return view('account.message.reponse',[
             'destinataire'=>$destinataire
         ]);
     }

     public function response(Request $request)
     {
         //

         $inputs = $request->input();


         Message::create([
             'user_id'=>Auth::user()->id,
             'destinataire_id'=>$inputs['destinataire_id'],
             'sujet'=>$inputs['objet'],
             'contenu'=>$inputs['contenu']
         ]);


      dd("ok");
     }


     public function smsrecevied(){

        $messages=Message::where('destinataire_id',Auth::user()->id)->orderByDESC('created_at')->paginate(10);

        return view('message.recevied',compact('messages'));

     }

     public function smssee($id){

        $message=Message::where('id',$id)->first();
        $expediteur = User::where('id',$message->user_id)->first();
        return view('message.see',compact('message','expediteur'));

     }

}
