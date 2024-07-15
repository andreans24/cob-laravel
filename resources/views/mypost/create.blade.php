@extends('dashboard.all')

@section('container')


<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">Create New Post, {{ auth()->user()->name }}</h1>
        <h2>TES WYSIWYG</h2>
    </div>
</div>

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
        <a href="/mypost" class="btn btn-primary mb-3"> Back Post </a>
        <form action="{{route('mypost.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" @error('title') is-invalid @enderror value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" @error('slug') is-invalid @enderror value="{{ old('slug') }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="categori" class="form-label">Category</label>
                <select class="custom-select form-select" name="category_id">
                    @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" input="image">
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

                <textarea input="body" type="hidden" id="body" name="body" class="form-control ckeditor"></textarea>

            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>


{{-- Sluggable Otomatis --}}
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/mypost/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>

<style>
    .ck-editor__editable_inline {
        height: 400px;
    }
</style>

{{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script> --}}

{{-- <script>
    ClassicEditor
        .create( document.querySelector( '#body' ),{
            ckfinder:{
            uploadUrl : "{{ route('mypost.img').'?_token='.csrf_token() }}"
            }
        } )
        .catch( error => {
            console.error( error );
        } );
</script> --}}

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

<script>
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{ route('mypost.image').'?_token'.csrf_token() }}",
        filebrowserUploadMethod: 'form'
    });
    </script> 


@endsection