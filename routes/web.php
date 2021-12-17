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

Route::get('/pizzas',$dir.'@index') ; 

Route::get('/pizzas/create',$dir.'@create') ;

Route::post('/pizzas',$dir.'@store') ;

Route::get('/pizzas/{id}',$dir.'@show') ; 

Route::delete('/pizzas/{id}',$dir.'@destroy') ;

