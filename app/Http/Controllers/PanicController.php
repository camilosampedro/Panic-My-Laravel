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
   *     path="/api/v1/panic",
   *     summary="List all the existing panic",
   *     description="List all the panics stored in the database",
   *     operationId="listPanics",
   *     produces={"application/json", "application/xml"},
   *     tags={"panic"},
   *     @SWG\Response(
   *          response=200,
   *          description="Successful operation",
   *          @SWG\Schema(
   *              type="array",
   *              @SWG\Items(ref="#/definitions/Panic")
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

  /**
   * @SWG\Post(
   *     path="/api/v1/panic",
   *     summary="Create a new panic",
   *     description="Create a new panic into the database",
   *     operationId="createPanic",
   *     consumes={"application/json", "application/xml"},
   *     produces={"application/json", "application/xml"},
   *     tags={"panic"},
   *     @SWG\Parameter(
   *          name="panic",
   *          in="body",
   *          description="Panic to be added to the database",
   *          required=true,
   *          @SWG\Schema(ref="#/definitions/Panic")
   *     ),
   *     @SWG\Response(
   *          response=200,
   *          description="Successful operation",
   *          @SWG\Schema(@SWG\Items(ref="#/definitions/Panic"))
   *     )
   * )
   * @return \Illuminate\Database\Eloquent\Collection|static[]
   */
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

  /**
   * @SWG\Get(
   *     path="/api/v1/panic/{id}",
   *     summary="Find a panic",
   *     description="Looks for the panic with that ID into the database",
   *     operationId="findPanic",
   *     produces={"application/json", "application/xml"},
   *     tags={"panic"},
   *     @SWG\Parameter(
   *          name="id",
   *          in="path",
   *          description="Id of the panic",
   *          required=true,
   *          type="string"
   *     ),
   *     @SWG\Response(
   *          response=200,
   *          description="Successful operation",
   *          @SWG\Schema(@SWG\Items(ref="#/definitions/Panic"))
   *     )
   * )
   * @return \Illuminate\Database\Eloquent\Collection|static[]
   */
  public static function show($panic)
  {
      return Panic::find($panic);
  }
}
