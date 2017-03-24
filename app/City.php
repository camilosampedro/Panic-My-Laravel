<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"name", "min_latitude", "max_latitude", "min_longitude", "max_longitude"}, type="object", @SWG\Xml(name="City"))
 * @SWG\Property(property="name", type="string")
 * @SWG\Property(property="min_latitude", type="number", format="double")
 * @SWG\Property(property="max_latitude", type="number", format="double")
 * @SWG\Property(property="min_longitude", type="number", format="double")
 * @SWG\Property(property="max_longitude", type="number", format="double")
 * Class City
 * @package App
 */
class City extends Model
{
    protected $fillable = ['name', 'min_latitude', 'max_latitude', 'min_longitude', 'max_longitude'];

    public function people()
    {
        return $this->hasMany('App\Person');
    }
}
