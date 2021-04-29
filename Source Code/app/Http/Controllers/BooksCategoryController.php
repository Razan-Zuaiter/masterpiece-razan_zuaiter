<?php

namespace App\Http\Controllers;

use App\Category;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.manageCategory', compact('categories'));
    }
    public function store(Request $request)
    {
        request()->validate([
            'category_name'  => 'required',
            'category_description' => 'required',
            'category_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if (!empty(request()->category_image)) {
            $imageName = time() . '.' . request()->category_image->getClientOriginalExtension();
            request()->category_image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }

        $var = new Category();
        $var->category_name = $request->input('category_name');
        $var->category_description = $request->input('category_description');
        $var->category_image = $imageName;

        $var->save();
        return back()->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name'  => 'required',
            'category_description' => 'required',
            'category_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if (!empty(request()->category_image)) {
            $imageName = time() . '.' . request()->category_image->getClientOriginalExtension();
            request()->category_image->move(public_path('images'), $imageName);
        } else {
            $category = Category::find($id);
            $imageName = $category->category_image;
        }

        $category = Category::find($id);
        $category->category_name =  $request->get('category_name');
        $category->category_description = $request->get('category_description');
        $category->category_image = $imageName;
        $category->save();

        return redirect('/manageCategory')->with('success', 'Contact updated!');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return back()->with('success', 'Category deleted!');
    }
}
