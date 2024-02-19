<?php

namespace App\Http\Controllers;

use App\Models\VehicleCategory;
use Illuminate\Http\Request;

class VehicleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list =  VehicleCategory::get();
        return view('admin.category.list',compact('list'));
    }
    public function addcategory()
    {
       
        return view('admin.category.add');
    }

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
        $image->move(public_path('category/thumbnail'), $imageName); 
        
        // Store the full image path in a variable
        $fullImagePath = 'category/thumbnail/' . $imageName;
    }
    
    // Create a new instance of the VehicleCategory model
    $category = new VehicleCategory();
    $category->brand_name = $request->categoryname;
    
    // Check if full image path is set, and if so, store it in the database
    if (isset($fullImagePath)) {
        $category->brand_image = $fullImagePath; 
    }
    
    $category->description = $request->categorydescription;
    $category->save();
    
    return redirect()->route('categories.list')->with('success', 'Category created successfully');
}

    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show(VehicleCategory $vehicleCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleCategory $vehicleCategory, $id)
    {
        $editcategory =  VehicleCategory::find($id);
        return view('admin.category.edit',compact('editcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleCategory $vehicleCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleCategory $vehicleCategory, $id)
    {
        $category = VehicleCategory::find($id);
        if (!$category) {
            return response()->json(['error' => 'Category  not found'], 404);
        }
        $category->delete();
        return redirect()->back()->with('message', 'Your data has been deleted successfully');
    }
}