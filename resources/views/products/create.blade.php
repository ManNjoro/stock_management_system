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
            <h1 class="">Create a Product</h1>
            <div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                @method('post')
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Name">
                </div>
                <div>
                    <label for="qty">Qty:</label>
                    <input type="text" name="qty" id="qty" placeholder="Qty">
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" placeholder="Price">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" placeholder="Description">
                </div>
                <div>
                    <button type="submit" class="">Add New Product</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>
