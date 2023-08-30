<?php

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
    return view('auth.login');
});

Route::get('/dashboard', [App\Http\Controllers\admin\EmailInvitationController::class, 'index']);
Route::post('/invitation/send', [App\Http\Controllers\admin\EmailInvitationController::class, 'sendInvitation'])->name('send.invite');
Route::post('/verify/otp', [App\Http\Controllers\admin\EmailInvitationController::class, 'otpVerification'])->name('verify.otp');

Route::post('/user/register', [App\Http\Controllers\Auth\RegisterController::class, 'registerUser'])->name('register.user');


Auth::routes();

Route::post('/change-passwords', [App\Http\Controllers\admin\EmailInvitationController::class, 'updatePassword']);
Route::get('/change-password', [App\Http\Controllers\admin\EmailInvitationController::class, 'changePassword']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\admin\CategoryController::class, 'index']);
Route::get('/leaderboardlist', [App\Http\Controllers\admin\LeaderBoardController::class, 'index']);
Route::get('/Today', [App\Http\Controllers\admin\LeaderBoardController::class, 'search']);
Route::get('/WeekFilter', [App\Http\Controllers\admin\LeaderBoardController::class, 'weekFilter']);
Route::get('/MonthFilter', [App\Http\Controllers\admin\LeaderBoardController::class, 'MonthFilter']);


Route::get('/addprduct', [App\Http\Controllers\admin\ProductController::class, 'create']);
Route::post('/storePrduct', [App\Http\Controllers\admin\ProductController::class, 'store']);
Route::delete('/destroyProduct/{id}', [App\Http\Controllers\admin\ProductController::class, 'destroyProduct']);
Route::Resource('products', App\Http\Controllers\admin\ProductController::class);

// Route::resource('products', ProductController::class);
// Route::get('/prductlist', [App\Http\Controllers\admin\ProductController::class, 'show']);

Route::get('/addConfigration', [App\Http\Controllers\admin\ConfigrationController::class, 'create']);
Route::post('/storeConfigration', [App\Http\Controllers\admin\ConfigrationController::class, 'store']);
Route::get('/listConfigration', [App\Http\Controllers\admin\ConfigrationController::class, 'show']);
Route::delete('/destroyCategory/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'destroyCategory']);
Route::get('/dailyBouns', [App\Http\Controllers\admin\ConfigrationController::class, 'dailyBounsCreate']);
Route::post('/adddailyBouns', [App\Http\Controllers\admin\ConfigrationController::class, 'adddailyBouns']);
Route::get('/listDailyBouns', [App\Http\Controllers\admin\ConfigrationController::class, 'listDailyBouns']);
Route::Resource('configrations', App\Http\Controllers\admin\ConfigrationController::class);
Route::get('DailyBounsedit/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'DailyBounsedit']);
Route::put('DailyBounsupdate/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'DailyBounsupdate']);
Route::delete('/destroyDailyBouns/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'destroyDailyBouns']);
Route::get('showAdvertising/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'showAdvertising']);
Route::get('z/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'z']);
Route::get('complete/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'complete']);



Route::get('/xandy', [App\Http\Controllers\admin\ConfigrationController::class, 'xandy']);




Route::get('/Users', [App\Http\Controllers\admin\UserController::class, 'index']);
Route::get('/details/{id}', [App\Http\Controllers\admin\UserController::class, 'details']);
Route::delete('/destroyUser/{id}', [App\Http\Controllers\admin\UserController::class, 'destroyUser']);
Route::put('/userUpdate/{id}', [App\Http\Controllers\admin\UserController::class, 'userUpdate']);



Route::get('HammerBouns', [App\Http\Controllers\admin\HammerController::class, 'HammerBouns']);
Route::get('Hammere1/{id}', [App\Http\Controllers\admin\HammerController::class, 'Hammere1']);
Route::get('Hammere2/{id}', [App\Http\Controllers\admin\HammerController::class, 'Hammere2']);
Route::get('Hammere3/{id}', [App\Http\Controllers\admin\HammerController::class, 'Hammere3']);
Route::put('Hammerupdate/{id}', [App\Http\Controllers\admin\HammerController::class, 'Hammerupdate']);

Route::get('shop/{id}', [App\Http\Controllers\admin\ShopController::class, 'create']);
Route::put('Shopupdate/{id}', [App\Http\Controllers\admin\ShopController::class, 'Shopupdate']);





