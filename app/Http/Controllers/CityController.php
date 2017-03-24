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
     *              @SWG\Items(ref="#/definitions/City)
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

    public static function store(CityRequest $request)
    {
        $city = new City($request->all());
        $city->save();
        return $city;
    }

    public static function show($city)
    {
        return City::find($city);
    }
}
