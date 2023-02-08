<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="row m-50 m-auto">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="col-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}" id="">
            </div>
            <div class="col-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" name="description" cols="30" rows="5">{{ $product->description }}</textarea>

            </div>
            <div class="col-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}" id="">
            </div>
            <div class="col-3">
                <label for="quantity" class="form-label">quantity</label>
                <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}"
                    id="">
            </div>
            <input type="submit" class="form-action">
        </form>
    </div>

</body>

</html>
