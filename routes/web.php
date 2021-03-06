<?php

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

$dir = 'App\Http\Controllers\PizzaController' ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas',$dir.'@index')->name('pizzas.index')->middleware('auth') ; 

Route::get('/orders/pizzas/create',$dir.'@create')->name('pizzas.create') ;

Route::post('/pizzas',$dir.'@store')->name('pizzas.store') ;

Route::get('/pizzas/{id}',$dir.'@show')->name('pizzas.show')->middleware('auth') ;  ; 

Route::delete('/pizzas/{id}',$dir.'@destroy')->name('pizzas.destroy')->middleware('auth') ;  ;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
