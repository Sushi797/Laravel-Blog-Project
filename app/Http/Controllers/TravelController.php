<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function travel()
    {
        $latestTravel = Blog::with(['category', 'status'])
            ->whereHas('status', function ($q) {
                $q->where('name', 'Popular');
            })
            ->whereHas('category', function ($q) {
                $q->where('name', 'Travel');
            })
            ->latest('id')
            ->first(); // we just need one record


        $FullblogsT = Blog::with(['category', 'status'])
            ->whereHas('category', fn($q) => $q->where('name', 'Travel'))
            ->latest()
            ->get();

        return view('Travel', compact('latestTravel', 'FullblogsT'));
    }

}
