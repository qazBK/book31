<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\panel\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index',[
            'books'=> Book::all(),
        ]);
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
    public function store(BookRequest $request)
    {
        // Получаем валидированные данные
        $validated = $request->validated();

        // Удаляем images из validated
        unset($validated['images']);


        $book = Book::query()->create($validated);

        // Обрабатываем изображения
        if ($request->hasFile('images')) {
            $book->updateImages($request->file('images'));
        }

        return redirect()
            ->route('admin-panel')
            -> withInput($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Book $book,BookRequest $request)
    {
        $validated = $request->validated();

        // Удаляем images из validated
        unset($validated['images']);

        $book->update($validated);


        if ($request->hasFile('images')) {
            $book->updateImages($request->file('images'));
        }

        return redirect()
            -> route('admin-panel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book-> delete();
        return redirect()
            -> route('admin-panel');
    }
}
