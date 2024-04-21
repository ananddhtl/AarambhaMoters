<?php

namespace App\Http\Controllers;

use App\Models\BookedVehicles;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class BookedVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
       
        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('message', 'Please login first ');
        }
        
        $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required', 
            'phone' => 'required', 
            'date' => 'required',
            'message' => 'required',
           
        ]);
        
     
        $data = new BookedVehicles();
        $data->user_id = $user->id;
        $data->vehicle_id = $request->vehicle_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->visiting_date = $request->date;
        $data->save();
        
        return redirect()->back()->with('success', 'Data has been saved successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(BookedVehicles $bookedVehicles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookedVehicles $bookedVehicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookedVehicles $bookedVehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookedVehicles $bookedVehicles)
    {
        //
    }

    public function bookedpending()
    {
    $user = Auth::user();
    $data = DB::table('booked_vehicles')
            
            ->join('vehicles', 'booked_vehicles.vehicle_id', '=', 'vehicles.id')
            ->select('booked_vehicles.*', 'vehicles.*')->where('booked_vehicles.status',0)->where('user_id', $user->id)
            ->get();

    return view('backend.bookedpending', compact('data'));
    }

    public function bookedapproval()
    {
        $user = Auth::user();
        
        $data = DB::table('booked_vehicles')
            ->join('vehicles', 'booked_vehicles.vehicle_id', '=', 'vehicles.id')
            ->select('booked_vehicles.id as booked_vehicleid', 'booked_vehicles.*', 'vehicles.*')
            ->where('booked_vehicles.status', 1)
            ->where('booked_vehicles.user_id', $user->id)
            ->get();
    
        return view('backend.bookedapproval', compact('data'));
    }

    public function orderhistory()
    {
        $user = Auth::user();
        
        $data = DB::table('booked_vehicles')
            ->join('vehicles', 'booked_vehicles.vehicle_id', '=', 'vehicles.id')
            ->select('booked_vehicles.id as booked_vehicleid', 'booked_vehicles.*', 'vehicles.*')
            ->where('booked_vehicles.status', 2)
            ->where('booked_vehicles.user_id', $user->id)
            ->get();
    
        return view('backend.orderhistory', compact('data'));
    }
    

    public function bookedvehiclesadmin()
    {
        $data = DB::table('booked_vehicles')
                ->join('vehicles', 'booked_vehicles.vehicle_id', '=', 'vehicles.id')
                ->join('users', 'vehicles.seller_id', '=', 'users.id')
               
                ->select('booked_vehicles.*', 'vehicles.name as vehicle_name', 'users.name as seller_name')
                ->get();
          
        return view('admin.bookedvehicles', compact('data'));
    }

    public function confirmbooking(BookedVehicles $bookedVehicles, $id)
    {
        $bookedVehicles = BookedVehicles::findOrFail($id);
        $bookedVehicles->status = 1;
        $bookedVehicles->save();
    
     
       
        $data = [
            'email' => $bookedVehicles->email, 
            'message' => "This is the text message"
        ];
    
        Mail::send('email.confirmbooking', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Your Vehicle has been approved');
            $message->from('amritkadel10@gmail.com');
        });
        return redirect()->back()->with('success', 'Vehicle Approved Successfully');
    }

    public function notifyseller($id)
    {
       
        $bookedVehicle = BookedVehicles::select('booked_vehicles.*', 'vehicles.*', 'users.email as seller_email')
            ->join('vehicles', 'booked_vehicles.vehicle_id', '=', 'vehicles.id')
            ->join('users', 'vehicles.seller_id', '=', 'users.id')
            ->where('booked_vehicles.id', $id)
            ->first(); 
    
       
        if (!$bookedVehicle) {
            return redirect()->back()->with('error', 'Booked vehicle not found');
        }
    
       
        $bookedVehicle->status = 2;
        $bookedVehicle->save();
    
        
        $data = [
            'email' => $bookedVehicle->seller_email,
            'message' => "This is the text message"
        ];

        Mail::send('email.bookvehicle', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Your Vehicle has been booked');
            $message->from('amritkadel10@gmail.com');
        });
    
        return redirect()->back()->with('success', 'Seller Notified Successfully');
    }

    public function verifyPayment(Request $request)
{
    // Get token and itemId from the request
    $token = $request->token;
    $itemId = $request->itemId;

    // Construct the request parameters
    $args = http_build_query([
        'token' => $token,
        'amount' => 1000

    ]);
 

    // Khalti API endpoint
    $url = "https://khalti.com/api/v2/payment/verify/";

    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Set authorization header
    $secret_key = config('app.khalti_secret_key');
    $headers = ["Authorization: Key $secret_key"];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute cURL request
    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

   
    return $response;
}

public function storePayment(Request $request)
{

    
    $bookedVehicle = BookedVehicles::where('id', $request->itemId)->first();
    
    if (!$bookedVehicle) {
        return response()->json(['message' => 'Booked vehicle not found'], 404);
    }

    $bookedVehicle->status = 2;
    $bookedVehicle->save();
   
    return response()->noContent();
}


}