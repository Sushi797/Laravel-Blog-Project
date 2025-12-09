<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ADHomeController extends Controller
{
    public function Adhome()
    {
        return view("admin.Home");
    }
}
