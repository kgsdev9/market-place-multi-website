<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Offre;
use App\Models\Order;
use App\Models\Seller;
use App\Models\Annonce;
use App\Models\Carrier;
use App\Models\Product;
use App\Models\Category;
use App\Models\Entreprise;
use App\Models\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategorieRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function index() {
        $seller =  Seller::all();
        $buyer = Buyer::all();
        $transporteur =  Carrier::all();
        $order = Order::all();
        $annonce = Annonce::all();
        return view('admin.index', compact('seller', 'buyer', 'transporteur', 'order', 'annonce'));

    }


    public function transport_offre() {
        $offre= Offre::paginate(10);
        return view('admin.offre', compact('offre'));
    }

    public function relationship_inbox($id) {
        $source = SendMessage::find($id);
        return view('admin.actor.annonce.user-message-announce', compact('source'));
    }

    public function senbox_annnounce() {
        $message = SendMessage::all();
        return view('admin.actor.annonce.message-annouce', compact('message'));
    }


    public function view_annouce($id) {
        $detail = Annonce::find($id);
        return view('admin.actor.annonce.detail', compact('detail'));
    }



    public function seller_liste() {

        $seller = Seller::orderByDesc('created_at')->paginate(10);
        return view('admin.actor.seller.list', compact('seller'));

    }


    public function detail_seller($id_seller) {

        $seller_detail = Seller::find($id_seller);

        return view('admin.actor.seller.detail', compact('seller_detail'));

    }

    public function carrer_all() {

        $carrer = Carrier::paginate(10);

        return view('admin.actor.carrer.liste', compact('carrer'));

    }

    // public function  product_seller($id) {

    //     $product_seller =  Product::where('seller_id', '=', $id)->paginate(10);

    //     return view('admin.actor.seller.product', compact('product_seller'));


    // }

        public function carrer_offert($id) {
            $entreprise =  Entreprise::where('user_id', Auth::user()->id)->first();
            $offre =Offre::where('entreprise_id', $entreprise)->paginate(10);
        return view('admin.actor.carrer.offert', compact('offre'));

    }


    // $query =  Entreprise::where('user_id',Auth::user()->id)->first();

    // if($query==null){

    // Alert::toast('Aucune entreprise enregistrée ','warning');
    //     return redirect()->route('entreprise.register.form');
    // }else{

    //     $liste =  Offre::where('entreprise_id',$query->id)->get();


    public function carrer_detail($id) {
        $carrer_detail = Carrier::where('id', $id)->first();
        return view('admin.actor.carrer.detail', compact('carrer_detail'));
    }

    public function  product_seller($id) {
        $product_seller =  Product::where('seller_id', '=', $id)->paginate(10);
        return view('admin.actor.seller.product', compact('product_seller'));


    }



    public function cate_liste()  {
        $categorie =  Category::paginate(10);
        return view('admin.categorie.liste', compact('categorie'));
    }


    public function edit_cate($id) {

        $edit_cate = Category::find($id);
        return view('admin.categorie.edit', compact('edit_cate'));

    }


public function buyer_liste() {

    $buyer = Buyer::paginate(10);
    return view('admin.actor.buyer.list', compact('buyer'));

}

public function add_cate() {

    return view('admin.categorie.add');
}



public function store(Request $request)
{

    Validator::make($request->input(),[
      'name'=>['required',Rule::unique(Category::class)],
    ])->validate();


    $categorie = new Category ();
    $categorie->name = $request->input('name');
    $categorie->slug = $request->input('name');
    $categorie->description = $request->input('description');

    if($request->hasfile('image')) {
        $file = $request->file('image');
        $extention  = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('categorie/images/' , $filename);
        $categorie->image  = $filename;
     }
    $categorie->save();
    Alert::success('Success','Categorie Ajouté Avec Success');
    return redirect()->route('list.cate');

}


public function update_cate(Request $request, $id)  {

    $update = Category::find($id);

    $update->name = $request->input('name');
    $update->slug=  $request->input('name');
    $update->description =  $request->input('description');

     if($request->hasFile('image')) {
        $chemin = 'categorie/images/'.$update->image;
        if(File::exists($chemin)) {
        $docs =    File::delete($chemin) ;
        }
        $file = $request->file('image');
        $extention  = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('categorie/images/' , $filename);
        $update->image  = $filename;
     }
     $update->update()  ;
     Alert::success('Success','Categorie Mise à jour avec succes');
    return redirect()->route('list.cate');
}

public function delete_cate($id){
    $cate = Category::find($id);
    $destination = 'categorie/images/'.$cate->image ;
    if(File::exists($destination )) {
        File::delete($destination);
    }
    $cate->delete();
    return redirect()->route('list.cate');
}


public function updateprofile(){
    return view('admin.profile.account.updateprofile');
}

  public function updatepasswordprofile(){
    return view('admin.profile.account.passwordprofile');
}


public function view_order()  {
$order = Order::orderByDesc('created_at')->paginate();
    return view('admin.actor.order.liste', compact('order'));
}


public function order_detail($id)  {
    $order = Order::find($id);
        return view('admin.actor.order.detail', compact('order'));
}


public function admin_detail_order($id) {
    $order = Order::find($id);
    return view('admin.actor.order.detail', compact('order'));
}

public function annonce_liste() {

    $annouce = Annonce::orderByDesc('created_at')->paginate(10);
    return view('admin.actor.annonce.liste', compact('annouce'));
}


}
