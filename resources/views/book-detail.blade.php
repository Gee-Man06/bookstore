<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Book Details</h1>
    <h2>{{ $book_detail['title'] }}</h2>
    <p>Author: {{ $book_detail['author'] }}</p>
    <a href="/books">Back to Books</a>
</body>
</html>