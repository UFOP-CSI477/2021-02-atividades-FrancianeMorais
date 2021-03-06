<?php

use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('users')
    ->controller(UserController::class)
    ->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    }
);

Route::prefix('donations')
    ->controller(DonationController::class)
    ->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::delete('/{id}', 'destroy');
    }
);

Route::prefix('adoptions')
    ->controller(AdoptionController::class)
    ->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    }
);
