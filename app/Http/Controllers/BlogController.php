<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $list =  Blog::get();
        return view('admin.blog.list',compact('list'));
    }

    public function addblog()
    {
       
        return view('admin.blog.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function blogdescription(Blog $blog, $id)
    {
        $blogdesc =  Blog::find($id);
        return view('frontend.blogdescription',compact('blogdesc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   
    {
       
        $request->validate([
            'categoryname' => 'required|string|max:255', 
            'img' => 'required', 
            'categorydescription' => 'required|string', 
        ]);
        
        // Check if file is present in the request
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->extension(); 
            $image->move(public_path('blog/thumbnail'), $imageName); 
            
            // Store the full image path in a variable
            $fullImagePath = 'blog/thumbnail/' . $imageName;
        }
        
        // Create a new instance of the VehicleCategory model
        $blog = new Blog();
        $blog->title = $request->categoryname;
        
        // Check if full image path is set, and if so, store it in the database
        if (isset($fullImagePath)) {
            $blog->thumbnail = $fullImagePath; 
        }
        
        $blog->description = $request->categorydescription;
        $blog->save();
        
        return redirect()->route('blog.list')->with('success', 'Blog created successfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog, $id)
    {
        $editblog =  Blog::find($id);
        return view('admin.blog.edit',compact('editblog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog, $id)
    {
        {
       
           
            $blog =  Blog::findOrFail($id);
           
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time().'.'.$image->extension(); 
                $image->move(public_path('blog/thumbnail'), $imageName); 
                
              
                $fullImagePath = 'blog/thumbnail/' . $imageName;
            }
            
         
       
            $blog->title = $request->categoryname;
            
           
            if (isset($fullImagePath)) {
                $blog->thumbnail = $fullImagePath; 
            }
            
            $blog->description = $request->categorydescription;
            $blog->save();
            
            return redirect()->route('blog.list')->with('success', 'Blog updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog, $id)
    {
       
        $blog = Blog::find($id);
        if (!$blog) {
            return response()->json(['error' => 'Blog  not found'], 404);
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Your data has been deleted successfully');
    }
}