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
admin

*/

Route::view('/admin', 'admin.index')->name('admin.index');
Route::view('/login', 'admin.login')->name('admin.login');
Route::view('/profile', 'admin.profile')->name('admin.profile');
Route::view('/settings', 'admin.settings')->name('admin.settings');

//users

Route::view('/users/index', 'admin.pages.users.index')->name('admin.users.index');
Route::view('/users/create', 'admin.pages.users.create')->name('admin.users.create');
Route::view('/users/edit', 'admin.pages.users.edit')->name('admin.users.edit');
Route::view('/users/trash', 'admin.pages.users.trash')->name('admin.users.trash');

//admin

Route::view('/admins/index', 'admin.pages.admins.index')->name('admin.admins.index');
Route::view('/admins/create', 'admin.pages.admins.create')->name('admin.admins.create');
Route::view('/admins/edit', 'admin.pages.admins.edit')->name('admin.admins.edit');
Route::view('/admins/trash', 'admin.pages.admins.trash')->name('admin.admins.trash');

//branches

Route::view('/branches/index', 'admin.pages.branches.index')->name('admin.branches.index');
Route::view('/branches/create', 'admin.pages.branchess.create')->name('admin.branches.create');
Route::view('/branches/edit', 'admin.pages.branches.edit')->name('admin.branches.edit');
Route::view('/branches/trash', 'admin.pages.branches.trash')->name('admin.branches.trash');

//categories

Route::view('/categories/index', 'admin.pages.categories.index')->name('admin.categories.index');
Route::view('/categories/create', 'admin.pages.categoriess.create')->name('admin.categories.create');
Route::view('/categories/edit', 'admin.pages.categories.edit')->name('admin.categories.edit');
Route::view('/categories/trash', 'admin.pages.categories.trash')->name('admin.categories.trash');

//contacts

Route::view('/contacts/index', 'admin.pages.contacts.index')->name('admin.contacts.index');
Route::view('/contacts/create', 'admin.pages.contacts.create')->name('admin.contacts.create');
Route::view('/contacts/edit', 'admin.pages.contacts.edit')->name('admin.contacts.edit');
Route::view('/contacts/trash', 'admin.pages.contacts.trash')->name('admin.contacts.trash');

//deliveries

Route::view('/deliveries/index', 'admin.pages.deliveries.index')->name('admin.deliveries.index');
Route::view('/deliveries/create', 'admin.pages.deliveries.create')->name('admin.deliveries.create');
Route::view('/deliveries/edit', 'admin.pages.deliveries.edit')->name('admin.deliveries.edit');
Route::view('/deliveries/trash', 'admin.pages.deliveries.trash')->name('admin.deliveries.trash');


//items

Route::view('/items/index', 'admin.pages.items.index')->name('admin.items.index');
Route::view('/items/create', 'admin.pages.items.create')->name('admin.items.create');
Route::view('/items/edit', 'admin.pages.items.edit')->name('admin.items.edit');
Route::view('/items/trash', 'admin.pages.items.trash')->name('admin.items.trash');


//orders

Route::view('/orders/index', 'admin.pages.orders.index')->name('admin.orders.index');
Route::view('/orders/create', 'admin.pages.orders.create')->name('admin.orders.create');
Route::view('/orders/edit', 'admin.pages.orderss.edit')->name('admin.orders.edit');
Route::view('/orders/trash', 'admin.pages.orders.trash')->name('admin.orders.trash');

// newoffers


Route::view('/newoffers/index', 'admin.pages.newoffers.index')->name('admin.newoffers.index');
Route::view('/newoffers/create', 'admin.pages.newoffers.create')->name('admin.newoffers.create');
Route::view('/newoffers/edit', 'admin.pages.newoffers.edit')->name('admin.newoffers.edit');
Route::view('/newoffers/trash', 'admin.pages.newoffers.trash')->name('admin.newoffers.trash');