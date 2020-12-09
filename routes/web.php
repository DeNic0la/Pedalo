<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::namespace('App\Http\Controllers')->group(function () {
    Auth::routes();
});

Auth::routes();

Route::get('/home', function (){
    redirect('/');
});
Route::get('/add', 'FoodController@Add');
Route::post('/add/item', 'FoodController@AddItem');
Route::get('/generate', 'FoodController@ShowFood');
