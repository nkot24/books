<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Book: {{ $book->title }}</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>
        </div>

        <div>
            <label for="release_date">Release Date</label>
            <input type="date" id="release_date" name="release_date" value="{{ old('release_date', $book->release_date) }}" required>
        </div>

        <button type="submit">Update Book</button>
    </form>

    <a href="{{ route('books.index') }}">Back to Books</a>

</body>
</html>


    
