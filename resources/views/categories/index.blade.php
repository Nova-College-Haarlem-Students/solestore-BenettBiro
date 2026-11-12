<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Merken overzicht</title>

</head>
<body>
    <h1>Merken overzicht</h1>
    
    @if($categories->isEmpty())
        <p>Geen Merken gevonden.</p>
    @else
        <div class="categories-list">
            @foreach($categories as $category)
                <div class="category-item">
                    <h2>{{ $category->name }}</h2>
                    <p>{{ $category->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>