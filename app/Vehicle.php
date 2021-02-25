<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['vehicle_brand',
                            'vehicle_model',
                            'vehicle_type',
                            'number_tires'];
}
