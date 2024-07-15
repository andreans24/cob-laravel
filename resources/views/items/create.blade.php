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

<div class="card table-responsive col-lg-10">
    <div class="card-header">
        <a href="{{ route('items.index') }}" class="btn btn-dark mb-3"> Back Post </a>
        <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                
                <div class="form-group">
                    <label for="konten" class="form-label"> Description</label>
                        <textarea input="konten" type="file" id="konten" name="konten" class="form-control" value="{{ old('konten') }}"></textarea>
                        @error('konten')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Thumbnail</label>
                        <input class="form-control form-control-sm" type="file" name="image" id="image">
                    </div>
                    
                    
            <button type="submit" class="btn btn-dark">Create Post</button>
        </form>
    </div>
</div>

@endsection