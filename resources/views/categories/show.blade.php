<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $sneakers->name }}</title>
</head>
<body>
    <h1>{{ $sneakers->name }}</h1>
    <p>Colorway: {{ $sneakers->colorway }}</p>
    <p>Releasejaar: {{ $sneakers->release_year }}</p>
    <p>Merk: {{ $sneakers->brand->name }}</p>
    <p>{{ $sneakers->description }}</p>

    <a href="/sneakers">← Terug naar alle sneakers</a>
</body>
</html>