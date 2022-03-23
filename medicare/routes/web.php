<?php

use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercon;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\vendorcontroller;
use App\Http\Controllers\orderscontroller;
use App\Http\Controllers\listscontroller;
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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    return view('welcome');
});
/*route::get('/view',function(){
    return view('inventory views.dashboard');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/main', [usercon::class,'main'])->name('main');

Route::get('/profile', [usercon::class,'profile']);

Route::get('/searchBar', [usercon::class,'searchBar']);

Route::get('/vendor', [usercon::class,'vendor'])->name('vendor');

// Route::group(['middleware' => 'auth'], function() {
//     Route::group(['middleware' => 'role:customer', 'prefix' => 'customer', 'as' => 'client.'], function() {
//         Route::resource('/client', \App\Http\Controllers\customer\customerController::class);
//     });
//    Route::group(['middleware' => 'role:vendor', 'prefix' => 'vendor', 'as' => 'store.'], function() {
//        Route::resource('/pharmacy', \App\Http\Controllers\vendor\vendorController::class);
//     });
// //     Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
// //         Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
// //     });
// });


route::resource("products",vendorcontroller::class);
route::get("views",[orderscontroller::class,"orders"]);

