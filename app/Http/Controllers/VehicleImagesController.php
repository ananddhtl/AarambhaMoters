<?php

namespace App\Http\Controllers;

use App\Models\VehicleImages;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class VehicleImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
     public function index()
     {
         $list = VehicleImages::join('vehicles', 'vehicle_images.vehicle_id', '=', 'vehicles.id')
                              ->select('vehicle_images.*', 'vehicles.*')
                              ->get();
                              
         return view('backend.uploadimage.list', compact('list'));
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
    public function store(Request $request)
    {
    
    
    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = time().'.'.$image->extension(); 
        $image->move(public_path('vehicle/images'), $imageName); 
        

        $fullImagePath = 'vehicle/images/' . $imageName;
    }
    
  
    $vehicleImages = new VehicleImages();
    $vehicleImages->vehicle_id = $request->vehicle_id;
    

    if (isset($fullImagePath)) {
        $vehicleImages->vehicle_images = $fullImagePath; 
    }
    
   
    $vehicleImages->save();
    
    return redirect()->route('vehicleimages.list')->with('success', 'Images uploaded successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(VehicleImages $vehicleImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleImages $vehicleImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleImages $vehicleImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleImages $vehicleImages, $id)
    {
        $category = VehicleImages::find($id);
        if (!$category) {
            return response()->json(['error' => 'Image  not found'], 404);
        }
        $category->delete();
        return redirect()->back()->with('message', 'Your data has been deleted successfully');
    }

    public function uploadimage ()
    {
        $user = Auth::user();
        $vehicle =  Vehicle::select('id','name')->where('seller_id', $user->id)->get();
        return view('backend.uploadimage.add',compact('vehicle'));
       
    }
}