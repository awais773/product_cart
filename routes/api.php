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


// Route::post('/forgotPassword', [App\Http\Controllers\api\AuthenticateController::class, 'forgotPassword']);
// Route::post('/updatePassword', [App\Http\Controllers\api\AuthenticateController::class, 'updatePassword']);

Route::get('/Users', [App\Http\Controllers\api\AuthenticateController::class, 'index']);
Route::get('/getUsers/{id}', [App\Http\Controllers\api\AuthenticateController::class, 'show']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->group(function () {
    Route::post('/update/profile', [App\Http\Controllers\api\AuthenticateController::class, 'updateProfile']);
    Route::apiResource('leaderBoards', App\Http\Controllers\api\LeaderBoardController::class);
    Route::get('/levelConfigration', [App\Http\Controllers\api\LeaderBoardController::class, 'levelConfigration']);
    Route::get('/dailyMissions', [App\Http\Controllers\api\LeaderBoardController::class, 'dailyMissions']);
    



});






