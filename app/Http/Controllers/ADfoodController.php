<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ADfoodController extends Controller
{
    public function food()
    {
        $allblogs = Blog::with(['category', 'status'])->
            whereHas('category', function ($q) {
                $q->where('name', 'Food');
            })
            ->latest('id')
            ->get();


        return view('admin.AdFood', compact("allblogs"));
    }
}
