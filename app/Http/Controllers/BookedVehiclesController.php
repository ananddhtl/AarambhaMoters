<?php

namespace App\Http\Controllers;

use App\Models\BookedVehicles;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;

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
        
        $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required', 
            'phone' => 'required', 
            'date' => 'required',
            'message' => 'required',
           
        ]);
        
        
        $data = new BookedVehicles();
        $data->user_id = $request->user_id;
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
    $data = DB::table('booked_vehicles')
            
            ->join('vehicles', 'booked_vehicles.vehicle_id', '=', 'vehicles.id')
            ->select('booked_vehicles.*', 'vehicles.*')->where('booked_vehicles.status',0)
            ->get();

    return view('backend.bookedpending', compact('data'));
    }

    public function bookedapproval()
    {
        $data = DB::table('booked_vehicles')
            
        ->join('vehicles', 'booked_vehicles.vehicle_id', '=', 'vehicles.id')
        ->select('booked_vehicles.*', 'vehicles.*')->where('booked_vehicles.status',1)
        ->get();
        return view('backend.bookedapproval', compact('data'));
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

    public function verifyPayment(Request $request)
    {
        $token = $request->token;

        $args = http_build_query(array(
            'token' => $token,
            'amount'  => 1000
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $secret_key = config('app.khalti_secret_key');

        $headers = ["Authorization: Key $secret_key"];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

       
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function storePayment(Request $request)
    {
       
        return response()->noContent();
    }
}