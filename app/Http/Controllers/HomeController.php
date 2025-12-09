<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $popularslide = Blog::with(['category', 'status'])
            ->whereHas('status', function ($q) {
                $q->where('name', 'Popular');
            })
            ->latest('id')
            ->take(3)
            ->get();


        // Get 7 latest popular blogs
        $popularBlogs = Blog::with(['category', 'status'])
            ->whereHas('status', function ($q) {
                $q->where('name', 'Popular');
            })
            ->latest()
            ->take(7)
            ->get();

        // Get 4 latest "Food" blogs
        $foodBlogs = Blog::with(['category', 'status'])
            ->whereHas('category', function ($q) {
                $q->where('name', 'Food');
            })
            ->latest()
            ->take(7)
            ->get();

        $sportBlogs = Blog::with(['category', 'status'])
            ->whereHas('category', function ($q) {
                $q->where('name', 'Sport');
            })
            ->latest()
            ->take(5)
            ->get();

        return view("home", compact("popularslide","popularBlogs", "foodBlogs", "sportBlogs"));
    }


}
