<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function food()
    {
        $latestFood = Blog::with(['category', 'status'])
            ->whereHas('status', function ($q) {
                $q->where('name', 'Popular');
            })
            ->whereHas('category', function ($q) {
                $q->where('name', 'Food');
            })
            ->latest('id')
            ->first(); // we just need one record


        $FullblogsF = Blog::with(['category', 'status'])
            ->whereHas('category', fn($q) => $q->where('name', 'Food'))
            ->latest()
            ->get();

        return view('Food', compact('latestFood', 'FullblogsF'));
    }

}
