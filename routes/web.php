<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LinkController::class, 'index'])->name('home');
Route::get('/create', [LinkController::class, 'create'])->name('links.create');
Route::post('/', [LinkController::class, 'generate'])->name('links.generate');
//Route::get('/{code}', [LinkController::class, 'redirect'])->name('redirect');
//Route::post('/links/generate', 'LinkController@generate')->name('generate');
//Route::get('/links/{code}', 'LinkController@redirect')->name('redirect');
//Route::group(['namespace' => 'App\Http\Controllers'], function (){
//   Route::get('/crt', 'CreateController' )->name('crt.create');
//});


Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);//->name('home');
