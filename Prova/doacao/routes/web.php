<?php

use App\Http\Controllers\ColetaController;
use App\Http\Controllers\EntidadeController;
use App\Http\Controllers\ItemController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
/*Route::get('/entidades', function () {
    
    $entidades= Entidade::all();
    return view('lista', ['dados'=> $entidades]);
})->name('entidades');*/

/*Route::get('/items', function () {
    return Item::all();
});*/
/*Route::get('/coletas', function () {
    return Coleta::all();
});*/

Route::get('/geral', function () {
    return view('geral');
})->name('geral');

Route::get('/adm', function () {
    return view('adm');
})->name('adm');

Route::get('/admini', function () {
    return view('admini');
})->name('admini')->middleware('auth');
/*Route::get('/items', function () {
    return view('items.index');
})->name('items');*/

Route::resource('\entidades', ItemController::class);
Route::resource('\items', EntidadeController::class);
Route::resource('\coletas', ColetaController::class);
Route::get('/entidades', 'App\Http\Controllers\EntidadeController@index')->name('entidades');
Route::get('/items', 'App\Http\Controllers\ItemController@index')->name('items');
Route::get('/coletas', 'App\Http\Controllers\ColetaController@index')->name('coletas');
Route::get('/entidades.create', 'App\Http\Controllers\EntidadeController@create')->name('entidades.create');
Route::post('/entidades.store', 'App\Http\Controllers\EntidadeController@store')->name('entidades.store');
Route::get('/entidades.show', 'App\Http\Controllers\EntidadeController@show')->name('entidades.show');
Route::put('/entidades.edit', 'App\Http\Controllers\EntidadeController@update')->name('entidades.edit');
Route::delete('/entidades.edit', 'App\Http\Controllers\EntidadeController@destroy')->name('entidades.edit');
Route::get('/items.create', 'App\Http\Controllers\ItemController@create')->name('items.create');
Route::post('/items.store', 'App\Http\Controllers\ItemController@store')->name('items.store');
Route::get('/items.show', 'App\Http\Controllers\ItemController@show')->name('items.show');
Route::put('/items.edit', 'App\Http\Controllers\ItemController@update')->name('items.edit');
Route::delete('/items.edit', 'App\Http\Controllers\ItemController@destroy')->name('items.edit');
Route::get('/coletas.create', 'App\Http\Controllers\ColetaController@create')->name('coletas.create');
Route::post('/coletas.store', 'App\Http\Controllers\ColetaController@store')->name('coletas.store');
Route::get('/coletas.edit', 'App\Http\Controllers\ColetaController@update')->name('coletas.edit');
Route::delete('/coletas.destroy', 'App\Http\Controllers\ColetaController@destroy')->name('coletas.destroy');
Route::get('/coletas.show', 'App\Http\Controllers\ColetaController@show')->name('coletas.show');

Route::get('/coletas.relatorioent','App\Http\Controllers\ColetaController@relatorioentidade')->name('coletas.relatorioent');
Route::get('/coletas.relatorioitem','App\Http\Controllers\ColetaController@relatorioItem')->name('coletas.relatorioitem');





require __DIR__.'/auth.php';
