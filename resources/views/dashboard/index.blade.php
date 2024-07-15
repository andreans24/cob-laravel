@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>
</div>
    
@endsection