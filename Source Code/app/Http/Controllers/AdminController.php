<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function index()
    {
        $admins = Admin::all();
        return view('admin.manageAdmins', compact('users'));
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
        $var = new Admin();
        $var->name = $request->input('name');
        $var->email = $request->input('email');
        $var->password = Hash::make($request->input('password'));
        // $var->role = $request->input('role');
        $var->image = $imageName;
        $var->save();
        return redirect('/admin/manageAdmins')->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.editAdmin', compact('admin'));
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
            $admin = Admin::find($id);
            $imageName = $admin->image;
        }

        $admin = Admin::find($id);
        $admin->name =  $request->get('name');
        $admin->email = $request->get('email');
        $admin->password = $request->get('password');
        $admin->image = $imageName;
        $admin->save();

        return redirect('admin/manageAdmins')->with('success', 'Admin updated!');
    }

    public function destroy($id)
    {

        //delete the image from the folder if it is anything but keep it if it is the default image
        $admin = Admin::find($id);
        if ($admin->image != 'default.png') {
            File::delete(public_path('images/' . $admin->image));
        }
        $admin->delete();
        return back()->with('success', 'Admin deleted!');
    }

    public function view()
    {
        $users = User::count();
        return view('admin.index', compact('users'));
    }
}
