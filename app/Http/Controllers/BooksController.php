<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index', ['allbooks' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            
            'title' => $request->title,
            'release_date' => $request->release_date,
        ];

        Books::create($data);
        return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        return view('books.show', [
            'school' => $books,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    /**
 * Show the form for editing the specified resource.
 */
public function edit(Books $books)
{
    return view('books.edit', [
        'books' => $books,
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        //
    }
}
