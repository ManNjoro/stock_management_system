<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('links/links')
</head>
<body>
    <div class="grid-container">
        @include('sidebar')
        <section id="main-content">
            <div>
                @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
                @endif
            </div>
            @if(count($products) == 0)
            <div>
                <h3>No Products Available</h3>
                <a href="{{route('product.create', ['products' => $products])}}">Add New Product</a>
            </div>
            @else
            <div>
                <table border='1' style="border-collapse:collapse;">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Date Added</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                <a href="{{route('product.edit',['product' => $product])}}">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('product.delete', ['product' => $product])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            @endif
        </section>
    </div>
</body>
</html>