<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use App\Models\Annonce;
use App\Models\Product;
use App\Models\Category;
use App\Models\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //


   public function index(){


    $categories = Category::all()->take(10);
    $product = Product::all();
    $petitprix  =  Product::where('price','<', 10)->paginate(10);
    $prixmoyen  =  Product::where('price','>',30 )->paginate(10);
    $vpiprice  =  Product::where('price','>',300 )->paginate(10);
    $nouvel_arrivage =  Product::orderBy('created_at', 'desc')->get();
    $offre = Offre::all();
        return view('welcome', compact('categories', 'petitprix','offre', 'prixmoyen', 'vpiprice', 'nouvel_arrivage', 'product'));

}


    public function dashboard(){


        if (strtolower(Auth::user()->role->name)=='admin'){
            return redirect()->route('admin_dashbord');
       }else{
        $user = Auth::user()->id;
        $user_annonce  = SendMessage::where('annonceur_id',$user)->get();
        $total_product  =  Product::where('seller_id' , Auth::user()->owner_id)->get();
        return view('dashboard.index');
       };

    }


    public function profile(){

        if(strtolower(strtolower(Auth::user()->role->name))=='vendeur'){

            return view('dashboard.profile.seller.homeprofile');

        }elseif (strtolower(strtolower(Auth::user()->role->name))=='acheteur'){

            return view('dashboard.profile.buyer.homeprofile');
        }elseif (strtolower(Auth::user()->role->name)=='transporteur'){
            return view('dashboard.profile.carrier.homeprofile');
        }elseif (strtolower(Auth::user()->role->name)=='admin'){
             return view('admin.profile.homeprofile');
        };

    }



     public function updateprofile(){
        return view('dashboard.profile.useraccount.updateprofile');
      }

      public function updatepasswordprofile(){
        return view('dashboard.profile.useraccount.passwordprofile');
      }


    public function showcate(){

         $categories= Category::inRandomOrder()->paginate(10);

         return view('pages.categories.showcate',compact('categories'));


    }


    public function  showcateProduct($id){


           $products = Product::where('category_id','=',$id)->paginate(20);
            $cate = Category::find($id);
          return view('pages.categories.productlink',compact('products','cate'));
        }



        public function total_product()  {

            $product =  Product::inRandomOrder()->paginate(30);
            return view('product.index', compact('product'));


        }


        public function indexAjax(){

            $products=Product::get('name');

            $data= [];

            foreach($products as $item){
              $data[] = $item['name'];
            }


            return $data;

            }

            public function shearchcateProduct(Request $request){


                $input = $request->input();


                if($input['searchproduct']==null){
                    return redirect()->back();
                }else{
                    $product = Product::where('name',"LIKE",$request->input('searchproduct'))->first();


                    if($product!=null){
                      return redirect()->route('products.detail',$product->id);
                    }else{
                      Alert::toast('Désolé produit introuvable ! ','info');
                      return redirect()->back();
                    }
                }

             }

             public function validation($code){

                $user=User::where('code',$code)->first();

                User::where('id',$user->id)->update([
                  'confirmated_account'=>true
                ]);


                Auth::loginUsingId($user->id);

                Alert::toast("Félicitation vous avez terminer votre inscription", "success");

                return redirect()->route('home');

               }



            public function pub_annonce()  {

                $annonce = Annonce::orderByDesc('created_at')->paginate(20);
                return view('annoncement.index', compact('annonce'));

            }


            public function detail_annonce($id) {
                    $detail = Annonce::find($id);
                return view('annoncement.detail', compact('detail'));

            }


}
