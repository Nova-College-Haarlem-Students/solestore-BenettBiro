<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brands</title>

</head>

<body>
    <h1>Brands overview</h1>

    @if($sneakers->isEmpty())
        <p>No Brands found.</p>
    @else
        <div class="categories-list">
            @foreach( $sneakers as $sneaker)
                <div class="category-item">
                    <h2>{{  $sneaker->name }}</h2>
                    <p>{{  $sneaker->description }}</p>
                    <p>{{  $sneaker->price}}</p>
                    <p>{{  $sneaker->size}}</p>
                    <p>{{  $sneaker->material}}</p>
                    <p>{{  $sneaker->color}}</p>

                </div>
            @endforeach
        </div>
    @endif
</body>

</html>