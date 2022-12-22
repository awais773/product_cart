<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register',[App\Http\Controllers\api\AuthController::class,'register']);
Route::post('login',[App\Http\Controllers\api\AuthController::class,'login']);
// Route::post('/signup', [App\Http\Controllers\api\AuthenticateController::class, 'signup']);
// Route::post('/login', [App\Http\Controllers\api\AuthenticateController::class, 'login']);

Route::post('/forgotPassword', [App\Http\Controllers\api\AuthenticateController::class, 'forgotPassword']);
Route::post('/updatePassword', [App\Http\Controllers\api\AuthenticateController::class, 'updatePassword']);

Route::get('/getUsers', [App\Http\Controllers\api\AuthenticateController::class, 'index']);
Route::get('/getUsers/{id}', [App\Http\Controllers\api\AuthenticateController::class, 'show']);

Route::get('/getStore', [App\Http\Controllers\api\ProductController::class, 'getStore']);
Route::post('storeLocation', [App\Http\Controllers\api\ProductController::class, 'storeLocation']);

Route::post('/storeImage', [App\Http\Controllers\api\ProductController::class, 'storeimage']);
Route::post('/complainStore', [App\Http\Controllers\api\ProductController::class, 'complainStore']);
Route::get('/barCode', [App\Http\Controllers\api\ProductController::class, 'barcode']);

Route::apiResource('advertisement', App\Http\Controllers\api\AdvertisementController::class);
Route::apiResource('contact', App\Http\Controllers\api\ContactController ::class);
Route::apiResource('products', App\Http\Controllers\api\ProductController ::class);
Route::apiResource('category', App\Http\Controllers\api\CategoryController ::class);
Route::apiResource('distributer', App\Http\Controllers\api\DistributerController ::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->group(function () {
    Route::post('/update/profile', [App\Http\Controllers\api\AuthenticateController::class, 'updateProfile']);
    Route::post('/otp/verify', [App\Http\Controllers\api\AuthenticateController::class, 'otpVerification']);
    Route::apiResource('faviourt', App\Http\Controllers\api\FaviourtController ::class);




});






