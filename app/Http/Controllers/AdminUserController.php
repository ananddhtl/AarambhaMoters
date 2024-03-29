<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Redirect;
use App\Models\Vehicle;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Currently empty; this method could be used to display a list of resources.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Currently empty; this method is used to show the form for creating a new resource.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Hash the user's password before storing it in the database.
            $password = Hash::make($request->password);

            // Create a new AdminUser instance and set its properties from the request.
            $user = new AdminUser();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $password;

            // Save the user in the database.
            $user->save();

            // Set a session variable and redirect to a specified location.
            $request->session()->put('sessionUserId', $password);
            return redirect('/admin-loginlogin')->with('message', 'Your account has been registered successfully');
        } catch (ValidationException $e) {
            // Catch any validation errors and redirect back with error messages and input.
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            // Catch any other exceptions and return the error message.
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminUser $adminUser)
    {
        // Currently empty; this method could be used to display a specific resource.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminUser $adminUser)
    {
        // Currently empty; this method is used to show the form for editing a resource.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminUser $adminUser)
    {
        // Currently empty; this method could be used to update a specific resource.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminUser $adminUser)
    {
        // Currently empty; this method could be used to delete a specific resource.
    }

    /**
     * Show the login form.
     */
    public function login(Request $request)
    {
        try {
            // Validate the email and password from the request.
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:6'],
            ]);

            // Get the email and password from the request.
            $email = $request->email;
            $password = $request->password;

            // Query the admin_users table to find a user with the provided email.
            $user = DB::table('admin_users')->where('email', $email)->get();

            // Check if a user with the provided email exists.
            if (!empty($user[0])) {
                // If the email exists, check if the provided password matches the stored hashed password.
                if (Hash::check($password, $user[0]->password)) {
                    // If the passwords match, set a session variable and redirect to the admin dashboard.
                    $request->session()->put('sessionUserId', $user[0]->password);
                    $request->session()->save();
                    return redirect('/admin-dashboard')->with('message', 'You have successfully logged in!');
                } else {
                    // If the passwords don't match, redirect back with an error message for incorrect password.
                    return Redirect::back()
                        ->withErrors([
                            'password' => 'Incorrect Password',
                        ])
                        ->withInput(['password' => $password]);
                }
            } else {
                // If the email doesn't exist, redirect back with an error message for incorrect email or email not found.
                return Redirect::back()
                    ->withErrors([
                        'email_address' => 'Incorrect email or email not found',
                    ])
                    ->withInput(['email_address' => $email]);
            }
        } catch (ValidationException $e) {
            // Catch any validation errors and redirect back with error messages and input.
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            // Catch any other exceptions and return the error message.
            return $ex->getMessage();
        }
    }

    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        // Display the admin dashboard view.
        return view('admin.index');
    }

    /**
     * Display a list of vehicles.
     */
    public function listvehicles()
    {
     
        $list = Vehicle::join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
                       ->join('users', 'vehicles.seller_id', '=', 'users.id')
                       ->select('vehicle_images.*', 'vehicles.*', 'users.name as fullname')->where('vehicles.status',0)
                       ->get();
        
       
        return view('admin.listvehicle', compact('list'));
    }


    public function approvevehicle()
    {
     
        $list = Vehicle::join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
                       ->join('users', 'vehicles.seller_id', '=', 'users.id')
                       ->select('vehicle_images.*', 'vehicles.*', 'users.name as fullname')->where('vehicles.status',1)
                       ->get();
        
       
        return view('admin.approvevehicle', compact('list'));
    }
}
