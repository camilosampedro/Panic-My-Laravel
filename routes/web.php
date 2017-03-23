<?php

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

Route::get('/api/v1/people/{id?}', function ($id = null) {
    if ($id == null) {
        $people = App\Person::all(array('id', 'name', 'email', 'city_id'));
    } else {
        $people = App\Person::find($id, array('id', 'name', 'email', 'city_id'));
    }
    return Response::json(array(
    'error' => false,
    'people' => $people,
    'status_code' => 200
  ));
});

Route::get('/api/v1/cities/{id?}', ['middleware' => 'auth.basic', function ($id = null) {
    if ($id == null) {
        $cities = App\City::all(array('id', 'name'));
    } else {
        $cities = App\City::find($id, array('id', 'name'));
    }
    return Response::json(array(
    'error' => false,
    'city' => $cities,
    'status_code' => 200
  ));
}]);
