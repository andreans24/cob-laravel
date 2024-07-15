@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">TES </h1>
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

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-15">
                <div class="card table-responsive col-lg-9">
                    <div class="card-header">
                        <a href="{{ route('items.create') }}" class="btn btn-dark mb-3"> Create New crud</a>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Image</th>
                            <th scope="col">Nama</th>
                            <th>Description</th>
                            <th style="width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $data)
                                
                            <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td><img src="uploads/items/{{ $data->image }}" width="350" height="90" class="img img-responsive"/></td>
                            <td> {{ $data->name }}  </td>
                            <td> {{ $data->konten }} </td>
                            <td>
                                <form action="{{ route('items.destroy', $data->id) }}" method="POST">
                                    <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-eye"></i>  </a> 
                                    <a href="{{ route('items.edit', $data->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a> 
                                    <button type="submit" class="btn btn-sm btn-warning"> <i class="fa fa-trash"></i></button>
                                    
                                    @method('DELETE')
                                    @csrf

                                </form>
                                @endforeach
                            </td>
                            </tr>
                            
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

