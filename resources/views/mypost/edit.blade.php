@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">Edit Post</h1>
    </div>
</div>

<div class="card table-responsive col-lg-10">
    <div class="card-header">
        <a href="{{route('mypost.index')}}" class="btn btn-primary mb-3"> Back Post </a>
        <form action="{{ route('mypost.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" @error('title') is-invalid @enderror name="title" required autofocus value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" @error('slug') is-invalid @enderror name="slug" required value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="categori" class="form-label">Categori</label>
                        <select class="custom-select form-select" name="category_id">
                            @foreach ($categories as $cat)
                            @if(old('category_id', $post->category_id) == $cat->id)
                                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                            @else
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endif
                            @endforeach
                        </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" input="image" required>
                    <img src="/uploads/post/{{ $post->image }}" width="300px">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="body" class="form-label">Body :</label>
                    @error('body')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    
                    
                    <textarea input="body" type="hidden" id="body" name="body" class="form-control ckeditor" required value="{{ old('body', $post->body) }}">{{$post->body}}</textarea>
                </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>


<script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

<script>
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{ route('mypost.image').'?_token'.csrf_token() }}",
        filebrowserUploadMethod: 'form'
    });
    </script> 
@endsection



