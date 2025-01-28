<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <!-- Menampilkan pesan error jika ada -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk mengedit produk -->
    <form action="{{ route('products.edit', $products->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Method PUT untuk update -->

        <label for="name">Nama Produk:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $products->name) }}" required>
        <br>

        <label for="price">Harga Produk:</label>
        <input type="number" id="price" name="price" value="{{ old('price', $products->price) }}" required>
        <br>

        <button type="submit">Perbarui</button>
    </form>

    <a href="{{ route('products.index') }}">Kembali ke daftar produk</a>
</body>
</html>
