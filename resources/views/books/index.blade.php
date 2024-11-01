<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Books</h1>
    <ul>
        @foreach ($allbooks as $book)
           <li>
                <h2>{{ $book->title }}</h2>
                <h2>{{ $book->release_date }}</h2>
           </li> 
           <a href="/books{id}/edit">Edit</a>
        @endforeach
    </ul>
    <a href="/books/create">Create Note</a>
    
</body>
</html>