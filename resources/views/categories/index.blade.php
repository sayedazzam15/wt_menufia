@extends('main')
@section('content')
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>category name</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }} </td>
                    <td>{{ $category->name }} </td>
                    <td>{{ $category->created_at }} </td>
                    <td>
                        <form action="{{ route('category.show', $category->id) }}">
                            <button type="submit">show</button>
                        </form>
                        {{--
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">delete</button>
                        </form>

                        <form action="{{ route('products.edit', $product->id) }}">
                            <button type="submit">update</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
{{-- migration --}}
{{-- seeders --}}
{{-- factory --}}
{{-- authentication --}}
