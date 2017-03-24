<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\CityController;
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
Route::get('/prueba/{n?}', function($n = null) {
  return $n;
});

Route::resource('/api/v1/cities', 'CityController');
Route::resource('/api/v1/people', 'PersonController');
