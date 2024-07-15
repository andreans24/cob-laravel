@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">CRUD Resource, {{ auth()->user()->email }}</h1>
    </div>
</div>

<div class="card table-responsive col-lg-10">
    <div class="card-header">
        <a href="/student" class="btn btn-danger mb-3"> Back Post </a>
        <form action="{{ url('sekolah/' . $students->id) }}" method="post">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" @error('name') is-invalid @enderror name="name" required value="{{ $students->name }}" id="id">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div>
                    <label for="address">address</label>
                    <input type="hidden" name="address" id="address" value="{{ $students->address }}">
                    <textarea input="body" type="hidden" name="address" id="address" class="form-control ckeditor" required value="{{ $students->id }}">{{ $students->address }}"</textarea>
                </div>

                
                <br>
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $students->mobile }}">
                <br>
            <button type="submit" class="btn btn-danger">Create Post</button>
        </form>
    </div>
</div>
@endsection