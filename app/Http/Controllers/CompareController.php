<?php

namespace App\Http\Controllers;

use App\Models\Compare;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    
    public function index()
    {
        // This method is currently empty, might contain logic to display a list of comparisons.
    }

    /**
     * Display the comparison page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function viewpage()
    {
        $list = Vehicle::get();
        
        $comparedVehicles = Compare::all();
        
        $vehiclesData = [];
        
        foreach ($comparedVehicles as $comparison) {
            $compareVehicleID = $comparison->id;
            $vehicle = Vehicle::find($comparison->vehicle_id);
            
            // If the vehicle exists, fetch its images
            if ($vehicle) {
                $images = DB::table('vehicle_images')
                            ->where('vehicle_id', $vehicle->id)
                            ->get();
                
                // Store vehicle data in the array
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
     * Display the form for creating a new comparison.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        // This method is currently empty, might contain logic to display the create form.
    }

    /**
     * Store a newly created comparison in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'vehicle_id' => 'required', 
        ]);
        
        
        $user = Auth::user();

        
        $selected_vehicle_id = $request->input('vehicle_id'); 

        // If a vehicle ID is provided, create a new comparison
        if (!empty($selected_vehicle_id)) {
            // Create a new comparison instance
            $compare = new Compare();

            // Assign vehicle ID and user ID to the comparison
            $compare->vehicle_id = $selected_vehicle_id;
            $compare->user_id = $user->id; 
            $compare->save();
        }

        return redirect()->route('compare.viewpage')->with('success', 'Vehicle Successfully Added for comparison');
    }

   
    public function show(Compare $compare)
    {
    }

    
    public function edit(Compare $compare)
    {
        
    }

    
    public function update(Request $request, Compare $compare)
    {
        
    }

   
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

