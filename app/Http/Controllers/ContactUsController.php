<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactus()
    {
        return view("ContactUs");
    }
}
