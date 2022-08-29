<?php

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

Route::post('takmicenje', [TakmicenjeController::class, 'store']);
Route::delete('takmicenje/{takmicenje}', [TakmicenjeController::class, 'destroy']);
Route::get('takmicenje', [TakmicenjeController::class, 'index']);

Route::get('ucesnik', [UcesnikController::class, 'index']);
Route::get('ucesnik/{ucesnik}', [UcesnikController::class, 'show']);
Route::delete('ucesnik/{ucesnik}', [UcesnikController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
