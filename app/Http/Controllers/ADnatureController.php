<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ADnatureController extends Controller
{
     public function nature()
    {
        $allblogs = Blog::with(['category', 'status'])->
            whereHas('category', function ($q) {
                $q->where('name', 'Nature');
            })
            ->latest('id')
            ->get();


        return view('admin.AdNature', compact("allblogs"));
    }
}
