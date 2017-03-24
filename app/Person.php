<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"name", "email", "city_id"}, type="object", @SWG\Xml(name="Person"))
 * @SWG\Property(property="name", type="string")
 * @SWG\Property(property="email", type="string")
 * @SWG\Property(property="city_id", type="integer", format="int64")
 */
class Person extends Model
{
    protected $fillable = ['name', 'email', 'city_id'];

    public function city()
    {
        return $this->BelongsTo('App\City');
    }

    public function panic()
    {
        return $this->HasMany('App\Panic');
    }
}
