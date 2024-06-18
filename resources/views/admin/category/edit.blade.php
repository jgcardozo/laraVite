@extends('_layout.admin')

@section('title', 'Editing Category')


@section('content')
    <div class="card">
        <div class="card-header">
            Category
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('categories.update',$category) }}">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" name="title" value="{{ $category->title }}" placeholder="{{ $category->title }}">
                </div>

                <div class="form-group">
                    <input type="submit"  class="btn btn-sm bg-dark" value="Save">
                </div>

            </form>
        </div>
    </div>
@endsection
