@extends('layout')

@section('content')

<div class="container text-center col-md-12">

    <h1 class="text-light m-4"> Detailansicht Medikamente </h1>

    <label for="floatingInput" class="text-light fs-5">Drug Name</label><br>
    <p class="text-light fs-5">{{ $drugs->name }}</p>

    <label for="floatingInput" class="text-light fs-5">Drug Price</label>
    <p class="text-light fs-5">{{ $drugs->price }}</p>

    @foreach( $effects as $effect )
    <label for="floatingInput" class="text-light fs-5">Effect Name</label>
    <p class="text-light fs-5">{{ $effect->name }}</p>
    @endforeach

</div>

@endsection