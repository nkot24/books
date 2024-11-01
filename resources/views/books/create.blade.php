<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add book</h1>

    <form action="/books" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
        <br>

        <label for="release_date">release_date: </label>
        <input type="date" name="release_date" id="release_date">

        <input type="submit" value="Create">
    </form>
</body>
</html>
