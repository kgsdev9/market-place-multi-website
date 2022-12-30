<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Seller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{

    //


    public function register(){

        $seller = Seller::find(Auth::user()->owner_id);
        if($seller==null){
            return view('dashboard.profile.seller.create');
        }else{
            return view('dashboard.profile.seller.update',compact('seller'));
        };

   }

   public function create(Request $request){


        Validator::make($request->input(), [
            'sirname' => [ 'string', 'max:255'],
            'firstname' => [ 'string', 'max:255'],
            'phonenumber' => [ 'string', 'max:255'],
            'frequence' => [ 'string', 'max:255'],
            'media' => [ 'string', 'max:255'],
        ])->validate();



        Validator::make($request->file(), [
            'photo'=>['image'],
            'cni'=>['file'],
            'house_piece'=>['file'],
            'rib'=>['file']
        ])->validate();

        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $photopath= time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("seller/images/photo"), $photopath);

        }


        if($request->hasFile('cni')) {
            $file = $request->file('cni');
            $cnipath= time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("seller/images/cni"), $cnipath);

        }

        if($request->hasFile('house_piece')) {
            $file = $request->file('house_piece');
            $house_piecepath= time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("seller/images/house"), $house_piecepath);

        }


        if($request->hasFile('rib')) {
            $file = $request->file('rib');
            $ribpath= time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("seller/images/rib"), $ribpath);

        }



    $seller = Seller::create([
            'sirname'=>$request->input('sirname'),
            'firstname'=>$request->input('firstname'),
            'phonenumber'=>$request->input('phonenumber'),
            'frequence'=>$request->input('frequence'),
            'media'=>$request->input('media'),
            'photo'=>$photopath,
            'cni'=>$cnipath,
            'house_piece'=>$house_piecepath,
            'rib'=>$ribpath,
        ]);

        DB::table('users')
        ->where('id','=',Auth::user()->id)
        ->update(['owner_id'=>$seller->id]);

        // User::where('id',Auth::user()->id)->update(['owner_id'=>$seller->id]);

        $msg= " Félicitation votre  Inscription en tant que vendeur est terminée ";

        Alert::success('Inscription vendeur', $msg);

        return  redirect()->route('dashboard');
   }





  public function update(Request $request){


    Validator::make($request->input(), [
        'sirname' => [ 'string', 'max:255'],
        'firstname' => [ 'string', 'max:255'],
        'phonenumber' => [ 'string', 'max:255'],
        'frequence' => [ 'string', 'max:255'],
        'media' => [ 'string', 'max:255'],
    ])->validate();




    Validator::make($request->file(), [
        'photo'=>['image'],
        'cni'=>['file'],
        'house_piece'=>['file'],
        'rib'=>['file']
    ])->validate();

    $seller = DB::table('sellers')->where('id','=',Auth::user()->owner_id)->first();

    if($request->hasFile('photo')) {
        $file = $request->file('photo');
        $photopath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("seller/images/photo"), $photopath);

    }else{
        $photopath=$seller->photo;
    }




    if($request->hasFile('cni')) {
        $file = $request->file('cni');
        $cnipath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("seller/images/cni"), $cnipath);

    }else{
        $cnipath = $seller->cni;
    }

    if($request->hasFile('house_piece')) {
        $file = $request->file('house_piece');
        $house_piecepath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("seller/images/house"), $house_piecepath);

    }else{
        $house_piecepath = $seller->house_piece;
    }


    if($request->hasFile('rib')) {
        $file = $request->file('rib');
        $ribpath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("seller/images/rib"), $ribpath);

    }else{
        $ribpath = $seller->rib;
    }



    Seller::where('id',$seller->id)->update([
        'sirname'=>$request->input('sirname'),
        'firstname'=>$request->input('firstname'),
        'phonenumber'=>$request->input('phonenumber'),
        'frequence'=>$request->input('frequence'),
        'media'=>$request->input('media'),
        'photo'=>$photopath,
        'cni'=>$cnipath,
        'house_piece'=>$house_piecepath,
        'rib'=>$ribpath,
    ]);
       $msg= "Informations mise à jour  ";
       Alert::success('Modifiication', $msg);
       return  redirect()->route('seller.register.form');
  }



  public function products_comments_pages(){

    $seller = DB::table('sellers')->where('id','=',Auth::user()->owner_id)->first();
    $products = Product::where('seller_id',$seller->id)->paginate(10);


    return view('dashboard.profile.seller.product_comments',compact('products'));


  }


  public function product_comments($id){


    $comments = Comment::where('product_id',$id)->paginate(5);


    return view('dashboard.profile.seller.comments',compact('comments'));


  }



  public function product_order() {

    $product_seller =Order::where('seller_id',Auth::user()->owner_id);





  }




}
