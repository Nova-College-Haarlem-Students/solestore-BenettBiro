<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brands</title>

</head>
<body>
    <h1>Brands overview</h1>
    
    @if($categories->isEmpty())
        <p>No Brands found.</p>
    @else
        <div class="categories-list">
            @foreach($categories as $category)
                <div class="category-item">
                    <h2>{{ $category->name }}</h2>
                    <p>{{ $category->description }}</p>
                      <p>{{ $category->country}}</p>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>