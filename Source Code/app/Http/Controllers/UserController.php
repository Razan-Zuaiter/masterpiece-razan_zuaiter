<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {

        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.manageUsers', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'User deleted!');
    }
}
