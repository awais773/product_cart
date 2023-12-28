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




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->group(function () {
    Route::post('/update/profile', [App\Http\Controllers\api\AuthenticateController::class, 'updateProfile']);
    Route::apiResource('leaderBoards', App\Http\Controllers\api\LeaderBoardController::class);
    Route::get('/levelConfigration', [App\Http\Controllers\api\LeaderBoardController::class, 'levelConfigration']);
    Route::get('/dailyMissions', [App\Http\Controllers\api\LeaderBoardController::class, 'dailyMissions']);


    //////
    Route::get('/DailyApiBonusGet', [App\Http\Controllers\api\LeaderBoardController::class, 'DailyApiBonusGet']);
    Route::post('/DailyApiBonus', [App\Http\Controllers\api\LeaderBoardController::class, 'DailyApiBonusCreate']);
    Route::get('/DailyApiBonusGet/{id}', [App\Http\Controllers\api\LeaderBoardController::class, 'DailyApiBonusShow']);
    

        //////
        Route::get('/PurchasingGet', [App\Http\Controllers\api\LeaderBoardController::class, 'PurchasingGet']);
        Route::post('/PurchasingCreate', [App\Http\Controllers\api\LeaderBoardController::class, 'PurchasingCreate']);
        Route::get('/PurchasingGet/{id}', [App\Http\Controllers\api\LeaderBoardController::class, 'PurchasingShow']);

});






