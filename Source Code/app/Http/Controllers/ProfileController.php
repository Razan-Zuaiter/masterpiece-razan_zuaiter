<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->user_id;
        $userBooks = DB::table('orders')->join('users', 'orders.user_id', '=', 'users.user_id')->join('books', 'orders.book_id', '=', 'books.book_id')->select('orders.*', 'books.*')
            ->where('orders.user_id', '=', $id)->get();
        $userShelves = DB::table('shelves')->join('users', 'shelves.user_id', '=', 'users.user_id')->join('books', 'shelves.book_id', '=', 'books.book_id')->select('shelves.*', 'books.*')
            ->where('shelves.user_id', '=', $id)->get();
        $userId = User::find($id);
        //dd($userBooks->first()->order_id);
        return view('pages.profile', compact('userId', 'userBooks', 'userShelves'));
        //return view('pages.profile');
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
        $user = User::find($id);
        return redirect('profile', compact('user'));
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
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->admin_image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $user = User::find($id);
            $imageName = $user->image;
        }
        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->email = $request->get('email');
        $user->image = $imageName;
        $user->save();

        return redirect('profile')->with('success', 'Contact updated!');
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
