<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>description</th>
                <th>quantity</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        {{-- {{ $age }} --}}
        <tbody>
            @foreach ($products as $product)
                <tr class="@if ($loop->first) bg-gray @endif">
                    <td>{{ $product->id }} </td>
                    <td>{{ $product->name }} </td>
                    <td>{{ $product->price }} </td>
                    <td>{{ $product->description }} </td>
                    <td>{{ $product->quantity }} </td>
                    <td>{{ $product->created_at }} </td>
                    <td>
                        <button>delete</button>
                        <button>update</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
</body>

</html>
