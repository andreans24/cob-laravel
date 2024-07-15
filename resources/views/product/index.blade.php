@extends('dashboard.all')

@section('container')

<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">Resource Product {{ auth()->user()->username }}</h1>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('danger'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif

{{-- Form upload --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="card table-responsive col-lg-10">
                    <div class="card-header">
                        <a href="{{ route('product.create') }}" class="btn btn-warning mb-3">Add</a>
                    </div>

                        <div class="card-body p-0">
                            <div class="card-body p-0">
                                <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- namadatabse as nama item --}}
                                @foreach ($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="/uploads/product/{{ $item->image }}" width="180" height="90" class="img img-responsive"/></td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <form action="{{ route('product.destroy', $item->id) }}" method="post" >
                                            <a href="{{ route('product.show', $item->id ) }}" class="btn bg-info btn-sm"><i class="fa-solid fa-eye"></i>  </a> 
                                            <a href="{{ route('product.edit', $item->id) }}" class="btn bg-warning btn-sm"><i class="fa-solid fa-pencil"></i></a> 
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn bg-danger btn-sm" title="delete product"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                    </div>
                
            </div>
        </div>
    </div>
</section>

@endsection