<?php

namespace App\Http\Controllers;

use App\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //solo puede acceder a las funciones si esta autenticado (si está loggueado)
    }
    public function index()
    {
        $statuses = Status::paginate();
        return view('status.index', compact('statuses'));
    }
    //CRUD Create,Read, Update,  Delete
    public function create()
    {
        return view('status.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'status_name' => 'required',
        ]);
        $status = new Status();
        $status->status_name = $request->status_name;
        $status->observation = $request->observation;
        $status->status_date = Carbon::now();
        $status->save();
        return redirect()->route('status_index')->with('success', 'Se ha creado con éxito el estado.');
    }
    public function edit($id)
    {
        $status = Status::findOrFail($id);
        return view('status.edit', compact('status'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'status_name' => 'required',
        ]);
        $status = Status::findOrFail($id);
        $status->status_name = $request->status_name;
        $status->observation = $request->observation;
        $status->status_date = Carbon::now();
        $status->update();
        return redirect()->route('status_index')->with('success', 'Se ha actualizado con éxito el estado.');
    }
    public function show($id)
    {
        $status = Status::findOrFail($id);
        return view('status.show', compact('status'));
    }
    public function destroy($id)
    {

    }

}
