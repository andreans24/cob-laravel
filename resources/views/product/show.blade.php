@extends('dashboard.all')

@section('container')
<div class="container">
    <div class="row justify mb-3">
        <div class="col-md-10">
            <a href="/product" class="btn btn-warning btn-sm">Back To List</a>
            <h3 class="mb-2">Title : {{ auth()->user()->email }}</h3>

            <p class="">{{ $product->image }}</p>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <td><img src="/uploads/product/{{ $product->image }}" width="720" height="420" class="img img-responsive"/></td>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection