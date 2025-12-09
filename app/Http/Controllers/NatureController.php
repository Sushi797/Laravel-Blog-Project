<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class NatureController extends Controller
{
        public function nature()
    {
        $latestNature = Blog::with(['category', 'status'])
            ->whereHas('category', function ($q) {
                $q->where('name', 'Nature');
            })
            ->latest('id')
            ->first(); // we just need one record


        $FullblogsN = Blog::with(['category', 'status'])
            ->whereHas('category', fn($q) => $q->where('name', 'Nature'))
            ->latest()
            ->get();

        return view('Nature', compact('latestNature', 'FullblogsN'));
    }
}
