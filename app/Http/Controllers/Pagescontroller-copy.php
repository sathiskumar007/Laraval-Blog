<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pagescontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function blogs()
    {
        $blog = \App\Models\postmodel::all();
        return view('blogs', compact('blog'));
        // return view('blogs');
    }
    public function ourstories()
    {
        return view('ourstories');
    }
    public function recipes()
    {
        return view('recipes');
    }
    public function blogsCreate()
    {
        return view('blogsCreate');
        // if (Auth::user()->name == 'admin') {
        //     return view('blogsCreate');
        // } else {
        //     abort(404, 'only admin create this blog');
        // }
    }
    public function blogCreate()
    {
        $blogs = new \App\Models\postmodel;
        $blogs->title = request('title');
        $blogs->imagePath = request('imagePath');
        $blogs->description = request('description');
        $blogs->save();
        return redirect('/blogs');
        // return view('blogs');
    }
    public function show(\App\Models\postmodel $blogData)
    {
        return view('show', compact('blogData'));
    }
    public function edit(\App\Models\postmodel $blogData)
    {
        return view('edit', compact('blogData'));
    }
    public function update(\App\Models\postmodel $blogData)
    {
        // return view('show', compact('blogData'));
        $blogData->update(request(['title','imagePath', 'description']));
        return redirect('/blogs');
    }
    public function delete(\App\Models\postmodel $blogData)
    {
        $blogData->delete();
        return redirect('/blogs');
    }
}
