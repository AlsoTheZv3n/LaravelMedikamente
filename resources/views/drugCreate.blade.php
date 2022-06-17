@extends('layout')

@section('content')

<div class="container text-center">
    <h1 class="text-light fw-bold m-4 fs-2"> Drugs Bearbeitungs Tool </h1>

    <form action="" method="POST">
        @csrf
        @method('POST')
        <div class="row mb-3">
        <label for="name" class="form-label col-sm-2 text-light fs-5">Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" value="{{ $drug->name }}">
        </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="form-label col-sm-2 text-light fs-5">Price</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="price" name="price" value="{{ $drug->price }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="effect" class="form-label col-sm-2 text-light fs-5">Effect</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="effect" name="effect" value="{{ $effect->name }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="effecttype" class="form-label col-sm-2 text-light fs-5">Effect Type</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="effecttype" name="effecttype" value="{{ $effect_type->name }}">
            </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>


@endsection

