<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>

    <a href="{{ route('products.create') }}" class="btn btn-primary p-1 m-3">create product</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr class="@if ($loop->first) bg-gray @endif">
                    <td>{{ $product->id }} </td>
                    <td>{{ $product->name }} </td>
                    <td>{{ $product->price }} </td>

                    <td>{{ $product->created_at }} </td>
                    <td>
                        {{-- index --}}
                        {{-- show --}}
                        {{-- delete --}}
                        {{-- edit --}}
                        {{-- create --}}
                        <form action="{{ route('products.show', $product->id) }}">
                            <button type="submit">show</button>
                        </form>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">delete</button>
                        </form>

                        <form action="{{ route('products.edit', $product->id) }}">
                            <button type="submit">update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    {{-- {{ $products->links() }} --}}
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{-- @dd($products->lastPage) --}}
            <li class="page-item"><a class="page-link" href="{{ $previous }}">Previous</a>
            </li>
            {{-- @for ($i = 1; $i <= $products->lastPage(); $i++)
                <li class="page-item"><a class="page-link"
                        href="{{ route('products.index') }}?page={{ $i }}">{{ $i }}</a></li>
            @endfor --}}
            <li class="page-item"><a class="page-link" href="{{ $next }}">Next</a>
            </li>
        </ul>
    </nav>

    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
</body>

</html>
