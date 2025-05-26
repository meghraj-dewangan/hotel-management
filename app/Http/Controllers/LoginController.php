<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Exception;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class LoginController extends Controller
{
    //
    function registration(Request $request)
    {

        try {


            $request->validate([
                'username' => 'required|string|max:255',
                'city' => 'required|string|max:400',
                'email' => 'required|string|email|max:400|unique:users',
                'password' => 'required|string| min:6',

            ]);


            $user = User::create([
                'name' => $request->username,
                'city' => $request->city,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $token = $user->createToken('myapp')->plainTextToken;

            Cookie::queue('user_id', $user->id);
           
            Cookie::queue('email', $user->email);
            Cookie::queue('token', $token);



            return redirect()->back()->with('success', 'User registered successfully!');

        } catch (Exception $e) {

            return redirect()->back()->withErrors(['email' => 'Email already exists.'])->withInput();
        }
    }


    function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

       
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            
            $token = $user->createToken('myapp')->plainTextToken;
    
            
            Cookie::queue('user_id', $user->id);
            Cookie::queue('username', $user->name);
            Cookie::queue('email', $user->email);
            Cookie::queue('token', $token);
            Cookie::queue('role', $user->role);
    
            
            if ($user->role === 'admin') {
                return redirect()->route('home')->with('success', 'Welcome Admin!');
            }
    
            // redirect for normal user
            return redirect()->route('home')->with('success', 'Login successful!');
        }
    
        return back()->withErrors(['login' => 'Invalid email or password']);
    }

    function logout()
    {
        // Clear the authentication cookies
        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('username'));
        Cookie::queue(Cookie::forget('email'));
        Cookie::queue(Cookie::forget('token'));
        Cookie::queue(Cookie::forget('role'));

        Auth::logout();
        return redirect()->route('home')->with('success', 'Logged out successfully!');
    }

}
