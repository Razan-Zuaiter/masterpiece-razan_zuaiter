<?php

namespace App\Http\Controllers;

use App\shelves;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShelvesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $shelves = Shelves::all()->where("user_id", "=", $user->user_id);
        // dd($shelves);
        return view('pages.shelves', compact('user', 'shelves'));
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
        if ($request->fav == 1) {
            $status = Shelves::where('user_id', Auth::user()->user_id)
                ->where('book_id', $request->book_id)
                ->first();
            $shelve = Shelves::where('shelf_id',  $status->shelf_id);
            // dd($shelve);
            $shelve->delete();
            return back();
        } else {
            $status = Shelves::where('user_id', Auth::user()->user_id)
                ->where('book_id', $request->book_id)
                ->first();

            if (isset($status->user_id) and isset($request->book_id)) {
                return back()->with('flash_messaged', 'This item is already in your 
               shelves!');
            } else {
                $shelves = new shelves;
                $shelves->user_id = $request->user_id;
                $shelves->book_id = $request->book_id;
                $shelves->save();

                // return redirect()->back()->with(

                //     'flash_message',
                //     'Item, ' . $shelves->book->first()->book_id . ' Added to your shelves.'
                // );
            }
            $shelves = Shelves::where('user_id', Auth::user()->user_id)->get();

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shelves  $shelves
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $books = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name', 'books.*')
            ->get();
        $book = Book::find($id);
        $catDesc = DB::table('categories')
            ->join('books', 'categories.category_id', '=', 'books.category_id')
            ->select('categories.category_name')
            ->where('books.book_id', '=', $id)
            ->get();
        $desc = json_decode($catDesc, true);
        //dd($books);
        return view('pages.shelves', compact('books', 'categories', 'book', 'desc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shelves  $shelves
     * @return \Illuminate\Http\Response
     */
    public function edit(shelves $shelves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shelves  $shelves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shelves $shelves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shelves  $shelves
     * @return \Illuminate\Http\Response
     */
    public function destroy(shelves $shelves)
    {
        //
    }
}
