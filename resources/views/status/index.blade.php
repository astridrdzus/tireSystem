@extends('layouts.app') {{--Sirve para aplicar la plantilla (visual) que trae Laravel, en vez de html puro--}}
@section('content')
{{--COMENTARIO LARAVEL--}}
{{-- section la sección en donde se incluye el contenido del html--}}
{{--Extiende de la vista que tiene el nombre layouts[carpeta] app [archivo]-}}
{{-- endsection. Pone fin a la section de contenido --}}
{{--BOOTSTRAP  v4.5 o 4.4--}}
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Estatus</h1>
        <div class="col-md-6">
            <a href="{{route('status_create')}}" class="btn btn-sm btn-primary">Crear estatus</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre de estado</th>
                    <th>Observación</th>
                    <th>Fecha de registro</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($statuses as $status)
                <tr> {{-- Fila--}}
                    <td>{{$status->id}}</td> {{--Celda  --}}
                    <td>{{$status->status_name}}</td>
                    <td>{{$status->observation}}</td>
                    <td>{{$status->status_date}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('status_show', $status->id)}}" class="btn btn-sm btn-link">Ver</a>
                            <a href="{{route('status_edit', $status->id)}}" class="btn btn-sm btn-link">Editar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection