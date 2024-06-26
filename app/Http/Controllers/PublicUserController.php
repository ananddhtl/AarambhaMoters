<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class PublicUserController extends Controller
{

    
    public function userregister(Request $request)
    {
       
        if ($request->isMethod('post')) {
            $request->validate([
                'fname' => 'required|max:255',
                'lname' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required|min:6',

            ]);
            $user = new User;
            $user->name = $request->fname . ' ' . $request->lname;
            $user->email = $request->email;
            $user->status = 0;
            $user->password = bcrypt($request->password);
          
            $user->save();

            Auth::login($user);
            return redirect('/');
        }

        return view('admin.register')->with('register', 'You have  been registered successfuly');
    }
    public function userlogin(Request $request)
    {
    if ($request->isMethod('post')) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('login', 'You have  been login successfuly');
        }

        return redirect()->route('dashboard')->with('error', 'You have  enter invalid credentials');
    }

    return view('admin.login')->with('login', 'You have  been registered successfuly');
    }



    public function userinformation()
    {
    $userId = Auth::id(); // Get the authenticated user's ID
    $userInformation = User::find($userId); // Fetch the user information

    return view('backend.userinformation.profile', compact('userInformation'));
    }

    public function updateInformation(Request $request)
    {
    $user = Auth::user();
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Assuming a maximum size of 2MB for the thumbnail
    ]);
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->hasFile('thumbnail')) {
        if ($user->thumbnail) {
            $existingThumbnailPath = public_path('userinformation/' . $user->thumbnail);
            if (file_exists($existingThumbnailPath)) {
                unlink($existingThumbnailPath);
            }
        }
        $thumbnailName = $request->file('thumbnail')->getClientOriginalName();
        $request->file('thumbnail')->move(public_path('userinformation'), $thumbnailName);
        $user->thumbnail = $thumbnailName;
    }
    $user->save();
    return redirect()->back()->with('success', 'User information updated successfully.');
    }


    public function getchangepassword()
    {
    return view('backend.userinformation.changepassword');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        
       
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required|min:8',
            'confirmpassword' => 'required|same:newpassword',
        ]);
    
       
        if (!Hash::check($request->oldpassword, $user->password)) {
            return redirect()->back()->withErrors(['oldpassword' => 'The provided old password does not match our records.']);
        }
    
      
        $user->password = Hash::make($request->newpassword);
        $user->save();
    
        return redirect()->back()->with('success', 'Password updated successfully.');
    }
    

    public function userlogout()
    {
    Auth::logout();
    
    return redirect('/');
    }

    public function dashboard()
    {
    return view('backend.index');
    }

    public function updatestatus()
    {
    $user = Auth::user();
    $user->status = 1;
    $user->save();

    return redirect()->back()->with('success', 'Congratulations! Your status has been updated.');
    }

    public function forgetpasswordpage()
    {
    return view('frontend.forgetpassword');
    }

    public function becomeaseller()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/')->with('message', 'Please login first ');
        }
    return view('frontend.dashboard');
    }

    public function changepasswordpage()
    {
    return view('frontend.changepassword');
    }
    public function forgetPassword(Request $request)
    {
       
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect('/forgetpassword')->with('message', 'This email is not registered yet!');
        }

        $request->session()->put('sessionUserEmail', $user->email);
        $request->session()->save();

        $data = [
            'url' => url('/changepassword'),
            'email' => $email,
        ];

        Mail::send('email.forgetpassword', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->from(env('MAIL_USERNAME'));
            $message->subject('Password Reset Link form Allied Publication');
        });

        return redirect('/forgetpassword')->with('message', 'Please check your email for password reset instructions.');
    }

    public function updatePasswordForget(Request $request)
{
    $request->validate([
        'password' => 'required|min:6',
    ]);
    $user = User::where('email', session()->get('sessionUserEmail'))->first();
    if (!$user) {
        return redirect()->back()->with('error', 'User not found');
    }
    if (Hash::check($request->password, $user->password)) {
        return redirect()->back()->with('error', 'Old password cannot be your new password');
    }
    $user->password = Hash::make($request->password);
    $user->save();
    return redirect('/')->with('success', 'Your password has been changed successfully');
}



}