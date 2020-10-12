<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
class StatusController extends Controller
{
    public function __construct(){
        $this->middleware('auth');  //solo puede acceder a las funciones si esta autenticado (si está loggueado)
    }
    public function index(){
        return view('status.index');
    }
}
