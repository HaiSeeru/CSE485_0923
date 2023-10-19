<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Auth\Events\Validated;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(10);
        return view('books.index', compact('books'));
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
       
        $request->validate([
            'title' => 'required',
            'author_name' => 'required'
        ]);

         $authorName = $request->input('author_name');

        // Tìm tác giả trong bảng "authors" dựa trên tên
        $author = Author::firstOrNew(['name' => $authorName]);

        // Lưu tác giả nếu tên không tồn tại trong bảng "authors"
        if (!$author->exists) {
            $author->save();
        }

        $book = new Book;
        $book->title = $request->input('title');
        $book->author_id = $author->id; // Lấy id của tác giả
        $book->save();
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('books.show',
            ['book' => $book]        
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('books.edit', 
            ['book' => $book]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'title' => 'required',
            'author_name' => 'required'
        ]);
        $authorName = $request->input('author_name');

        // Tìm tác giả trong bảng "authors" dựa trên tên
        $author = Author::firstOrNew(['name' => $authorName]);

        // Lưu tác giả nếu tên không tồn tại trong bảng "authors"
        if (!$author->exists) {
            $author->save();
        }

        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author_id = $author->id; // Liên kết sách với tác giả
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);

        $book->delete();
        return redirect()->route('books.index')->with('success', 'book deleted successfully');
    }
}
