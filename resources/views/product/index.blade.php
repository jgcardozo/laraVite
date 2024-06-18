@extends('_layout.layout')

@section('title', 'Products')

@section('body')
    <div class="container my-3">
        <table class="table table-striped">
            <thead class="bg-secondary">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Category</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $pro)
                    <tr>
                        <td>{{ $pro->id }}</td>
                        <td>{{ $pro->title }}</td>
                        <td>{{ $pro->price }}</td>
                        <td>{{ $pro->category->title }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
