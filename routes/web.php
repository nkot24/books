<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books',[BooksController::class, 'index']);
Route::get('/books/create',[BooksController::class, 'create']);
Route::post('/books',[BooksController::class, 'store'])->name('books.store');
Route::post('/books/{id}',[BooksController::class, 'show'])->name('books.show');
Route::post('/books/{id}/edit',[BooksController::class, 'edit'])->name('books.edit');



