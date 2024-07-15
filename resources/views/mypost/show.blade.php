@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">Post View, {{ auth()->user()->name }}</h1>
        
    </div>
</div>
{{--  $posts menggunakan nama database --}}
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-12">
            <a href="{{ route('mypost.index') }}" class="btn btn-primary btn-sm">Back To Post</a>
            <a href="" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('mypost.destroy', $posts->id)}}" method="POST" class="d-inline">
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="fa-solid fa-trash"></i>Delete</button>
                    @method('DELETE')
                    @csrf 
            </form> 

            <h3 class="mb-2">{{ $posts->title }}</h3>
            <p>By : <a href="/posts?author={{ $posts->author->username }}" class="text-decoration-none"> {{ $posts->author->name }}</a> in <a href="/posts?category={{ $posts->category->slug }}" class="text-decoration-none"> {{ $posts->category->name }}</a></p>

            @if ($posts->image)
            <img src="/uploads/post/{{ $posts->image }}" width="450" height="150" alt="{{ $posts->category->name }}" class="img-fluid">
                @else
                <img src="https://source.unsplash.com/1450x500?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">
            @endif
            
            <br>
            <article class="my-4">
                {!!  $posts->body !!}
                {{-- <img src="/uploads/post/{{ $posts->image }}" alt=""> --}}
            </article>
            <br>

            
        </div>
    </div>
</div>
@endsection