@extends('_layout.admin')

@section('title', 'Editing Product')


@section('content')
    <div class="card">
        <div class="card-header">
            Product
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('products.update',$product) }}">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="title" value="{{ $product->title }}" placeholder="{{ $product->title }}">
                </div>

                <div class="form-group">
                    <input type="submit"  class="btn btn-sm bg-dark" value="Save">
                </div>

            </form>
        </div>
    </div>
@endsection