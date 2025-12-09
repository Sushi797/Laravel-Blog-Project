<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class ADrecentController extends Controller
{
    public function recent()
    {
        $allblogs = Blog::latest('id')->take(6)->get();

        return view('admin.AdRecent', compact('allblogs'));
    }
}
