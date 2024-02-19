<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;
use App\Models\Vehicle;
class AdminUserController extends Controller
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
   

    /**
     * Display the specified resource.
     */
    public function show(AdminUser $adminUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminUser $adminUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminUser $adminUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminUser $adminUser)
    {
        //
    }

    public function store(Request $request)
    {
        
        try {
            $password = Hash::make($request->password);
            $user = new AdminUser();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $password;
            $user->save();
            $request->session()->put('sessionUserId', $password);
            return redirect('/admin-loginlogin')->with('message', 'You account has been registerd successfully');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:6'],
            ]);
            $email = $request->email;
            $password = $request->password;
            $user = \DB::table('admin_users')->where('email', $email)->get();

            if (!empty($user[0])) {
                if (Hash::check($password, $user[0]->password)) {
                    $request->session()->put('sessionUserId', $user[0]->password);
                    $request->session()->save();
                    return redirect('/admin-dashboard')->with('message', 'You have successfully logged in!');
                } else {
                    return Redirect::back()
                        ->withErrors([
                            'password' => 'Incorrect Password',
                        ])
                        ->withInput(['password' => $password]);
                }
            } else {
                return Redirect::back()
                    ->withErrors([
                        'email_address' => 'Incorrect email or email not found',
                    ])
                    ->withInput(['email_address' => $email]);
            }
        } catch (ValidationException $e) {
           
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function dashboard()
    {
    return view('admin.index');
    }

    public function listvehicles()
{
    $list = Vehicle::join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
                   ->join('users', 'vehicles.seller_id', '=', 'users.id')
                   ->select('vehicle_images.*', 'vehicles.*', 'users.name as fullname')
                   ->get();
    return view('admin.listvehicle', compact('list'));
}

}