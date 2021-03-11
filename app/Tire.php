<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tire extends Model
{
    protected $fillable = ['economic_number', 
                            'brand', 
                            'design', 
                            'size', 
                            'mounting_date', 
                            'tire_cost',
                            'tire_type', 
                            'otd', 
                            'tire_position', 
                            'initial_km', 
                            'current_km', 
                            'RTD_date',
                            'RTD_value', 
                            'travel_km', 
                            'consumed_mm', 
                            'km_per_mm', 
                            'mm_km_cost', 
                            'proyected_km',
                            'consumed_percentage', 
                            'tire_observations', 
                            'status_id', 
                            'vehicle_id'];
}
