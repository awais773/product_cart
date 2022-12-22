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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\admin\CategoryController::class, 'index']);
Route::get('/prductlist', [App\Http\Controllers\admin\ProductController::class, 'index']);

Route::get('/addprduct', [App\Http\Controllers\admin\ProductController::class, 'create']);
Route::post('/storePrduct', [App\Http\Controllers\admin\ProductController::class, 'addproduct']);
Route::delete('/destroyProduct/{id}', [App\Http\Controllers\admin\ProductController::class, 'destroyProduct']);

// Route::get('/prductlist', [App\Http\Controllers\admin\ProductController::class, 'show']);

Route::get('/addcategory', [App\Http\Controllers\admin\CategoryController::class, 'create']);
Route::post('/storeCategory', [App\Http\Controllers\admin\CategoryController::class, 'store']);
Route::get('/listCategory', [App\Http\Controllers\admin\CategoryController::class, 'show']);
Route::delete('/destroyCategory/{id}', [App\Http\Controllers\admin\CategoryController::class, 'destroyCategory']);


Route::get('/subcategory', [App\Http\Controllers\admin\SubCategoryController::class, 'create']);
Route::post('/storeSubcategory', [App\Http\Controllers\admin\SubCategoryController::class, 'store']);
Route::get('/listsubCategory', [App\Http\Controllers\admin\SubCategoryController::class, 'index']);

Route::get('/adddistribution', [App\Http\Controllers\admin\DistributerController::class, 'index']);

Route::get('/adddistribution', [App\Http\Controllers\admin\DistributerController::class, 'create']);
Route::get('/distributionlist', [App\Http\Controllers\admin\DistributerController::class, 'show']);
Route::post('/storedistribution', [App\Http\Controllers\admin\DistributerController::class, 'store']);
Route::delete('destroyDistributer/{id}', [App\Http\Controllers\admin\DistributerController::class, 'destroyDistributer']);



Route::get('/suggestion', [App\Http\Controllers\admin\SuggestionController::class, 'index']);
Route::get('/Reported_problems', [App\Http\Controllers\admin\Reported_problemsController::class, 'index']);
Route::delete('/destroy/{id}', [App\Http\Controllers\admin\Reported_problemsController::class, 'destroy']);

Route::get('/Messages', [App\Http\Controllers\admin\MessagesController::class, 'index']);

Route::get('/AddStores', [App\Http\Controllers\admin\StoresController::class, 'create']);
Route::post('/storeAddStores', [App\Http\Controllers\admin\StoresController::class, 'store']);

Route::get('/StoresList', [App\Http\Controllers\admin\StoresController::class, 'index']);
Route::delete('/destroyStore/{id}', [App\Http\Controllers\admin\StoresController::class, 'destroyStore']);


Route::get('/Notifications', [App\Http\Controllers\admin\NotificationsController::class, 'store']);

Route::post('/storeAdvertisement', [App\Http\Controllers\admin\AdvertisementController::class, 'store']);
Route::get('/AddAdvertisement', [App\Http\Controllers\admin\AdvertisementController::class, 'index']);
Route::get('/AdvertisementList', [App\Http\Controllers\admin\AdvertisementController::class, 'show']);
Route::delete('/destroy/{id}', [App\Http\Controllers\admin\AdvertisementController::class, 'destroy']);


Route::get('/Others', [App\Http\Controllers\admin\OthersController::class, 'store']);
Route::get('/Users', [App\Http\Controllers\admin\UsersController::class, 'index']);


