<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ADsportController extends Controller
{
     public function sport()
    {
        $allblogs = Blog::with(['category', 'status'])->
            whereHas('category', function ($q) {
                $q->where('name', 'Sport');
            })
            ->latest('id')
            ->get();


        return view('admin.AdSport', compact("allblogs"));
    }
}
