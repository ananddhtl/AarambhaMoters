<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\VehicleCategory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $list = Vehicle::where('seller_id', $user->id)->get();
        return view('backend.vehicle.list', compact('list'));
    }
    public function addvehicle()
    {
        $vehiclecategory = VehicleCategory::all();
        return view('backend.vehicle.add', compact('vehiclecategory'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        
        $carInfo = json_encode($request['carInfo']);
        $carKeyFeatures = json_encode($request['carKeyFeatures']);
        $carOverview = json_encode($request['carOverview']);
        $carperformance = json_encode($request['enginePerformance']);
        $vehicle = new Vehicle();
        $vehicle->seller_id = $user->id;
        $vehicle->name = $request['vehiclename'];
        $vehicle->category_id = $request['vehiclename'];
        $vehicle->price = $request['vehicleprice'];
        $vehicle->location = $request['vehiclelocation'];
        $vehicle->car_info = $carInfo;
        $vehicle->key_features = $carKeyFeatures;
        $vehicle->engine_performance = $carperformance;
        $vehicle->overviews = $carOverview;
        $vehicle->save();
        return response()->json(['message' => 'Data stored successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }

    public function acceptVehicle(Request $request, Vehicle $vehicle, $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->status = 1;
        $vehicle->save();
    
     
        $sellerEmail = User::join('vehicles', 'users.id', '=', 'vehicles.seller_id')
                            ->where('vehicles.id', $id)
                            ->value('users.email');
    
        $data = [
            'email' => $sellerEmail, 
            'message' => "This is the text message"
        ];
    
        Mail::send('email.emailtemplate', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Your Vehicle has been approved');
            $message->from('amritkadel10@gmail.com');
        });
        return redirect()->back()->with('success', 'Vehicle Approved Successfully');
    }
    
}