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
use App\Http\Livewire\Annoncecomponent;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CategoryComponent;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SellerController;
use App\Http\Livewire\Deleteintentpayment;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Cardproductcomponent;
use App\Http\Livewire\Productcatecomponent;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Productindexcomponent;
use App\Http\Controllers\SouscribrController;
use App\Http\Livewire\Paymentmethodcomponent;
use App\Http\Livewire\Sellerproductcomponent;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\UserProductController;
use App\Http\Livewire\SouscategoriesproductList;
use App\Http\Controllers\ContryAndCityController;
use App\Http\Controllers\AnnonceMessageController;

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


Route::get('/', HomeComponent::class)->name('home');
Route::get('/detail/product/{id}', Detailproduct::class)->name('product.detail');
Route::get('/home/pages/category/index/pages/view', CategoryComponent::class)->name('category.index');
Route::get('product/category/index/user/{id}', Cardproductcomponent::class )->name('product.category.index');
Route::get('/annonces/bagages/', Annoncecomponent::class)->name('annonce.index')->middleware(['actor.annonceur']);
Route::get('/product/index/view/user/manager/user/Secure&', Productindexcomponent::class)->name('index.product');
Route::get('/sellers/pages/homes/secure/information', Sellerpage::class)->name('seller.pages');
// Route::get('/sellers/product/view/secure/{id}', [HomeController::class, 'show'])->name('sellers.products.index');
Route::get('/sellers/product/view/{id}', Sellerproductcomponent::class)->name('sellers.products.index');
  Route::get('/category/list', [CategoryController::class, 'list'])->name('cate.liste');
  Route::get('/product/details/{id}', [UserProductController::class, 'show'])->name('products.detail');
  Route::get('/category/forms', [CategoryController::class, 'index']);
  Route::post('/category/add', [CategoryController::class, 'store'])->name('cate.create');
  Route::get('/pages/categories',[UserController::class,'showcate']);
Route::post('/suscribe/newsletter', [ServiceController::class, 'suscribe_letter'])->name('suscribe.letter');
Route::post('/response',  [AnnonceMessageController::class , 'store'])->name('response.annonce');
Route::get('/sendbox/message', [AnnonceMessageController::class, 'index'])->name('send.box.receveied');
Route::get('/inbox/message/{id}',  [AnnonceMessageController::class, 'detail'])->name('inbox.detail');
Route::get('/product/search',[UserController::class,'indexAjax']);
Route::post('/pages/categories/products',[UserController::class,'shearchcateProduct'])->name('search.product');
Route::get('/pages/email/confirmation/{code}',[UserController::class,'validation'])->name('email.validation');
Route::post('/dashboard/product/detail/coupon/',  [CouponController::class, 'create'])->name('create.coupon');
 Route::get('/dashboard/product/detail/coupon/delete/{id}',  [CouponController::class, 'delete'])->name('delete.coupon');
 Route::post('/cart/coupon/apply',  [CouponController::class, 'applycoupon'])->name('apply.coupon');
Route::get('/categorie/souscategorie/{name}',SouscategoriesproductList::class)->name('categorie_souscategorie');

Route::resources(['annnnonced' => AnnonceController::class]);
Route::get('/cart', Cartcomponent::class)->name('cart.index');

Route::middleware(['auth', 'actor.permission'])->group(function() {
Route::get('/intent/product' , Intentproduct::class)->name('intent.product');
Route::get('/stripeforms', [PaymentController::class, 'createStripe'])->name('stripeforms');
Route::post('/post/charges', [PaymentController::class, 'createOrderBilling'])->name('Stripe.forms');
 Route::get('/payment/successful' , [PaymentController::class , 'successPayment'])->name('success.payment');
Route::get('/paymentmethod', Paymentmethod::class)->name('paymentMethod');
});


