{{-- INI HALAMAN SINGLE POST --}}

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <h3 class="mb-2">{{ $post->title }}</h3>
            {{-- <h5>{{ $post->author }}</h5> --}}
            <a href="/posts" class="btn btn-outline-warning btn-sm">Back To Post</a>
            <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

            {{-- <img src="{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}

            <article class="my-4">
                {!!  $post->body !!}
            </article>

            
            </article>
            <br>

            
        </div>
    </div>
</div>

<article>



@endsection