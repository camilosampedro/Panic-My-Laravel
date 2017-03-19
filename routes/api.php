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

Route::get('/api/personas/{id?}', ['middleware' => 'auth.basic', function($id = null) {
  if($id == null) {
    $people = App\Person::all(array('id', 'email', 'city'));
  } else {
    $people = App\Person::find($id, array('id', 'email', 'city'));
  }
  return Response::json(array(
    'error' => false,
    'people' => $people,
    'status_code' => 200
  ));
}]);
