<?php

namespace App\Http\Controllers;

use App\Book;
use App\Order;
use App\orders_books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        return view('pages.cart');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $product = Book::find($id);

        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        //dd($cart);
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "id" => $product->book_id,
                    "name" => $product->book_name,
                    "quantity" => 1,
                    "price" => $product->book_price,
                    "photo" => $product->book_image
                ]
            ];
            session()->put('cart', $cart);

            return back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->book_id,
            "name" => $product->book_name,
            "quantity" => 1,
            "price" => $product->book_price,
            "photo" => $product->book_image
        ];
        session()->put('cart', $cart);
        //dd(session()->put('cart', $cart));
        return back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        } elseif (isset($request->isMulti)) {
            foreach ($request->data as $id => $quantity) {
                $cart = session()->get('cart');
                $cart[$id]["quantity"] = $quantity;
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Cart updated successfully');
        };
        //var_dump($request->data);
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function cart()
    {
        return view('cart');
    }

    public function edit($id)
    {
    }


    // public function update(Request $request, $id)
    // {
    //     //
    // }

    public function destroy($id)
    {
    }
}
