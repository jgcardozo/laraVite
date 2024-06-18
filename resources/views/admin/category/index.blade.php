@extends('_layout.admin')

@section('title', 'Categories')


@section('content')
    <div class="container my-3">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <table class="table table-striped">
            <tbody>
                @foreach ($categories as $category)
                    <tr class="bg-dark">
                        <td>{{ $category->title }} <a href="{{ route('categories.edit', $category) }}"><i
                                    class="fa-solid fa-pen mx-2"></i></a></td>
                        <td>{{ $category->products->count() }}</td>
                        <td colspan="2">Actions</td>
                    </tr>
                    @foreach ($category->products as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>&nbsp;</td>
                            <td><a href="{{ route('products.edit', $item) }}" class="btn btn-sm bg-dark">Edit</a></td>
                            <td>
                             <form method="POST" action="{{ route('products.destroy', $item) }}">
                                    @method('DELETE') 
                                    @csrf
                                    <button class="btn btn-sm bg-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
