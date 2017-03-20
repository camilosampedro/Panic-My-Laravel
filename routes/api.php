<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/v1/people/{id?}', ['middleware' => 'auth.basic', function($id = null) {
  if($id == null) {
    $people = App\Person::all(array('id', 'name', 'email', 'city_id'));
  } else {
    $people = App\Person::find($id, array('id', 'name', 'email', 'city_id'));
  }
  return Response::json(array(
    'error' => false,
    'people' => $people,
    'status_code' => 200
  ));
}]);

Route::get('/api/v1/cities/{id?}', ['middleware' => 'auth.basic', function($id = null) {
  if($id == null) {
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
