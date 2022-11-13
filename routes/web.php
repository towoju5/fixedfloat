<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PayoutsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'user', 'as' => 'users.', 'middleware' => ['auth', 'referral']], function(){
    // user dashboard
    Route::get('dashboard',                         [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile',                           [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/{id}/save',                [ProfileController::class, 'update'])->name('profile.save');

    Route::group(['as' => 'trans.'], function(){
        Route::get('payouts',                       [PayoutsController::class, 'list'])->name('payouts');
        Route::post('payouts/request',              [PayoutsController::class, 'store'])->name('payouts.request');
        Route::get('affiliate',                     [AffiliateController::class, 'affiliate'])->name('affiliate');
        Route::get('get/affiliate',                 [AffiliateController::class, 'list'])->name('affiliate.get');
        Route::get('orders',                        [TransactionController::class, 'index'])->name('index');
    });

    Route::get('referral-list',                     [HistoryController::class, 'referral_list'])->name('referral.list');
    
    Route::group(['prefix' => 'order'], function(){
        Route::any('create', [OrderController::class, 'createOrder'])->name('create');
        Route::any('lists',  [OrderController::class, 'getOrder'])->name('get');
        Route::any('price',  [OrderController::class, 'getPrice'])->name('price');
    });

});

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', function () {
    // session_destroy();
    Auth::logout();
    return redirect(route('home'))->with('success', "You've been successfully logged out");
})->name('logout');


/**
 * Admin Routes starts here
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function(){
    // user dashboard
    Route::get('/',                         [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile',                   [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/{id}/save',        [ProfileController::class, 'update'])->name('profile.save');

    Route::resource('orders',   OrderController::class);
    Route::resource('payouts',  PayoutsController::class);
    Route::resource('users',    UserController::class);
    // Route::get('affiliate',                     [AffiliateController::class, 'affiliate'])->name('affiliate');
    // Route::get('get/affiliate',                 [AffiliateController::class, 'list'])->name('affiliate.get');
    // Route::get('orders',                        [TransactionController::class, 'index'])->name('index');

    // Route::get('referral-list',                     [HistoryController::class, 'referral_list'])->name('referral.list');
});