<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    public function index()
    {
        $users = User::all();
        return view('admin.manageUser', compact('users'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'role' => 'min:3',
            'password' => 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }
        $var = new User;
        $var->name = $request->input('name');
        $var->email = $request->input('email');
        $var->password = $request->input('password');
        $var->role = $request->input('role');
        $var->image = $imageName;
        $var->save();
        return back()->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $User = User::find($id);
        return view('admin.editUser', compact('User'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $admin = User::find($id);
            $imageName = $admin->image;
        }

        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->image = $imageName;
        $user->save();

        return redirect('/manageUser')->with('success', 'Contact updated!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return back()->with('success', 'Admin deleted!');
    }
}
