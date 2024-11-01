{{-- resources/views/books/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>Release Date: {{ $book->release_date }}</p>
    <a href="{{ route('books.index') }}">Back to Books</a>
@endsection
