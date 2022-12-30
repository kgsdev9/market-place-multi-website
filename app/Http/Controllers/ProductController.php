<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Image;
use App\Models\Coupon;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $cate = Category::all();
        $country = Country::orderBy('name')->get();
        $city =  City::orderBy('name')->get();
        return view('dashboard.product.productadd', compact('cate', 'country', 'city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        Validator::make($request->all(),[
            'name'=>['required'],
            'country'=>['required'],
            'city'=>['required'],
            'statut'=>['required'],
            'description'=>['required'],
            'price'=>['required','max:255'],
            'first_image'=>['required'],
            'images'=>['required'],
            'quantity'=>['required','integer'],

        ])->validate();

        if($request->hasFile('first_image')) {
            $file = $request->file('first_image');
            $image_name = time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $image_name);
            $code = rand(10000, 20000);
            $produit  = new Product([
                'name'=>$request->name,
                "slug" =>$request->name,
                'country_id'=>$request->country,
                'city_id'=>$request->city,
                'statut'=>$request->statut,
                'description'=>$request->description,
                'referencies' =>$request->referencies,
                'price'=>$request->price,
                'sku_product' => $code ,
                'tag'  => $request->tag,
                'quantity'=>$request->quantity,
                'category_id'=>$request->category_id,
                'seller_id'=>Auth::user()->owner_id,
                'cover_image' =>$image_name,
            ]);

            $produit->save();

        }

        if($request->hasFile("images")) {
            $files = $request->file("images");
            foreach($files as $file) {
                    $imageNname = time(). '_' .$file->getClientOriginalName();
                    $request['product_id'] = $produit->id ;
                    $request['image'] = $imageNname;
                    $file->move(\public_path("/images"), $imageNname);
                    Image::create($request->all());
            }
        }

        Alert::success('success','Produit ajouté ');
        return redirect()->route('product_list');
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
    public function show(){
        $products=Product::orderBy('name')->where('seller_id',Auth::user()->owner_id)->get();
        return view('account.produit.liste',[
        'products'=>$products,
       ]);
    }

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
    public function update(Request $request, $id) {
             Validator::make($request->all(), [
                'name' => ['required', 'string'],
                'country_id' => ['required'],
                'city_id' => ['required'],
                'statut' =>['required'],
                'price'  =>['required'],
                'category_id' =>['required'],
                'quantity' =>['required'],
                'description' =>['required']
            ])->validate();

        $product = Product::findOrFail($id);
        $destination  = "cover/" .$product->cover_image ;
        if($request->hasFile('image')) {
            if( File::exists($destination)) {
                File::delete($destination) ;
            }
            $file = $request->file('image');
              $product->cover_image = time(). "_".$file->getClientOriginalName();
              $file->move(\public_path("/cover"),$product->cover_image);
                $request['image']  =$product->image ;
              }
            $product->update([
                'name'=>$request->name,
                'slug' =>$request->name,
                'country_id'=>$request->country_id,
                'city_id'=>$request->city_id,
                'statut'=>$request->statut,
                'description'=>$request->description,
                'referencies' =>$request->referencies,
                'price'=>$request->price,
                'tag'  => $request->tag,
                'quantity'=>$request->quantity,
                'category_id'=>$request->category_id,
                'seller_id'=>Auth::user()->owner_id,
                'cover_image' =>$product->cover_image,
            ]);

            if($request->hasFile("images")) {
                $files = $request->file("images");
                foreach($files as $file) {
                    $imageName =time(). "_".$file->getClientOriginalName();
                    $request["product_id"] = $id ;
                    $request["images"] = $imageName;
                    $file->move(\public_path("images"), $imageName);
                    Image::create($request->all());
                }
            }

            Alert::success('success','Produit Modifié');
            return redirect()->back();

     }




    //  Alert::toast('Modifier avec succès','success');
    //  return redirect()->route('product_list');
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $product = Product::findOrFail($id);
        $destination  = "cover/" .$product->cover_image ;

        if(File::exists($destination)) {
            File::delete($destination);
        }
        $images = Image::where('product_id', $product->id)->get();
            foreach($images  as $image) {
                if(File::exists("images/" .$image->image)){
                     File::delete("images/" .$image->image);
                }
            }
        $product->delete();
        return redirect()->back();
    }








    public function  list ()  {
        $product_product  =  Product::where('seller_id' , Auth::user()->owner_id)->OrderByDesc('created_at')->paginate(10);

        return view('dashboard.product.listeproduct', compact('product_product'));

    }



    public function detail($id){

        $product = Product::where('id',$id)->first();
        $country  = Country::all();
        $city =  City::all();
        $coupons = Coupon::where('product_id',$product->id)->paginate(10);
        $categories = Category::all();

      return view('dashboard.product.detailproduct',compact('product','categories','coupons', 'city', 'country'));

    }

    public function cate_liste() {
        $categories = Category::orderBy('name')->paginate(5);
        return view('dashboard.product.categorie.listecate', compact('categories'));
    }

}
