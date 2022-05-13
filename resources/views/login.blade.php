@extends('layout')

@section('content')

<div>
<section>
    <h2 class="opacity-75">Login</h2>
        <div class="col-md-4 container">
            <form method="POST" action="/login">
            @csrf
                <br>
                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: hsl(179, 72%, 50%);">username</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control" id="username" name="username">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: hsl(179, 72%, 50%);">password</label>
                    <div class="col-sm-10">
                    <input type="password" class="opacity-50 form-control" id="password" name="password">
                    </div>
                </div>

                @if ($errors->any())
                <div class="row mb-3 mt-3">
                    <div class="col-sm-12 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                <button type="submit" id="submit-button" class="btn btn-dark">login</button>

            </form>
</div>
</section>

</div>

@endsection