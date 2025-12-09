<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SportController extends Controller
{
        public function sport()
    {
        $latestSport = Blog::with(['category', 'status'])
            ->whereHas('status', function ($q) {
                $q->where('name', 'Popular');
            })
            ->whereHas('category', function ($q) {
                $q->where('name', 'Sport');
            })
            ->latest('id')
            ->first(); // we just need one record


        $FullblogsS = Blog::with(['category', 'status'])
            ->whereHas('category', fn($q) => $q->where('name', 'Sport'))
            ->latest()
            ->get();

        return view('Sport', compact('latestSport', 'FullblogsS'));
    }
}
