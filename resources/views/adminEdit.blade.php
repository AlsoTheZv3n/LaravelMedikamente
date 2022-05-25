@extends('layout')

@section('content')

<div class="container text-center col-md-12">

<h1 class="text-light fw-bold m-4 fs-2"> Admin Bearbeitungs Tool </h1>

<form action="adminedit" method="POST">
    <div class="col-md-12">
        <div class="md-6">
      <label for="adminedit" class="form-label">Role</label>
      <input type="text" class="form-control" id="role">
    </div>
    <div class="mb-6">
        <label for="adminedit" class="form-label">Benutzername</label>
        <input type="text" class="form-control" id="username">
    </div>
    </div>
<button type="submit" class="btn btn-primary">Save</button>
</form>


</div>


@endsection

