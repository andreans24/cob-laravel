@extends('dashboard.all')

@section('container')

<div class="container">
    <div class="row justify mb-3">
        <div class="col-md-10">
            <a href="/sekolah" class="btn btn-warning btn-sm">Back To Student</a>
            <h3 class="mb-2">Title : {{ auth()->user()->email }}</h3>

            <p>By : {{ $students->name }}</p>
            <p>Address : {{ $students->address }}</p>
            <p>Mobile : {{ $students->mobile }}</p>
        </div>
    </div>
</div>

@endsection