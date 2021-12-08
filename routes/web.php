<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PrivacyPolicyComponent;
use App\Http\Livewire\ReturnPolicyComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\SellComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\TermsConditionsComponent;
use App\Http\Livewire\ProfileUserComponent;
use App\Http\Livewire\ProfileSellerProductsComponent;
use App\Http\Livewire\ProfileBuyerProductsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\MailController;


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', HomeComponent::class)->name('index');;

Route::get('/category', CategoryComponent::class);

Route::get('/category/{category_id}',CategoryComponent::class)->name('category.name');

Route::get('/sell', SellComponent::class)->middleware('auth');

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/contact-us', ContactUsComponent::class);

Route::get('/about-us', AboutUsComponent::class);

Route::get('/privacy-policy', PrivacyPolicyComponent::class);

Route::get('/return-policy', ReturnPolicyComponent::class);

Route::get('/terms-conditions', TermsConditionsComponent::class);

Route::get('/profile', ProfileUserComponent::class)->name('profile');
Route::get('/profile/sell', ProfileSellerProductsComponent::class)->name('profile-sell');
Route::get('/profile/buy', ProfileBuyerProductsComponent::class)->name('profile-buy');

//Login Socialite

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);


// Dashboard igual para todos los tipos de usuario
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Dashboard particular para usuarios o clientes
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// Dashboard particular para administradores
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

//Enviar correo de Bienvenida
Route::get('/send-email-bienvenida',[MailController::class,'sendEmail']);
