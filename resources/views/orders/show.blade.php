<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
{{-- layout --}}

<body>
    <fieldset>
        <legend>Order</legend>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>total</th>
                    <th>user name</th>
                    <th>created_at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->user->user_name }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>order products</legend>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>description</th>
                    <th>quantiy</th>
                    <th>created_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
    {{-- {{ $category->getPaginatedProducts()->links() }} --}}
</body>

</html>
