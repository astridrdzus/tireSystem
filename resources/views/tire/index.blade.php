<!--- tire/index--->
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Llanta</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Vehículo</th>
                    <th>Posición</th>
                    <th>Fecha de registro</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            <!--Reparar esto Lunes 08/03-->
            @foreach($tires as $tire)
                <tr> {{-- Fila--}}
                    <td>{{$tire->id}}</td> {{--Celda  --}}
                    <td>{{$tire->vehicle_id}}</td>
                    <td>{{$tire->tire_position}}</td>
                    <td>{{$tire->tire_date}}</td>
                    <td>
                        <div class="btn-group">
                            <a class= "btn btn-sm btn-link" >Ver</a>
                            <a class= "btn btn-sm btn-link" >Editar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection