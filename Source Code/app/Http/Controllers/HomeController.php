<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('pages.index');
    // }
    public function index()
    {
        $categories = Category::all();
        $books = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name', 'books.*')
            ->paginate(3);

        return view('pages.index', compact('categories', 'books'));
        // return view('pages.index');
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
    public function show($id)
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

        return view('pages.index', compact('book', 'categories', 'books'));
    }
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
