<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Book;
use App\Category;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('admin.manageBook', compact('books', 'categories'));
    }
    public function store(Request $request)
    {
        request()->validate([
            'book_name' => 'required|min:3',
            'book_author' => 'required',
            'book_description' => 'required',
            'book_pagesNumber' => 'required',
            'book_language' => 'required',
            'book_age' => 'required',
            'book_price' => 'required',
            'upload_file'    => 'mimes:pdf,xlx,csv',
            'book_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->book_image)) {
            $imageName = time() . '.' . request()->book_image->getClientOriginalExtension();
            request()->book_image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }
        if (!empty(request()->upload_file)) {
            $fileName  = time() . '.' . request()->upload_file->getClientOriginalExtension();
            request()->upload_file->move(public_path('uploads'), $fileName);
        } else {
            $fileName  = 'pdf';
        }

        $var = new Book();
        $var->book_name = $request->input('book_name');
        $var->book_author = $request->input('book_author');
        $var->book_description = $request->input('book_description');
        $var->book_pagesNumber = $request->input('book_pagesNumber');
        $var->book_language = $request->input('book_language');
        $var->book_price = $request->input('book_price');
        $var->book_age = $request->input('book_age');
        $var->category_id = $request->input('category_id');
        $var->upload_file = $fileName;
        $var->book_image = $imageName;

        $var->save();
        return back()->with('success', 'Book created successfully.');
    }
    public function edit($id)
    {
        $categories = Category::all();

        $books = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name', 'books.*')
            ->get();
        $Book = Book::find($id);

        return view('admin.editBook', compact('Book', 'books', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'book_name' => 'required|min:3',
            'book_author' => 'required',
            'book_description' => 'required',
            'book_pagesNumber' => 'required',
            'book_language' => 'required',
            'book_age' => 'required',
            'book_price' => 'required',
            'upload_file'    => 'mimes:pdf,xlx,csv',
            'book_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->book_image)) {
            $imageName = time() . '.' . request()->book_image->getClientOriginalExtension();
            request()->book_image->move(public_path('images'), $imageName);
        } else {
            $book = Book::find($id);
            $imageName = $book->book_image;
        }
        if (!empty(request()->upload_file)) {
            $fileName  = time() . '.' . request()->upload_file->getClientOriginalExtension();
            request()->upload_file->move(public_path('uploads'), $fileName);
        } else {
            $fileName  = 'pdf';
        }

        $book = Book::find($id);
        $book->book_name = $request->get('book_name');
        $book->book_author = $request->get('book_author');
        $book->book_description = $request->get('book_description');
        $book->book_pagesNumber = $request->get('book_pagesNumber');
        $book->book_language = $request->get('book_language');
        $book->book_age = $request->get('book_age');
        $book->book_price = $request->get('book_price');
        $book->category_id = $request->input('category_id');
        $book->upload_file = $fileName;
        $book->book_image = $imageName;
        $book->save();
        return redirect('/manageBook')->with('success', 'Contact updated!');
    }



    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return back()->with('success', 'Book deleted!');
    }
}
