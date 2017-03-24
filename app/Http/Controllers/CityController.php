<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\CityRequest;
use Request;

class CityController extends Controller
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
     *              @SWG\Items(ref="#/definitions/City")
     *          )
     *     )
     * )
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function index()
    {
        $cities = City::all();
        return $cities;
    }

    /**
     * @SWG\Post(
     *     path="/api/v1/cities",
     *     summary="Create a new city",
     *     description="Create a new city into the database",
     *     operationId="createCity",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/json", "application/xml"},
     *     tags={"city"},
     *     @SWG\Parameter(
     *          name="city",
     *          in="body",
     *          description="City to be added to the database",
     *          required=true,
     *          @SWG\Schema(ref="#/definitions/City")
     *     ),
     *     @SWG\Response(
     *          response=200,
     *          description="Successful operation",
     *          @SWG\Schema(@SWG\Items(ref="#/definitions/City"))
     *     )
     * )
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function store(CityRequest $request)
    {
        $city = new City($request->all());
        $city->save();
        return $city;
    }

    /**
     * @SWG\Get(
     *     path="/api/v1/cities/{id}",
     *     summary="Find a city",
     *     description="Looks for the city with that ID into the database",
     *     operationId="findCity",
     *     produces={"application/json", "application/xml"},
     *     tags={"city"},
     *     @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id of the city",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Response(
     *          response=200,
     *          description="Successful operation",
     *          @SWG\Schema(@SWG\Items(ref="#/definitions/City"))
     *     )
     * )
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function show($city)
    {
        return City::find($city);
    }
}
