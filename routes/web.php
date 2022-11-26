<?php

use App\Http\Livewire\Sellerpage;
use App\Http\Livewire\ProductList;
use App\Http\Livewire\Cartcomponent;
use App\Http\Livewire\Detailproduct;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Intentproduct;
use App\Http\Livewire\MyProductList;
use App\Http\Livewire\Paymentmethod;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Stripecomponent;
use App\Http\Livewire\Annoncecomponent;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CategoryComponent;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Cardproductcomponent;
use App\Http\Livewire\Productcatecomponent;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Productindexcomponent;
use App\Http\Controllers\UserProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//routes pour les dashboards des utilisateuers
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
// Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('confirmation_verified');
    Route::get('/dashboard/profile',[UserController::class,'profile'])->name('profile');
    Route::get('/dashboard/prdouct/forms', [ProductController::class, 'index'])->name('add.product');
    Route::post('/dashboard/product/add', [ProductController::class, 'create'])->name('create.product');
    Route::get('/dashboard/product/list' , [ProductController::class, 'list'])->name('product_list');
    Route::GET('/dashboard/product/delete/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
    Route::get('/dashboard/product/detail/{id}',  [ProductController::class, 'detail'])->name('edit.product');
    Route::put('dashboard/product',  [ProductController::class, 'update'])->name('update.product');
    Route::get('/dashboard/categorie/liste', [ProductController::class, 'cate_liste'])->name('liste.cate');
    Route::post('/dashboard/profile/seller/',[SellerController::class,'create'])->name('seller.store');
    Route::get('/dashboard/profile/seller/form',[SellerController::class,'register'])->name('seller.register.form');
    Route::get('/dashboard/profile/user/updateprofileform',[UserController::class,'updateprofile'])->name('user.update.form');
    Route::get('/dashboard/profile/user/updatepasswordprofileform',[UserController::class,'updatepasswordprofile'])->name('user.update.password.form');
    Route::get('/dasboard/profile/seller/edit/{id}' , [SellerController::class , 'edit_update_seller_information'])->name('seller.edit');
    Route::get('/dasboard/profile/seller/update/{id}' , [ProductController::class , 'detail'])->name('product.details');//route detai modifie
    Route::post('/dashboard/profile/seller/update',[SellerController::class,'update'])->name('seller.update');
    Route::get('/dashboard/profile/seller/comments',[SellerController::class,'products_comments_pages'])->name('seller.commments');
    Route::get('/dashboard/profile/seller/comments/product/{id}',[SellerController::class,'product_comments'])->name('seller.product.commments');
    Route::get('/dashboard/profile/seller/offres',[OffreController::class,'seller_see_orfers'])->name('seller.offers');
    Route::get('/offre/detail/{id}',[OffreController::class,'seller_see_orfers_detail'])->name('seller.offers.detail');
    Route::get('/dashboard/profile/carrier/form',[CarrierController::class,'register'])->name('carrier.register.form');
    Route::post('/dashboard/profile/carrier/',[CarrierController::class,'create'])->name('carrier.store');
    Route::post('/dashboard/profile/carrier/update',[CarrierController::class,'update'])->name('carrier.update');
    Route::get('/dashboard/profile/entreprise/form',[EntrepriseController::class,'form'])->name('entreprise.register.form');
    Route::post('/dashboard/profile/entreprise/',[EntrepriseController::class,'store'])->name('entreprise.store');
    Route::get('/dashboard/profile/entreprise/detail/',[EntrepriseController::class,'detail_entreprise'])->name('detail.entreprise');
    Route::patch('/dashboard/profile/entreprise/update',[EntrepriseController::class,'edit_entreprise'])->name('update.entreprise');
    Route::post('/pages/product/detail/comment/add',[CommentController::class,'add'])->name('comment.add');
    Route::get('/pages/product/detail/comment/delete/{id}',[CommentController::class,'delete'])->name('comment.delete');
    Route::get('/pages/product/detail/comment/update/{id}',[CommentController::class,'formedit'])->name('comment.form.edit');
    Route::post('/pages/product/detail/comment/edit',[CommentController::class,'edit'])->name('comment.edit');
    Route::get('/dashboard/message/to_seller/form/{id}/',[MessageController::class,'smsform_to_seller'])->name('form.sms.to_seller');
    Route::get('/dashboard/message/to_carrier/form/{id}/',[MessageController::class,'smsform_to_carrier'])->name('form.sms.to_carrier');
    Route::get('/dashboard/message/list/sms', [MessageController::class,  'liste_message'])->name('liste.sms');
    Route::get('/dashboard/message/list/recevied', [MessageController::class,  'smsrecevied'])->name('receve.sms');
    Route::get('/dashboard/message/list/delete/{id}', [MessageController::class,  'destroy'])->name('delete.sms');
    Route::get('/dashboard/message/list/detail/{id}', [MessageController::class,  'detail'])->name('detail.sms');
    Route::post('/dashboard/message/list/detail/update', [MessageController::class,  'update'])->name('update.sms');
  Route::get('/dashboard/message/list/recevied/see/{id}', [MessageController::class,  'smssee'])->name('see.sms');

  Route::get('/product', [UserProductController::class, 'index']);
  Route::get('/cate/index',  [CategoryController::class, 'view'])->name('index.cate');
  Route::get('/category/list', [CategoryController::class, 'list'])->name('cate.liste');
  Route::get('/product/details/{id}', [UserProductController::class, 'show'])->name('products.detail');
  Route::get('/category/forms', [CategoryController::class, 'index']);
  Route::post('/category/add', [CategoryController::class, 'store'])->name('cate.create');
  Route::get('/pages/categories',[UserController::class,'showcate']);

  Route::get('/pages/category/products/{id}',[UserController::class,'showcateProduct'])->name('cate.productlink');
  Route::get('/index/product',  [UserController::class, 'total_product']) ;
  Route::get('/remove/{id}' , [WishlistController::class, 'destroy'])->name('destroy.items');
  Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
  Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
  Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
  Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');
  Route::get('/orders', [OrderController::class, 'index'])->name('order.index')->middleware('auth');
  Route::get('/detail/oders/{id}', [OrderController::class, 'detail_order'])->name('detail.order');

  Route::get('/orders/liste', [OrderController::class, 'show'])->name('user.detail')->middleware('auth');
  Route::post('/sms/send', [MessageController::class, 'store'])->name('send.sms');
  Route::get('dashboard/profil/offre/forms', [OffreController::class, 'index']);
Route::get('dashboard/profil/offre/list', [OffreController::class,'liste_offre'])->name('liste.offert');
Route::post('dashboard/profil/offre/forms', [OffreController::class, 'store'])->name('offre.store');
Route::get('dashboard/profil/offre/delete/{id}', [OffreController::class,'delete'])->name('delete.offert');
Route::patch('dashboard/profil/offre/edit/{id}', [OffreController::class, 'edit'])->name('offert.offert');

  // routes pour les offres


//fin des routes pour les dashboard des utilisqteurs

Route::post('/suscribe/newsletter', [ServiceController::class, 'suscribe_letter'])->name('suscribe.letter');
Route::get('/forms/annoncound', [AnnonceController::class, 'index'])->name('form.annonce');
Route::post('/create/annonce', [AnnonceController::class, 'store'])->name('create.annonce');
Route::get('/annonce/list', [AnnonceController::class, 'annonce_liste'])->name('list.annonce');
Route::get('/edit/annonce/{id}', [AnnonceController::class, 'edit_annonce'])->name('edit.annonce');
Route::patch('/update/annonce/{id}', [AnnonceController::class, 'update_annonce'])->name('update.annonce');
Route::get('/delete/annonce/{id}', [AnnonceController::class, 'delete_annanonce'])->name('destroy.annonce');

Route::post('/response',  [AnnonceMessageController::class , 'store'])->name('response.annonce');
Route::get('/sendbox/message', [AnnonceMessageController::class, 'index'])->name('send.box.receveied');
Route::get('/inbox/message/{id}',  [AnnonceMessageController::class, 'detail'])->name('inbox.detail');
Route::get('/response/inbox/{id}',  [AnnonceMessageController::class, 'response'])->name('inbox.send');


Route::get('/', HomeComponent::class);
Route::get('/cart', Cartcomponent::class);
Route::get('/detail/product/{id}', Detailproduct::class)->name('product.detail');
Route::get('/payement/method', Paymentmethod::class)->name('payement.method');
Route::get('/forms/payment/stripe/resppnse', Stripecomponent::class)->name('stripe.payment');
Route::post('/payement' , [PaymentController::class , 'store'])->name('stripe.store');
Route::get('/home/pages/category/index/pages/view', CategoryComponent::class)->name('category.index');
Route::get('product/category/index/user/{id}', Cardproductcomponent::class, )->name('product.category.index');
Route::get('/intent/product' , Intentproduct::class)->name('intent.product')->middleware('auth');
Route::get('/annonces/bagages/', Annoncecomponent::class)->name('annonce.index');
Route::get('/product/index/view/user/manager/user/Secure&', Productindexcomponent::class)->name('index.product');
Route::get('/sellers/pages/homes/secure/information', Sellerpage::class)->name('seller.pages');
Route::get('/sellers/product/view/secure/{id}', [HomeController::class, 'show'])->name('sellers.products.index');


Route::resources([
    'annnnonced' => AnnonceController::class,

]);



//confirmation email

Route::get('/pages/email/confirmation/{code}',[UserController::class,'validation'])->name('email.validation');

//routes pour les coupons

Route::post('/dashboard/product/detail/coupon/',  [CouponController::class, 'create'])->name('create.coupon');
 Route::get('/dashboard/product/detail/coupon/delete/{id}',  [CouponController::class, 'delete'])->name('delete.coupon');

 Route::post('/cart/coupon/apply',  [CouponController::class, 'applycoupon'])->name('apply.coupon');


 Route::get('/payement', [PaymentController::class, 'create'])->name('forms.payment');
