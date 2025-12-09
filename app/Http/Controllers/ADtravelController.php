<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ADtravelController extends Controller
{
    public function travel()
    {
        $allblogs = Blog::with(['category', 'status'])->
            whereHas('category', function ($q) {
                $q->where('name', 'Travel');
            })
            ->latest('id')
            ->get();


        return view('admin.AdTravel', compact("allblogs"));
    }
}
