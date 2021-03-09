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

    public function edit($id)
    {
        return view('tire.edit', compact('tire'));

    }

    public function show($id)
    {
        return view('tire.show', compact('tire'));
    }

}
