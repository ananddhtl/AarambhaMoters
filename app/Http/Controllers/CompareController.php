<?php

namespace App\Http\Controllers;

use App\Models\Compare;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function viewpage()
    {
        $list = Vehicle::get();
        
        $comparedVehicles = Compare::all();
        
        $vehiclesData = [];
        
        foreach ($comparedVehicles as $comparison) {
            // Get the ID of the comparison
            $compareVehicleID = $comparison->id;
            
            // Find the vehicle related to the comparison
            $vehicle = Vehicle::find($comparison->vehicle_id);
            
            if ($vehicle) {
                // Get images related to the vehicle
                $images = DB::table('vehicle_images')
                            ->where('vehicle_id', $vehicle->id)
                            ->get();
                
                // Add vehicle data to the vehiclesData array
                $vehiclesData[] = [
                    'vehicle' => $vehicle,
                    'images' => $images,
                    'compareVehicleID' => $compareVehicleID
                ];
            }
        }
        
        return view('frontend.compare', compact('list', 'vehiclesData'));
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
    $request->validate([
        'vehicle_id' => 'required', 
       
    ]);
    $user = Auth::user();
  


$selected_vehicle_id = $request->input('vehicle_id'); 

if (!empty($selected_vehicle_id)) {
  
    $compare = new Compare();


    $compare->vehicle_id = $selected_vehicle_id;


    $compare->user_id = $user->id; // Assuming the user_id property is named 'id' in your User model

    // Now save the $compare object
    $compare->save();
} else {
    // Handle the case where the selected vehicle ID is empty or not provided
    // You can redirect back or show an error message to the user
}

    return redirect()->route('compare.viewpage')->with('success', 'Vehicle Successfully Added for the compare');


    }

    /**
     * Display the specified resource.
     */
    public function show(Compare $compare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compare $compare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compare $compare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $compare = Compare::find($id);
        if (!$compare) {
            return response()->json(['error' => 'Vehicle  not found'], 404);
        }
        $compare->delete();
        return redirect()->back()->with('message', 'Your data has been deleted successfully');
    }
    
}
