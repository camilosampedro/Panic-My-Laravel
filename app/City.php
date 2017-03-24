<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"name"}, type="object", @SWG\Xml(name="City"))
 *
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
