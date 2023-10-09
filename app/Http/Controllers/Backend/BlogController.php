<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('backend.blog.index', ['blogs' => Blog::all()]);
    }

    public function create()
    {
        return view('backend.blog.create', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $blog = new Blog();

        $blog->name = $request->name;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        $image = $request->image;

        if ($image) {
            $path = 'assets/blog-images/';
            $imageName = time() . rand() . '.' . $image->extension();

            $image->move($path, $imageName);
            $blog->image = $path . $imageName;
        }

        $blog->save();

        return back()->with('message', 'Blog Added Successfully');
    }

    public function show(int $id)
    {

        return view('frontend.blog.detailse', ['blogs' => Blog::find($id), 'categories' => Category::all()]);
    }
}
