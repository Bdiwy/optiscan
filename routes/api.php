<?php

use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\ExaminationsController;
use App\Http\Controllers\RecDocController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::prefix('users')->group(function () {
    Route::get('/{id?}', [UserController::class, 'users']);
    // Route::get('/{id}', [UserController::class, 'SpaceficUser']);
});


Route::prefix('diseases')->group(function () {
    Route::get('/{id?}', [DiseasesController::class, 'diseases']);
    //Route::get('/{id}', [DiseasesController::class, 'SpaceficDiseases']);
});


Route::prefix('recdoc')->group(function () {
    Route::get('/{id?}', [RecDocController::class, 'rec_doc']);
    // Route::get('/{id}', [RecDocController::class, 'SpaceficUser']);
});


Route::prefix('examinations')->group(function () {
    Route::get('/{id?}', [ExaminationsController::class, 'examinations']);
    //Route::get('/{id}', [DiseasesController::class, 'SpaceficDiseases']);
});

