@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">CRUD Resource, {{ auth()->user()->email }}</h1>
    </div>
</div>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        <Strong>{{ session('success') }}</Strong>
    </div>
@endif

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="card table-responsive col-lg-9">
                    <div class="card-header">
                        <a href="{{ url('/sekolah/create') }} " class="btn btn-danger mb-3"> Create New CRUD</a>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th scope="col">Name</th>
                            <th width="50%">Address</th>
                            <th>Mobile</th>
                            <th style="width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- namadatabse as nama item --}}
                        @foreach ($student as $item)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ strip_tags($item->address) }} </td>
                            <td>{{ $item->mobile }} </td>
                            <td>
                                <a href="{{ url('/sekolah/' . $item->id) }} " class="btn bg-info btn-sm"><i class="fa-solid fa-eye"></i>  </a> 
                                <a href="{{ url('/sekolah/' . $item->id . '/edit') }}" class="btn bg-warning btn-sm"><i class="fa-solid fa-pencil"></i></a> 
                                
                                <form method="post" action="{{ url('/sekolah' . '/' . $item->id) }}">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn bg-danger btn-sm" title="delete sekolah" onclick="return confirm("confirm delete?")" ><i class="fa-solid fa-trash"></i></button>
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