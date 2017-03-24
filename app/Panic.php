<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panic extends Model
{
    protected $fillable = ['person_id', 'latitude', 'longitude'];
}
