<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = ['incident_name',
                            'incident_date',
                            'descripcion',
                            'tire_id']; 
}
