<?php

use App\Http\Controllers\ProductController;
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
// Route::get('/prductlist', [App\Http\Controllers\admin\ProductController::class, 'show']);

Route::get('/addProduct', [App\Http\Controllers\admin\ConfigrationController::class, 'create']);
Route::post('/storeProduct', [App\Http\Controllers\admin\ConfigrationController::class, 'store']);
Route::get('/product', [App\Http\Controllers\admin\ConfigrationController::class, 'show']);
Route::delete('/destroyCategory/{id}', [App\Http\Controllers\admin\ConfigrationController::class, 'destroyCategory']);
Route::Resource('product', App\Http\Controllers\admin\ConfigrationController::class);

Route::post('/storePayments', [App\Http\Controllers\admin\ConfigrationController::class, 'createReepayPayment']);






Route::get('/Users', [App\Http\Controllers\admin\UserController::class, 'index']);
Route::get('/details/{id}', [App\Http\Controllers\admin\UserController::class, 'details']);
Route::delete('/destroyUser/{id}', [App\Http\Controllers\admin\UserController::class, 'destroyUser']);
Route::put('/userUpdate/{id}', [App\Http\Controllers\admin\UserController::class, 'userUpdate']);

// New code
// Route::get('', [ProductController::class, 'index']);
Route::get('index', [ProductController::class, "index"]);
