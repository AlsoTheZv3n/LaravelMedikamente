@extends('layout')

@section('content')

<div class="container text-center">
    <h1 class="text-light fw-bold m-4 fs-2"> Drugs Create</h1>

    <form action="" method="POST">
        @csrf
        @method('POST')
            <div class="row mb-3">
                <label for="name" class="form-label col-sm-2 text-light fs-5">Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="price" class="form-label col-sm-2 text-light fs-5">Price</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price">
                </div>
            </div>
            <div class="row mb-3">
                <label for="price" class="form-label col-sm-2 text-light fs-5">Pharma</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="pharmaid">
                    <option selected>Pharma</option>
                    <option value="1">Novartis</option>
                    <option value="2">Roche</option>
                    <option value="3">Sandoz</option>
                    <option value="4">Varian</option>
                    <option value="5">Mendoza</option>
                </select>
                </div>
            </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>


@endsection

