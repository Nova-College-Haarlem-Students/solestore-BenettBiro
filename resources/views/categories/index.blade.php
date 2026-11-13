<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
</head>
<body>
    <h1>Brands overview</h1>

    @if($brands->isEmpty())
        <p>No Brands found.</p>
    @else
        <div class="categories-list">
            @foreach($brands as $brand)
                <div class="category-item">
                    <h2>{{ $brand->name }}</h2>
                    <p>{{ $brand->description }}</p>
                    <p>{{ $brand->country }}</p>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>