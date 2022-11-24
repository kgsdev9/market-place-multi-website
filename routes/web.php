<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Livewire\Annoncecomponent;
use App\Http\Livewire\Cardproductcomponent;
use App\Http\Livewire\Cartcomponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Detailproduct;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Intentproduct;
use App\Http\Livewire\Paymentmethod;
use App\Http\Livewire\Productcatecomponent;
use App\Http\Livewire\Stripecomponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeComponent::class);
Route::get('/cart', Cartcomponent::class);
Route::get('/detail/product/{id}', Detailproduct::class)->name('product.detail');
Route::get('/payement/method', Paymentmethod::class)->name('payement.method');
Route::get('/forms/payment/stripe/resppnse', Stripecomponent::class)->name('stripe.payment');
Route::post('/payement' , [PaymentController::class , 'store'])->name('stripe.store');
Route::get('/home/pages/category/index/pages/view', CategoryComponent::class)->name('category.index');
Route::get('product/category/index/user/{id}', Cardproductcomponent::class, )->name('product.category.index');
Route::get('/intent/product' , Intentproduct::class)->name('intent.product');
Route::get('/annonces/bagages/', Annoncecomponent::class)->name('annonce.index');


Route::resources([
    'annnnonced' => AnnonceController::class,

]);

