<?php

namespace App\Http\Controllers;

use App\Tire;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TireController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth'); //solo puede acceder a las funciones si esta autenticado (si está loggueado)

    }
    public function index()
    {
        $tires = Tire::paginate();
        return view('tire.index', compact('tires'));
    }

    public function create()
    {
        return view('tire.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status_name' => 'required',
        ]);
        $tire = new Tire();
        $tire->economic_number = $request->economic_number;
        $tire->brand = $request->brand;
        $tire->design = $request->design;
        $tire->size = $request->size;
        $tire->mounting_date = $request->mounting_date;
        $tire->tire_cost = $request->tire_cost;
        $tire->tire_type = $request->tire_type;
        $tire->otd = $request->otd;
        $tire->tire_position = $request->tire_position;
        $tire->initial_km = $request->initial_km;
        $tire->current_km = $request->current_km;
        $tire->RTD_date = $request->RTD_date;
        $tire->RTD_value = $request->RTD_value;
        $tire->travel_km = $request->travel_km;
        $tire->consumed_mm = $request->consumed_mm;
        $tire->km_per_mm = $request->km_per_mm;
        $tire->mm_km_cost = $request->mm_km_cost;
        $tire->proyected_km = $request->proyected_km;
        $tire->consumed_percentage = $request->cosumed_percentage;
        $tire->tire_observations = $request->tire_observations;
        $tire->status_id = $request->status_id; //(Foráneo) Cambiar por el correcto
        $tire->vehicle_id = $request->vehicle_id; //(Foráneo)Cambiar por el correcto

    }

    public function edit($id)
    {
        return view('tire.edit', compact('tire'));

    }

    public function show($id)
    {
        return view('tire.show', compact('tire'));
    }

}
