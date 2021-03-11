<!--- tire/create--->
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-tittle"> Datos llanta </h3>
                <form action="{{route('tire_store')}}" method="post">
                    <div class="row">
                        <div class="col-md">
                            <label for="economic_number"> Número económico </label>
                            <input type="text" name="economic_number" id="economic_number" class="form-control">
                        </div>
                        <div class="col-md">
                            <label for="brand"> Marca </label>
                            <input type="text" name="brand" id="brand" class="form-control">
                        </div>
                        <div class="col-md">
                            <label for="design"> Diseño </label>
                            <input type="text" name="design" id="design" class="form-control">
                        </div>

                        <div class="col-md">
                            <label for="size">Medida</label>
                            <input type="text" name="size" id="size" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection