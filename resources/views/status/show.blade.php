@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title">{{$status->status_name}}</h2>
                <p class="card-text">{{$status->observation}}</p>
            </div>
        </div>
    </div>
</div>
@endsection