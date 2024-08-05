<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pagescontroller extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }
    public function blogs()
    {
        $blog = \App\Models\postmodel::all();
        return view('blogs', compact('blog'));
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
    // public function blogupload(Request $request)
    // {

    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'imagePath' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
    //     ]);
    //     dd($request->all());
    //     $imageName = time() . '.' . $request->imagePath->extension();

    //     $request->imagePath->move(public_path('images'), $imageName);

    //     return back()
    //         ->withSuccess('You have successfully uploaded the image!')
    //         ->withImageName($imageName);
    //     return redirect('/blogs');

    // }
    public function blogupload(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'imagePath' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->imagePath->extension();
        $request->imagePath->move(public_path('images'), $imageName);

        // Save blog data to the database
        \App\Models\postmodel::create([
            'title' => $request->title,
            'description' => $request->description,
            'imagePath' => $imageName
        ]);

        return redirect('/blogs')->withSuccess('Blog posted successfully!');
    }


    // public function blogsInsert(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
    //         'description' => 'required|string',
    //     ]);

    //     // Create a new instance of your model
    //     $blogs = new \App\Models\postmodel;

    //     // Assign the title from the request
    //     $blogs->title = $request->input('title');

    //     // Handle the image upload
    //     if ($request->hasFile('imagePath')) {
    //         $image = $request->file('imagePath');
    //         dd('Uploaded image:', ['path' => $image->getClientOriginalName()]);
    //         $imagePath = $image->store('img', 'public');
    //         $blogs->imagePath = $imagePath;
    //     } else {
    //         dd('No image file found in request.');
    //     }


    //     // Assign the description from the request
    //     $blogs->description = $request->input('description');

    //     // Save the model instance to the database
    //     $blogs->save();

    //     // Redirect to the blogs page or return a success message
    //     return redirect('/blogs');
    // }

    // public function blogsInsert()
    // {
    //     $blogs = new \App\Models\postmodel;
    //     $blogs->title = request('title');
    //     $blogs->imagePath = request('imagePath');
    //     $blogs->description = request('description');
    //     $blogs->save();
    //     return redirect('/blogs');
    //     // return view('blogs');
    // }
    public function show(\App\Models\postmodel $blogData)
    {
        return view('show', compact('blogData'));
    }
    public function edit(\App\Models\postmodel $blogData)
    {
        return view('edit', compact('blogData'));
    }

    // public function update(Request $request, \App\Models\postmodel $blogData)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'image' => 'sometimes|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
    //         'description' => 'required|string',
    //     ]);

    //     // Update the title and description
    //     $blogData->title = $request->input('title');
    //     $blogData->description = $request->input('description');

    //     // Handle the image upload if a new image is provided
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imagePath = $image->store('images', 'public'); // Save image to storage/app/public/images
    //         $blogData->imagePath = $imagePath;
    //     }

    //     // Save the updated model instance to the database
    //     $blogData->save();

    //     // Redirect to the blogs page or return a success message
    //     return view('/blogs');
    // }

    // public function update(\App\Models\postmodel $blogData)
    // {
    //     // return view('show', compact('blogData'));
    //     $blogData->update(request(['title', 'imagePath', 'description']));
    //     return redirect('/blogs');
    // }
    public function update(Request $request, \App\Models\postmodel $blogData)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'imagePath' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048' // Validation for optional image
        ]);
    
        // Update the blog post fields
        $blogData->title = $request->input('title');
        $blogData->description = $request->input('description');
    
        // Handle the image upload if a new image is provided
        if ($request->hasFile('imagePath')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->file('imagePath')->extension();
    
            // Move the uploaded file to the public images directory
            $request->file('imagePath')->move(public_path('images'), $imageName);
    
            // Update the blog's imagePath with the new image name
            $blogData->imagePath = $imageName;
        }
    
        // Save the updated model instance to the database
        $blogData->save();
    
        // Redirect or return success response
        return redirect('/blogs')->with('success', 'Blog updated successfully!');
    }
    

    public function delete(\App\Models\postmodel $blogData)
    {
        $blogData->delete();
        return redirect('/blogs');
    }
}
