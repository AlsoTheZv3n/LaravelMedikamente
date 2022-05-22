@extends('layout')

@section('content')

<div class="container text-center col-md-12">

    <h1 class="text-light"> Detailansicht Medikamente </h1>

    <p class="text-light">{{ $drugs->name }}</p>

    <p class="text-light">{{ $drugs->price }}</p>

    <p class="text-light">{{ $effects->name}}</p>

</div>

@endsection