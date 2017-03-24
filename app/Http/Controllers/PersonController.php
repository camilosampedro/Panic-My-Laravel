<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use App\Person;

class PersonController extends Controller
{
  /**
   * @SWG\Get(
   *     path="/api/v1/people",
   *     summary="List all the existing people",
   *     description="List all the people stored in the database",
   *     operationId="listPeople",
   *     produces={"application/json", "application/xml"},
   *     tags={"person"},
   *     @SWG\Response(
   *          response=200,
   *          description="Successful operation",
   *          @SWG\Schema(
   *              type="array",
   *              @SWG\Items(ref="#/definitions/Person")
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

  /**
   * @SWG\Post(
   *     path="/api/v1/people",
   *     summary="Create a new person",
   *     description="Create a new person into the database",
   *     operationId="createPerson",
   *     consumes={"application/json", "application/xml"},
   *     produces={"application/json", "application/xml"},
   *     tags={"person"},
   *     @SWG\Parameter(
   *          name="Person",
   *          in="body",
   *          description="Person to be added to the database",
   *          required=true,
   *          @SWG\Schema(ref="#/definitions/Person")
   *     ),
   *     @SWG\Response(
   *          response=200,
   *          description="Successful operation",
   *          @SWG\Schema(@SWG\Items(ref="#/definitions/Person"))
   *     )
   * )
   * @return \Illuminate\Database\Eloquent\Collection|static[]
   */
    public static function store(PersonRequest $request)
    {
        $person = new Person($request->all());
        $person->save();
        return $person;
    }

  /**
   * @SWG\Get(
   *     path="/api/v1/people/{id}",
   *     summary="Find a person",
   *     description="Looks for the person with that ID into the database",
   *     operationId="findPerson",
   *     produces={"application/json", "application/xml"},
   *     tags={"person"},
   *     @SWG\Parameter(
   *          name="id",
   *          in="path",
   *          description="Id of the person",
   *          required=true,
   *          type="string"
   *     ),
   *     @SWG\Response(
   *          response=200,
   *          description="Successful operation",
   *          @SWG\Schema(@SWG\Items(ref="#/definitions/Person"))
   *     )
   * )
   * @return \Illuminate\Database\Eloquent\Collection|static[]
   */
  public static function show($person)
  {
      return Person::find($person);
  }
}
