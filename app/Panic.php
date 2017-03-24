<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"person_id", "latitude", "longitude"}, type="object", @SWG\Xml(name="Panic"))
 * @SWG\Property(property="person_id", type="integer", format="int64")
 * @SWG\Property(property="latitude", type="number", format="double")
 * @SWG\Property(property="longitude", type="number", format="double")
 */
class Panic extends Model
{
    protected $fillable = ['person_id', 'latitude', 'longitude'];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
