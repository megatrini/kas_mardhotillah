<?php

use App\Http\Controllers\API\KasController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('kas', \App\Http\Controllers\API\KasController::class);

// Route::get('kas',[KasController::class, 'index']);
// Route::post('kas/store',[KasController::class, 'store']);
// Route::get('kas/show/{id}',[KasController::class, 'show']);
// Route::post('kas/update/{id}',[KasController::class, 'update']);
// Route::get('kas/destroy/{id}',[KasController::class, 'destroy']);
