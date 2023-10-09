<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category.index', ['categories' => Category::all()]);
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;

        $category->save();

        return back()->with('message', 'Category Added Successfully');
    }
}
