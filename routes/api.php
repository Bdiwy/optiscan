<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;
use App\Http\Controllers\imgController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecDocController;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\ExaminationsController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
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

Route::post('/patient',[imgController::class,'patient'])->middleware('auth:api');
Route::get('/download_photo/{user?}',[imgController::class,'download_photo']);


Route::get('/predict', [AIController::class,'predict']);
