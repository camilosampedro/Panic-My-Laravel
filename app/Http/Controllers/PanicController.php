<?php

namespace App\Http\Controllers;
use App\Panic;
use App\Person;
use App\City;
use App\Http\Requests\PanicRequest;

use Illuminate\Http\Request;

class PanicController extends Controller
{
  /**
   * @SWG\Get(
   *     path="/api/v1/cities",
   *     summary="List all the cities",
   *     description="List all the cities available in the database",
   *     operationId="listCities",
   *     produces={"application/json", "application/xml"},
   *     tags={"city"},
   *     @SWG\Response(
   *          response=200,
   *          description="Successful operation",
   *          @SWG\Schema(
   *              type="array",
   *              @SWG\Items(ref="#/definitions/City)
   *          )
   *     )
   * )
   * @return \Illuminate\Database\Eloquent\Collection|static[]
   */
  public static function index()
  {

      $panics = Panic::all();
      return $panics;
  }

  public static function store(PanicRequest $request)
  {
      $panic = new Panic($request->all());
      $person = $panic->person;
      if($person == null){
        return "Person not found";
      }
      $city = $person->city;
      if ($city->min_latitude < $panic->latitude and $city->max_latitude > $panic->latitude
          and $city->min_longitude < $panic->longitude and $city->max_longitude > $panic->longitude) {
        $panic->save();
        return $panic;
      } else {
        return "Panic not inside the city coordinates!";
      }

  }

  public static function show($panic)
  {
      return Panic::find($panic);
  }
}
