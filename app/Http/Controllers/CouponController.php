<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class CouponController extends Controller
{
    //

    public function create( Request  $request){

        $inputs = $request->input();


        $product = Product::find($inputs['product_id']);




        Product::where('id',$product->id)->update([
            'high_price'=>$inputs['high_price'],
        ]);


        $rand = rand(0,432154);

        $coupon = Hash::make($rand);

        $cpn= Coupon::create(
           [ 'product_id'=>$product->id,
            'coupon'=>$coupon,
            'price'=>$inputs['high_price']
            ]
        );


        Alert::toast("Félicitation coupon générer" , 'success');

        return redirect()->route('edit.product',$product->id);
    }


    public function delete($id){
        Coupon::find($id)->delete();


        return redirect()->back();
    }


    public function applycoupon(Request $request){



        $coupon = $request->input('coupon');


        if($coupon==null){

            return redirect()->back();
        }else{

            $r= Coupon::where('coupon',$coupon)->first();

            if($r==null){
                $msg ='Coupon erroné';
                Alert::toast($msg,'warning');
                 return redirect()->back();
            }else{
                if($r->used==true){
                    $msg ='Coupon déjà utilisé';
                    Alert::toast($msg,'warning');
                    return redirect()->route('cart.index');
                }else{
                    $product = Product::where('id',$r->product_id)->first();
                     $var=session()->get('cart');
                        if($var[$product->id]['product_id']==$r->product_id){
                            $var[$product->id]["price"] = $var[$product->id]['price']-$r->price;
                            session()->put('cart', $var);

                            $c=Coupon::where('id',$r->id)->update(['used'=>true]);


                        };

                   $msg ='Félicitation remise de'  .$r->price.'€ sur le produit  '.$product->name;
                   Alert::toast($msg,'success');
                   return redirect()->route('cart.index');
                }
            }








        }
    }
}
