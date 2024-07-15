@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">Resource Product, {{ auth()->user()->username }}</h1>
    </div>
</div>

<div class="card table-responsive col-lg-10">
    <div class="card-header">
        <a href="{{ route('product.index') }}" class="btn btn-warning mb-3"> Back To List</a>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!!</strong>Baca error.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Gambar</label>
                <input class="form-control form-control-sm" type="file" name="image" id="image">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>

        </form>
    </div>
</div>
@endsection