@extends('layouts.main')

@section('container')
    <h1>About's</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="/img/{{ $image }}" alt="{{ $name }}" width="500" class="img-thumbnail rounded">
@endsection