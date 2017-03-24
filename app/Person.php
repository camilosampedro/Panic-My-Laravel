<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
