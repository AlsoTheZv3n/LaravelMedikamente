@extends('layout')

@section('content')

<div class="container text-center">

<h1 class="text-light fw-bold m-4 fs-2"> pharma Bearbeitungs Tool </h1>

<form action="" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <label for="pharmaedit" class="form-label text-light fs-5 col-md-2">name</label>
        <div class="col-md-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ $pharma->name }}">
        </div> 
    </div>
    </div>
    <button type="submit-button" class="btn btn-primary">Save</button>
</form>
</div>


@endsection

