@extends('layout')

@section('content')

<div class="container text-center col-md-12">

    <h1 class="text-light fw-bold m-4 fs-2"> Pharma Unternehmen Liste </h1>

    <div class="col-md-12">
        <table class="table table-dark table-striped align-middle fs-6 table-sm">
            <thead class="fs-5 fw-bold">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach( $Pharma as $Pharmas )
                <tr>
                    <td>{{ $Pharmas->name }}</td>
                    <td><a href="pharma/edit/{{ $Pharmas->id }}" class="btn btn-success">Edit</a>
                    <td><a href="pharma/delete/{{ $Pharmas->id }}" class="btn btn-danger">Delete</a>   
                </tr>
                @endforeach
            </tbody>
        </table>

        <button type="button" href="/pharma" id="pharma" class="btn btn-info">Pharma</button>

    </div>

</div>

@endsection