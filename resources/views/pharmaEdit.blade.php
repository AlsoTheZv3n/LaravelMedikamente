@extends('layout')

@section('content')

<div class="container text-center col-md-12">

<h1 class="text-light fw-bold m-4 fs-2"> pharma Bearbeitungs Tool </h1>

<form action="pharmaedit" method="POST">
    <div class="col-md-12">
        <label for="pharmaedit" class="form-label">name</label>
        <input type="text" class="form-control" id="pharmaname">
    </div>
    </div>
<button type="submit" class="btn btn-primary">Save</button>
</form>


</div>


@endsection

