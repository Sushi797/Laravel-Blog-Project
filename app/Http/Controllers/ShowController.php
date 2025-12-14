<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
     public function show($id)
    {
        $blog = Blog::with(['category', 'status'])->findOrFail($id);

        return view('Show', compact('blog'));
    }
}
