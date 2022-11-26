<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $category = Category::all();
        return view('dashboard.product.productadd', compact('category'));
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
            'quantity'=>['required','integer'],

        ])->validate();

        if($request->hasFile('first_image')) {
            $file = $request->file('first_image');
            $image_name = time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $image_name);

            $produit  = new Product([
                'name'=>$request->name,
                "slug" =>$request->name,
                'country'=>$request->country,
                'city'=>$request->city,
                'statut'=>$request->statut,
                'description'=>$request->description,
                'referencies' =>$request->referencies,
                'price'=>$request->price,
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
        Alert::toast('Produit ajouté avec succès!','success');
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
    public function update(Request $request) {


        $inputs = $request->input();
         Validator::make($inputs, [
            'name' => ['required', 'string'],
            'slug' =>['required'],
            'country' => ['required'],
            'city' => ['required'],
            'statut' =>['required'],
            'price'  =>['required'],
            'category_id' =>['required'],
            'quantity' =>['required'],
            'description' =>['required']

        ])->validate();


        if($request->hasFile('image')) {
            $i=$request->file('image')->getClientOriginalName();
            $chemin = 'cover/'.$i;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('cover/' , $filename);

            Product::where('id',$inputs['product_id'])->update([
                'name'=>$inputs['name'],
                'slug' =>$inputs['slug'],
                'country'=>$inputs['country'],
                'city'=>$inputs['city'],
                'statut'=>$inputs['statut'],
                'price'=>$inputs['price'],
                'category_id'=>$inputs['category_id'],
                'quantity'=>$inputs['quantity'],
                'description'=>$inputs['description'],

                'cover_image'=>$filename
            ]);




         }else{

            Product::where('id',$inputs['product_id'])->update([
                'name'=>$inputs['name'],
                'slug' =>$inputs['slug'],
                'country'=>$inputs['country'],
                'city'=>$inputs['city'],
                'statut'=>$inputs['statut'],
                'price'=>$inputs['price'],
                'category_id'=>$inputs['category_id'],
                'quantity'=>$inputs['quantity'],
                'description'=>$inputs['description'],


            ]);


         }



    if($request->hasFile("images")) {



            foreach($request->file("images") as $file) {
                dd($file);
                $image = Image::where('product_id',$inputs['product_id'])
                ->where('image',$file->getClientOriginalName())
                ->first();
                dd($image);
                $chemin ='images/'.$file->getClientOriginalName();
                if(File::exists($chemin)) {
                    $docs =File::delete($chemin) ;
                    }
                    $imageNname = time(). '_' .$file->getClientOriginalName();
                    $request['product_id'] = $inputs['product_id'];
                    $request['image'] = $imageNname;
                    $file->move(\public_path("/images"), $imageNname);
                    Image::updated($request->all());
            }

    }


         Alert::toast('Modifier avec succès','success');
        return redirect()->route('product_list');



     }


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

            foreach($images  as $images) {

                if(File::exists("images" .$images->image)){

                        File::delete("images" .$images->image);

                }
            }

            $images->delete();
            $product->delete();
           return Redirect()->route('product_list')->with('delete', 'Produit Supprimé');



    }








    public function  list ()  {
        $product_product  =  Product::where('seller_id' , Auth::user()->owner_id)->OrderByDesc('created_at')->paginate(10);

        return view('dashboard.product.listeproduct', compact('product_product'));

    }



    public function detail($id){

        $product = Product::where('id',$id)->first();
        $coupons = Coupon::where('product_id',$product->id)->paginate(10);
        $categories = Category::all();

      return view('dashboard.product.detailproduct',compact('product','categories','coupons'));

    }

    public function cate_liste() {
        $categories = Category::orderBy('name')->paginate(5);
        return view('dashboard.product.categorie.listecate', compact('categories'));
    }

}
