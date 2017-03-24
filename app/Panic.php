<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panic extends Model
{
    protected $fillable = ['person_id', 'latitude', 'longitude'];

    public function person()
    {
        return $this->BelongsTo('App\Person');
    }
}
