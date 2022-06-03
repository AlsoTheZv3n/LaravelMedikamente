@extends('layout')

@section('content')

<div class="container text-center col-md-12">

    <h1 class="text-light m-4"> Detailansicht Medikamente </h1>

    <p class="text-light fs-5">{{ $drugs->name }}</p>

    <p class="text-light fs-5">{{ $drugs->price }}</p>

    @foreach( $effects as $effect )
    <p class="text-light fs-5">{{ $effect->name }}</p>
    @endforeach

</div>

@endsection