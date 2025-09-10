<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    <h2>Category: {{ $category->name }}</h2>
    <p>Slug: {{ $category->slug }}</p>

    <h3 class="mt-4">Products under this category:</h3>

    @if($category->products->count() > 0)
        <div class="row">
            @foreach($category->products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('img/no-image.png') }}" class="card-img-top" alt="No image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No products found in this category.</p>
    @endif
</div>

</body>
</html>