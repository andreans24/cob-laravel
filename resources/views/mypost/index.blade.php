@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">List My Post, {{ auth()->user()->name }}</h1>
    </div>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif

        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card table-responsive col-lg-13">
                        <div class="card-header">
                            <a href="{{ route('mypost.create') }}" class="btn btn-primary mb-3"> Create New Post</a>
                        </div>
                        
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th scope="col">Title</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th width="40%">Content</th>
                                <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td><img src="/uploads/post/{{ $post->image }}" width="180" height="90" class="img img-responsive"/></td>
                                <td>{{ $post->title }} </td>
                                <td>{{ $post->category->name }}  </td>
                                <td>{{ $post->slug }} </td>
                                <td>{!!$post->excerpt!!}</td>
                                <td>
                                    <form action="{{ route('mypost.destroy', $post->id) }}" method="POST" class="d-inline">
                                        <a href="{{ route('mypost.show', $post->id) }}" class="badge bg-warning border-0"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('mypost.edit', $post->id)}}" class="badge bg-warning border-0"><i class="fa-solid fa-pencil"></i></a>
                                            <button class="badge bg-warning border-0" onclick="return confirm('Are You Sure?')"><i class="fa-solid fa-trash"></i></button>
                                            @method('DELETE')
                                            @csrf 
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- card-body -->
                    </div>
                    <!-- card -->
                </div>
            </div>
        </div>
        <!-- row -->
    </section>
    <!-- content -->
@endsection
