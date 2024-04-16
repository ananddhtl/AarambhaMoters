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
           
            $vehicle = Vehicle::find($comparison->vehicle_id);
            
         
            $images = DB::table('vehicle_images')
                        ->where('vehicle_id', $vehicle->id)
                        ->get();
    
          
            $vehiclesData[] = [
                'vehicle' => $vehicle,
                'images' => $images
            ];
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
    $compare = new Compare();
    $compare->vehicle_id = $request->vehicle_id;
    $compare->user_id = $user->id;
    $compare->save();
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
    public function destroy(Compare $compare)
    {
        //
    }
}
