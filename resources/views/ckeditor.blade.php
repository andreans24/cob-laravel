@extends('dashboard.all')

@section('container')


<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">CKeditor Image Upload Example laravel, </h1>
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

@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif

    <div class="card table-responsive col-lg-10">
        <div class="card-header">
            <form action="{{route('ckeditor.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title :</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title here" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug :</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug here" value="{{ old('slug') }}">
                </div>

                {{-- <div id="toolbar-container"></div> --}}
                
                <div class="form-group">
                    <label for="description" class="form-label"> Description:</label>
                    @error('description')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror   

                    <textarea input="description" type="hidden" id="description" name="description" class="form-control ckeditor"></textarea>
                </div>
        </div>
        <button type="submit" class="btn btn-dark"> Submit </button>
    </div>
</form>



<style>
    .ck-editor__editable_inline {
        height: 500px;
    }
</style>


{{-- SCRIPT CKEDITOR 5 SUKSES --}}
{{-- <script src="/ckeditor5-build-classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ),{
            ckfinder:{
            uploadUrl : "{{ route('ckeditor.upload').'?_token='.csrf_token() }}"
            },
        } )
        .catch( error => {
            console.error( error );
        } );
</script> --}}


{{-- SCRIPT CKEDITOR V4 FULL PACKAGE SUCCESS --}}
<script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload').'?_token='.csrf_token() }}",
        filebrowserUploadMethod: 'form'
    });
</script>


@endsection