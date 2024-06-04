<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;
use App\Http\Controllers\imgController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecDocController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\ExaminationsController;

/*
|--------------------------------------------------------------------------
| API Routes made by bdiwy ..
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

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

Route::get('/', [Controller::class, 'health']);

Route::get('/git-pull', [CommandController::class, 'gitPull']);
Route::get('/migrate', [CommandController::class, 'migrate']);
Route::get('/clear-cache', [CommandController::class, 'clearCache']);

Route::prefix('recdoc')->group(function () {
    Route::get('/{id?}', [RecDocController::class, 'rec_doc']);
    // Route::get('/{id}', [RecDocController::class, 'SpaceficUser']);
});

 
Route::post('/patient',[imgController::class,'patient'])->middleware('auth:api');
Route::get('/download_photo',[imgController::class,'download_photo']);
