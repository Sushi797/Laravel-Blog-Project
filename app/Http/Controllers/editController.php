<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;

class editController extends Controller
{
    public function Edit($id)
    {
        $categories = Category::all();
        $statuses = Status::all();
        
        $blog = Blog::find($id);
        return view('CRUD.edit_form', compact('blog', 'categories', 'statuses'));

    }
}
