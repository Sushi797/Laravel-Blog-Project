<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;

class cretaeController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();

        return view('CRUD.create_form', compact('categories', 'statuses'));
    }

    public function Update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required',
            'status_id' => 'required',
            'description' => 'required|string|max:800',
            'img_path' => 'required|mimes:jpg,png,jpeg'
        ]);

        if (!isset($request->id)) {
            $blog = new Blog();
        }

        if ($request->id) {
            $blog = Blog::find($request->id);
        }

        if ($request->hasFile("img_path")) {
            $file = $request->file("img_path");
            $filename = uniqid() . "." . $file->getClientOriginalExtension();
            $filePath = $file->storeAs("Img", $filename, "public");
            $blog->img_path = "storage/" . $filePath;
        }

        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->status_id = $request->status_id;
        $blog->description = $request->description;
        $blog->save();

        return redirect('AD')->with('success', 'Blog updated successfully!');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        if (isset($blog)) {
            $blog->delete();
        }
        return redirect()->back()->with("success", "");
    }

}
