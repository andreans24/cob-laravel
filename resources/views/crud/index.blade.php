@extends('dashboard.all')

@section('container')
<div class="container-fluid">
    <div class="col-sm-12 d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h1 class="h1">crud not resource (CKEDITOR Image Use), {{ auth()->user()->name }}</h1>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

{{-- @if ($message = Session::get('danger'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif --}}

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-20">
                <div class="card table-responsive col-lg-10">
                    <div class="card-header">
                        <a href="{{ route('employe.create') }}" class="btn btn-dark mb-3"> Create New crud</a>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th scope="col">Nama</th>
                            <th>Content</th>
                            <th>Thumbnail</th>
                            <th style="width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employes as $data)
                            <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $data->name }} </td>
                            <td> {!!($data->konten)!!} </td>
                            <td><img src="/uploads/crud/{{ $data->image }}" width="250" height="90" class="img img-responsive"/>  </td>
                            <td>
                                <Form action="{{route('employe.destroy', $data->id)}}" method="POST" class="">
                                    <a href="" class="badge bg-info"><i class="fa-solid fa-eye"></i>  </a> 
                                    <a href="" class="badge bg-warning"><i class="fa-solid fa-pencil"></i></a> 
                                    <button href="" class="badge bg-danger border-0"><i class="fa-solid fa-trash"></i></button>
                                    @method('DELETE')
                                    @csrf
                                </Form>

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

