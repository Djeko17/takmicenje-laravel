<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\TakmicenjeController;
use App\Http\Controllers\api\UcesnikController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('takmicenje', [TakmicenjeController::class, 'index']);
Route::get('ucesnik', [UcesnikController::class, 'index']);
Route::get('ucesnik/{ucesnik}', [UcesnikController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('takmicenje', [TakmicenjeController::class, 'store']);
    Route::delete('takmicenje/{takmicenje}', [TakmicenjeController::class, 'destroy']);
    Route::delete('ucesnik/{ucesnik}', [UcesnikController::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