Route::middleware(['auth'])->group(function() {
Route::get('/invoices/{id}', [ InvoiceController::class, 'detail_pdf'])->name('donwload.pdf');
Route::get('/dashboard/profile/buyer/form',[BuyerController::class,'register'])->name('buyer.register.form');
Route::get('/forms/annoncound', [AnnonceController::class, 'index'])->name('form.annonce')->middleware("subscribe");
Route::post('/create/annonce', [AnnonceController::class, 'store'])->name('create.annonce');
Route::get('/annonce/list', [AnnonceController::class, 'annonce_liste'])->name('list.annonce')->middleware("subscribe");;
Route::get('/edit/annonce/{id}', [AnnonceController::class, 'edit_annonce'])->name('edit.annonce');
Route::patch('/update/annonce/{id}', [AnnonceController::class, 'update_annonce'])->name('update.annonce');
Route::get('/delete/annonce/{id}', [AnnonceController::class, 'delete_annanonce'])->name('destroy.annonce');
Route::get('/dashboard/profile',[UserController::class,'profile'])->name('profile');
Route::get('/dashboard/prdouct/forms', [ProductController::class, 'index'])->name('add.product');
Route::post('/dashboard/product/add', [ProductController::class, 'create'])->name('create.product');
Route::get('/dashboard/product/list' , [ProductController::class, 'list'])->name('product_list');
Route::GET('/dashboard/product/delete/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
Route::get('/dashboard/product/detail/{id}',  [ProductController::class, 'detail'])->name('edit.product');
Route::put('dashboard/product/{id}',  [ProductController::class, 'update'])->name('update.product');
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
Route::get('/pages/category/products/{id}',[UserController::class,'showcateProduct'])->name('cate.productlink');
Route::get('/index/product',  [UserController::class, 'total_product']) ;
Route::get('/remove/{id}' , [WishlistController::class, 'destroy'])->name('destroy.items');
Route::get('/orders', [OrderController::class, 'index'])->name('order.index')->middleware('auth');
Route::get('/detail/oders/{id}', [OrderController::class, 'detail_order'])->name('detail.order');
Route::get('/orders/liste', [OrderController::class, 'show'])->name('user.detail')->middleware('auth');
Route::post('/sms/send', [MessageController::class, 'store'])->name('send.sms');
Route::get('dashboard/profil/offre/forms', [OffreController::class, 'index']);
Route::get('dashboard/profil/offre/list', [OffreController::class,'liste_offre'])->name('liste.offert');
Route::get('dashboard/profil/offre/edit/{id}', [OffreController::class,'edit_offrert'])->name('edit.offert');
Route::post('dashboard/profil/offre/forms', [OffreController::class, 'store'])->name('offre.store');
Route::get('dashboard/profil/offre/delete/{id}', [OffreController::class,'delete'])->name('delete.offert');
Route::patch('/dashboard/profile/offre/update/{id}',[OffreController::class,'update_offre'])->name('update.offre');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('confirmation_verified');
Route::get('/dashboard/message/to_seller/form/{id}/',[MessageController::class,'smsform_to_seller'])->name('form.sms.to_seller');
 Route::get('/dashboard/message/to_carrier/form/{id}/',[MessageController::class,'smsform_to_carrier'])->name('form.sms.to_carrier');
Route::get('/dashboard/message/list/sms', [MessageController::class,  'liste_message'])->name('liste.sms');
Route::get('/dashboard/message/list/recevied', [MessageController::class,  'smsrecevied'])->name('receve.sms');
Route::get('/dashboard/message/list/delete/{id}', [MessageController::class,  'destroy'])->name('delete.sms');
Route::get('/dashboard/message/list/detail/{id}', [MessageController::class,  'detail'])->name('detail.sms');
Route::post('/dashboard/message/list/detail/update', [MessageController::class,  'update'])->name('update.sms');
Route::get('/dashboard/message/list/recevied/see/{id}', [MessageController::class,  'smssee'])->name('see.sms');
Route::post('/dashboard/profile/buyer/store',[BuyerController::class,'create'])->name('buyer.store');
Route::post('/dashboard/profile/buyer/update',[BuyerController::class,'update'])->name('buyer.update');
Route::patch('dashboard/profil/offre/edit/{id}', [OffreController::class, 'edit'])->name('offert.offert');
Route::post('/response',  [AnnonceMessageController::class , 'store'])->name('response.annonce');
Route::get('/sendbox/message', [AnnonceMessageController::class, 'index'])->name('send.box.receveied');
Route::get('/inbox/message/{id}',  [AnnonceMessageController::class, 'detail'])->name('inbox.detail');
Route::get('/response/inbox/{id}',  [AnnonceMessageController::class, 'response'])->name('inbox.send');
Route::get('/invoices/order/{id}', [InvoiceController::class, 'invoice_commande_admin'])->name('invoice.admin');
Route::post('detail/product/add',[CommentController::class,'add'])->name('add_comment');
Route::post('detail/product/edit',[CommentController::class,'edit'])->name('edit_comment');
Route::get('detail/product/supprimer/{id}',[CommentController::class,'delete'])->name('supprimer_comment');
Route::get('/response/inbox/{id}',  [AnnonceMessageController::class, 'response'])->name('inbox.send');
Route::get('/plan', [SouscribrController::class, 'index'])->name('plan.index');
Route::get('plan/{plan}',  [SouscribrController::class, 'show'])->name('plan.show');
Route::get('/success/suscribe',  [SouscribrController::class, 'successSusbrice'])->name('success.suscribe');
Route::post('subscription', [SouscribrController::class, 'subscription'])->name("subscription.create");
Route::get('subscription', [SouscribrController::class, 'list'])->name("subscription.list");
});



Route::middleware(['auth', 'admin'])->group(function() {
Route::get('/dashboard/admin/profile/updateprofileform',[AdminController::class,'updateprofile'])->name('admin.update.form');
Route::get('/dashboard/admin/profile/updatepasswordprofileform',[AdminController::class,'updatepasswordprofile'])->name('admin.update.password.form');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin_dashbord');
Route::get('/dashboard/admin/seller/detail{id}', [AdminController::class, 'detail_seller'])->name('seller.detail');
Route::get('/dashboard/admin/seller/product/{id}', [AdminController::class, 'product_seller'])->name('seller.product');
Route::get('/dashboard/admin/seller/liste', [AdminController::class, 'seller_liste']);
Route::get('/dashboard/admin/carrier/liste', [AdminController::class, 'carrer_all']);
Route::get('/dashboard/admin/carrier/detail/{id}', [AdminController::class, 'carrer_detail'])->name('carrer.detail');
Route::get('/dashboard/admin/carrier/offre/{id}', [AdminController::class, 'carrer_offert'])->name('carrer.offert');
Route::get('/dashboard/admin/buyer/list', [AdminController::class, 'buyer_liste'])->name('buyer.all');
Route::get('/dashboard/admin/cate/forms', [AdminController::class, 'add_cate']);
Route::post('dashboard/admin/cate/create', [AdminController::class, 'store'])->name('post.cate');
Route::get('/dashboard/admin/cate/list', [AdminController::class, 'cate_liste'])->name('list.cate');
Route::get('/dashboard/admin/cate/edit/{id}', [AdminController::class, 'edit_cate'])->name('edit.cate');
Route::get('/offre/transport/liste', [AdminController::class ,'transport_offre'])->name('transport.offre');
Route::patch('dashboard/admin/cate/update/{id}', [AdminController::class, 'update_cate'])->name('update.cate');
Route::get('/dashboard/admin/cate/delete{id}', [AdminController::class, 'delete_cate'])->name('destroy.cate');
Route::get('/dashboard/admin/orders/list', [AdminController::class, 'view_order'])->name('admin.order');
Route::get('/dashboard/admin/orders/detail/{id}', [AdminController::class, 'admin_detail_order'])->name('order.detail.admin');
Route::get('/liste/announce', [AdminController::class, 'annonce_liste'])->name('admin.announce');
Route::get('/detail/admin/annouce/{id}', [AdminController::class ,'view_annouce'])->name('seller.annouce');
Route::get('/inbox/annouce' , [AdminController::class ,'senbox_annnounce'])->name('senbox.announce');
Route::get('/detail/inboix/{id}', [AdminController::class ,'relationship_inbox'])->name('relationship.inbox');
});

Route::get('/carriers', function (){
  return view('transporteurs.index');
});


Route::get('/index/country', [ContryAndCityController::class, 'indexCountry'])->name('country.index');
Route::get('/create/country' , [ContryAndCityController::class, 'create'])->name('create.country');
Route::post('/poste/country', [ContryAndCityController::class, 'store'])->name('post.country');
Route::get('/edit/country/{id}', [ContryAndCityController::class, 'edit'])->name('edit.country');
Route::get('/destroy/country/{id}', [ContryAndCityController::class, 'destroy'])->name('destroy.country');
Route::patch('/poste/update/county/{id}', [ContryAndCityController::class, 'update'])->name('update.country');



Route::get('/index/city', [ContryAndCityController::class, 'indexCity'])->name('city.index');
Route::get('/create/city' , [ContryAndCityController::class, 'create_city'])->name('create.city');
Route::post('/poste/city', [ContryAndCityController::class, 'store_city'])->name('post.city');
Route::get('/edit/city/{id}', [ContryAndCityController::class, 'edit_city'])->name('edit.city');
Route::get('/destroy/city/{id}', [ContryAndCityController::class, 'destroy_city'])->name('destroy.city');
Route::patch('/poste/update/{id}', [ContryAndCityController::class, 'update_city'])->name('city.update');
