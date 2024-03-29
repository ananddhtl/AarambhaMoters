<?php

namespace App\Http\Controllers;
use App\Models\VehicleCategory;
use App\Models\Vehicle;
use App\Models\VehicleImages;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $category = VehicleCategory::get();
    
        $vehicles = Vehicle::leftJoin('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
                            ->where('vehicles.status', 1)
                            ->select('vehicles.*', 'vehicle_images.vehicle_images as image_path')
                            ->get();
    
      
        $vehicles = $vehicles->groupBy('id')->map(function ($grouped) {
            $images = $grouped->pluck('image_path')->toArray();
            $grouped[0]->image_path = $images;
            return $grouped[0];
        });
    
        return view('frontend.index', compact('category', 'vehicles'));
    }

    public function vehicledetails($id)
{
   
    $vehicle = Vehicle::findOrFail($id);

   
    $images = VehicleImages::where('vehicle_id', $id)->pluck('vehicle_images')->toArray();

    $car_info = $vehicle->car_info;
    $car_overview = $vehicle->overviews;
    $features = $vehicle->features;
    $engine_performance = $vehicle->engine_performance;
    return view('frontend.vehicledetails', compact('vehicle', 'images','car_info','car_overview','features','engine_performance'));
}
    
    
    

}