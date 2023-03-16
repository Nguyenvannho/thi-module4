<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $books = Book::search()->paginate(3);
        $param = [
            'books' => $books,
        ];
        return view('book.index', $param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:6',
            'isbn' => 'required',
            'author' => 'required',
            'type' => 'required',
            'number_pages' => 'required',
            'year' => 'required',
        ]);
        $books = new Book();
        $books->name = $request->name;
        $books->isbn = $request->isbn;
        $books->author = $request->author;
        $books->type = $request->type;
        $books->number_pages = $request->number_pages;
        $books->year = $request->year;
        $books->save();
        alert()->success('Thêm sách thành công!');
        $notification = [
            'message' => 'Added successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('book.index')->with($notification);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $bookshow = Book::findOrFail($id);
        $param =[
            'bookshow'=>$bookshow,
        ];
        return view('book.show',  $param );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:6',
            'isbn' => 'required',
            'author' => 'required',
            'type' => 'required',
            'number_pages' => 'required',
            'year' => 'required',
        ],[
            'name.required' => 'Bạn không được để trống!',
            'isbn.required' => 'Bạn không được để trống!',
            'author.required' => 'Bạn không được để trống!',
            'type.required' => 'Bạn không được để trống!',
            'number_pages.required' => 'Bạn không được để trống!',
            'year.required' => 'Bạn không được để trống!',
        ]);
        $books = Book::find($id);
        $books->name = $request->name;
        $books->isbn = $request->isbn;
        $books->author = $request->author;
        $books->type = $request->type;
        $books->number_pages = $request->number_pages;
        $books->year = $request->year;
        $books->save();
        alert()->success('Chỉnh sửa thành công!');

        $notification = [
            'message' => 'Edited successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->route('book.index')->with($notification);
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
    }
}
