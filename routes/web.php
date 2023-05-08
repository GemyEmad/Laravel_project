<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Menucontroller;
use App\Http\Controllers\Offercontroller;
use App\Http\Controllers\Staffcontroller;
use App\Http\Controllers\Gallerycontroller;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Eventcontroller;

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

/*

users

*/

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('/index', 'front.index');
// Route::view('/login', 'front.pages.login');
// Route::view('/register', 'front.pages.register');
// Route::view('/cart', 'front.pages.cart');
// Route::view('/sample-inner-page.blade', 'front.pages.sample-inner-page.blade');

Route::get('/index' , [HomeController::class , 'index'])->name('front.home');
// Route::get('/About' , [AboutController::class , 'index'])->name('front.about');
// Route::get('/Menu' , [MenuController::class , 'index'])->name('front.home');
// Route::get('/Offer' , [OfferController::class , 'index'])->name('front.home');
// Route::get('/Staff' , [StaffController::class , 'index'])->name('front.home');
// Route::get('/Gallery' , [GalleryController::class , 'index'])->name('front.home');
// Route::get('/Event' , [EventController::class , 'index'])->name('front.home');
// Route::get('/Contact' , [ContactController::class , 'index'])->name('front.home');

Route::post('/contact/store' , [ContactController::class , 'store'])->name('front.contact.store');