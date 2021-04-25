<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use Illuminate\Support\Facades\DB;

class AllBookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('pages.category', compact('categories'));
    }

    public function show($id)
    {

        $categories = Category::all();
        $books = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name', 'books.*')
            ->get();
        $book = Book::find($id);
        // dd($books);

        $catbooks = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name', 'books.*')
            ->where('categories.category_id', '=', $id)
            ->get();
        //dd($catbooks);

        return view('pages.bookCategory', compact('catbooks'));
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
