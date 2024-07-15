@extends('dashboard.all')

@section('container')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">TES Edited </h1>
    </div>
</div>

<div class="card table-responsive col-lg-10">
    <div class="card-header">
        <a href="/items" class="btn btn-dark mb-3"> Back Post </a>
        <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
                    </div>
                
                <div class="form-group">
                    <label for="konten" class="form-label"> Description</label>
                        <textarea input="konten" type="file" id="konten" name="konten" class="form-control" value="{{ $item->konten }}" required>{{ $item->konten }}</textarea>
                        @error('konten')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Thumbnail</label>
                        <input class="form-control form-control-sm" type="file" name="image" id="image" value="{{ $item->image }}" required>
                        <img src="/uploads/items/{{ $item->image }}" width="300px">
                    </div>
                    
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
@endsection