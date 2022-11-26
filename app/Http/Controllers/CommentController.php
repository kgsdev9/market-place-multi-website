<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{

    public function add(Request $request){
        $input= $request->input();


        Validator::make($input,[
       'content'=>['required'],
        ])->validate();

        $r =Comment::create([
         'content'=>$input["content"],
         'user_id'=>Auth::user()->id,
         'product_id'=>$input["product"],

     ]);

     Alert::toast('Commentaire Ajouter avec succès','success');
        return redirect()->route('products.detail',$input["product"]);
     }


     public function show($id){
         $comments=Comment::orderByDesc('created_at')->where('product_id',$id)->get();
        return view('user.produit.commentaires.liste',[
           'comments'=>$comments,
           'product_id'=>$id
        ]);

     }

     public  function formedit($id){
        $comment= Comment::find($id);

         return view('pages.comments.update',[
             "comment"=>$comment
         ]);
     }

     public function edit(Request $request){
        $input = $request->input();


         Validator::make($input,[
             'content'=>['required'],
              ])->validate();

        $comment = Comment::where('id',$input['comment_id'])->update(['content'=>$input['content']]);

        $comment = Comment::find($input['comment_id']);

        Alert::toast('Commentaire modifier','success');

        return redirect()->route('products.detail',$comment->product_id);
     }


     public function delete($id){
         Comment::find($id)->delete();

         Alert::toast('Commentaire supprimer','warning');
         return redirect()->back();
     }



}
