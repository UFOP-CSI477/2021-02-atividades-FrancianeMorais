<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->intended('/adoptions');
});

Route::prefix('adoptions')
    ->controller(App\Http\Controllers\Web\AdoptionController::class)
    ->group(function() {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/', 'store');
        Route::get('/delete/{id}', 'destroy');
    });

Route::prefix('donations')
    ->controller(App\Http\Controllers\Web\DonationController::class)
    ->group(function() {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/', 'store');
    });

Route::prefix('users')
    ->controller(App\Http\Controllers\Web\UserController::class)
    ->group(function() {
        Route::post('/', 'store');
    });

Route::get('login', function() {
    return view('login');
})->name('login');

Route::get('logout', function(Request $request) {
    $request->session()->flush();
    return redirect()->intended('/login');
})->name('logout');

Route::get('register', function() {
    return view('register');
});

Route::post('auth', [App\Http\Controllers\Web\UserController::class, 'auth']);
