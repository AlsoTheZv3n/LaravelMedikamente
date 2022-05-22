@extends('layout')

@section('content')

<form>
    <div class="form-group">
      <label for="">Drug Name</label>
      <input type="text" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Drug Price</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Effect Name</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Side Effect</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Effect</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Symptomes Name</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Pharma Name</label>
        <input type="text" class="form-control" id="">
      </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>

@endsection