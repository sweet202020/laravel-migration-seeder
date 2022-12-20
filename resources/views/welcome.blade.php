@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Benvenuti, acquistate un biglietto</h1>
        <p class="col-md-8 fs-4 py-5">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <a href="{{route('trains')}}"> <button class="btn btn-primary btn-lg" type="button">View trains</button></a>
    </div>
</div>
@endsection