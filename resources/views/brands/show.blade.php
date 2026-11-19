<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $brands->name }}</title>
</head>
<body>
    <h1>{{ $brands->name }}</h1>
    <p>{{ $brands->description }}</p>
    <p>Country: {{ $brands->country }}</p>

    <a href="/brands">← Back to all brands</a>
</body>
</html>