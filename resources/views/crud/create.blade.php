@extends('dashboard.all')

@section('container')


<div class="card table-responsive col-lg-10">
    <div class="card-header">
        <a href="{{ route('employe.index') }}" class="btn btn-dark mb-3"> Back Post </a>
        <form action="{{ route('employe.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                
                <div class="form-group">
                    <label for="konten" class="form-label"> Content :</label>
                        <textarea input="konten" type="file" id="konten" name="konten" class="form-control ckeditor" value="{{ old('konten') }}"></textarea>
                        @error('konten')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Thumbnail</label>
                        <input class="form-control form-control-sm" type="file" name="image" id="image" required>
                    </div>
                    
                    
            <button type="submit" class="btn btn-dark">Create Post</button>
        </form>
    </div>
</div>

<style type="text/css">
    .ck-editor__editable_inline
    {
        height: 350px;
    }
    .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }
</style>

<script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'konten', {
        filebrowserUploadUrl: "{{ route('upload.image').'?_token='.csrf_token() }}",
        filebrowserUploadMethod: 'form'
    } );
</script>


{{-- <script>
CKEDITOR.ClassicEditor.create(document.querySelector('#konten'){
    ckfinder: {
            uploadUrl: '{{route('upload.image', ['?_token='.csrf_token()] )}}',
            uploadMethod:"form",
        }
})
.then(editor => {
        console.log( editor );
    })
    .catch( error => {
        console.error( error );
    } );
</script> --}}


@endsection

