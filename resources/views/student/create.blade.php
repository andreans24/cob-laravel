@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">CRUD Resource, {{ auth()->user()->email }}</h1>
    </div>
</div>

<div class="card table-responsive col-lg-10">
    <div class="card-header">
        <a href="/sekolah" class="btn btn-danger mb-3"> Back Student List </a>
        <form action="{{ url('student') }}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" @error('name') is-invalid @enderror name="name" required value="{{ old('name') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div>
                    <label for="address">address</label>
                    <input type="hidden" name="address" id="address">
                    <textarea input="body" type="hidden" name="address" id="address" class="form-control ckeditor"></textarea>
                </div>

                
                <br>
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control">
                <br>
            <button type="submit" class="btn btn-danger">Create Post</button>
        </form>
    </div>
</div>


@endsection