<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use App\Person;

class PersonController extends Controller
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

      $people = Person::all();
      return $people;
  }

  public static function store(PersonRequest $request)
  {
      $person = new Person($request->all());
      $person->save();
      return $person;
  }

  public static function show($person)
  {
      return Person::find($person);
  }
}
