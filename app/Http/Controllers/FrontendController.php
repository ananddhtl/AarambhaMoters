<?php

namespace App\Http\Controllers;
use App\Models\VehicleCategory;
use App\Models\Vehicle;
use App\Models\VehicleImages;
use App\Models\Blog;
use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    
        $blog = Blog::orderBy('id', 'DESC')->get();
      
        return view('frontend.index', compact('category', 'vehicles','blog'));
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
    
public function searchpage(Request $request){
    $query = $request->input('query');
    
    $vehicles = Vehicle::leftJoin('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
        ->where('vehicles.status', 1)
        ->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('vehicles.name', 'like', '%' . $query . '%')
                         ->orWhere('vehicles.location', 'like', '%' . $query . '%');
        })
        ->select('vehicles.*', 'vehicle_images.vehicle_images as image_path')
        ->get();

    return view('frontend.search', compact('vehicles'));
}

public function faqpage(Request $request){

    $faq = FAQ::all();
    return view('frontend.faq', compact('faq'));
}
public function contactus(Request $request){

   
    return view('frontend.contactus');
}
    
 public function contactusdata(Request $request)
 {
    
    $data = [
        'fullname' => $request->fullname, 
        'phone' => $request->phone, 
        'email' => $request->email, 
        'subject' => $request->subject,
        'shortnotes' =>  $request->shortnotes
    ];

    Mail::send('email.contactus', $data, function ($message) use ($data) {
        $message->to('amritkadel10@gmail.com');
        $message->subject('From the website contact page');
        $message->from($data['email']);
    });
    return redirect()->back()->with('success', 'Vehicle Approved Successfully');
}

 }

