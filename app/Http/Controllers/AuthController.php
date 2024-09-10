<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('reg');
    }
    public function registerPost(Request $request) {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with('success', 'You have been registered successfully');
    }
    public function login() {

        return view('/login');
    }
    public function loginPost(Request $request) {
       $credentials = [
           'email' => $request->email,
           'password' =>$request->password,
       ];
       if (Auth::attempt($credentials)) {
           return redirect()->intended('/account')->with('success', 'You have been logged in successfully');
       }
       return back()->with('error', 'Invalid credentials');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function updateSettings(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return back()->with('success', 'Your name and email have been updated successfully');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|different:current_password',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Your password has been changed successfully');
    }
}
