<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Book;

class AllBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $books = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name', 'books.*')
            ->get();

        return view('pages.allBook', compact('categories', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function search(Request $request)
    {

        $search = $request->input('search');

        $categories = Category::all();



        $book = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name', 'books.*')
            ->get();

        $books = Book::query('book_name', 'book_image')
            ->where('book_name', 'LIKE', "%{$search}%")
            ->get();

        // if ($books !=  $search) {
        //     return view('pages.notFound');
        // }
        // dd($search);

        return view('pages.allBook', compact('book', 'categories', 'books'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catBooks = DB::table('categories')
            ->join('Books', 'categories.cat_id', '=', 'Books.cat_id')
            ->select('categories.category_name', 'Books.*')
            ->where('categories.cat_id', '=', $id)
            ->get();

        return view('pages.categoryBook', compact('catBooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
