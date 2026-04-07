<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    @foreach($books as $book)
    <p>
        <a href="/books/{{ $book[ 'id'] }}">
            {{ $book ['title'] }} - {{ $book ['author'] }}
        </a>
    </p>
    @endforeach
    <br>
</body>
</html>