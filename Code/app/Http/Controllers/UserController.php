<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Order;

class UserController extends Controller
{

    public function index()
    {
        if (Auth::user() == null) {

            return redirect('login');
        } else {
            $order = Order::where('user_id', Auth::user()->id)->get();
            return view('/', compact('order'));
        }
    }
}
