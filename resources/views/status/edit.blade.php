@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title">Formulario de estados</h3>
                <form action="{{route('status_update', $status->id)}}" method="post">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="col-md-12">
                            <label for="status_name">Nombre del estado</label>
                            <input type="text" name="status_name" value="{{$status->status_name}}" id="status_name" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="observations">Observaciones</label>
                            <textarea name="observation" value="{{$status->observation}}" id="observations" cols="30" rows="10"
                                class="form-control">{{$status->observation}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-sm btn-primary my-3">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection