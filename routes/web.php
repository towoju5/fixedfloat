<?php

use adman9000\binance\BinanceAPIFacade;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\BinanceController;
use App\Http\Controllers\KucoinController;
use App\Http\Controllers\PayoutsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    // $bin = app('binance');
    // $bin = $bin->getRecentTrades();
    // return $bin;
    return view('welcome');
});


Route::get('s',     [KucoinController::class, 'index']);


#---------------------------- Create Binance wallet for users -------------------------
Route::get('create-sub-account',      [BinanceController::class, 'sub_account']);
#---------------------------- Create Binance wallet for users -------------------------

Route::get('balance',   [BinanceController::class, 'balance']);
Route::get('check',     [BinanceController::class, 'checkticker']);
Route::get('ticker',    [BinanceController::class, 'ticker']);
Route::get('trade',     [BinanceController::class, 'openTrade']);

Auth::routes();


Route::group(['prefix' => 'user', 'as' => 'users.', 'middleware' => ['auth']], function(){
    // user dashboard
    Route::get('dashboard',                         [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile',                           [ProfileController::class, 'index'])->name('profile');

    Route::group(['as' => 'trans.', 'middleware' => ['auth']], function(){
        Route::get('payouts',                       [PayoutsController::class, 'index'])->name('payouts');
        Route::get('affiliate',                     [AffiliateController::class, 'affiliate'])->name('affiliate');
        Route::get('index',                         [TransactionController::class, 'index'])->name('index');
    });

    Route::get('referral-list',                     [HistoryController::class, 'referral_list'])->name('referral.list');
});

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', function () {
    // session_destroy();
    auth()->logout();
    return redirect(route('home'))->with('success', "You've been successfully logged out");
})->name('logout');