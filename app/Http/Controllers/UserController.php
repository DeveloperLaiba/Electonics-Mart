<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registersave(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'name' => 'required',
       
          ]);
          if($validator->passes()){
           $user = new User();
           $user->name =$request->name;
           $user->email =$request->email;
           $user->role ='user';
           $user->password = Hash::make($request->password);
           $user->save();
           return redirect()->route('login')->with('success','You have successfully registered..');
          }else{
            return redirect()->route('register')->withinput()->withErrors($validator);
          }
    }
    public function login(){
        return view('login');
    }
    public function loginuser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Get the authenticated user
            // Redirect based on role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('AdminPanel.dashboard'); // Admin Dashboard
                case 'user':
                    return redirect()->route('Electronics Mart.Home'); // Teacher Dashboard
              
                default:
                    return redirect()->route('login'); // Redirect to login if role is not recognized
            }
        }
        // If authentication fails, redirect back with an error
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
{
    Auth::logout(); // Log the user out
    $request->session()->invalidate(); // Invalidate the session
    $request->session()->regenerateToken(); // Regenerate CSRF token
    return redirect()->route('login'); // Redirect to login page
}
public function Table()
{
   $user = User::all();
   return view('table', compact('user'));
}
public function delete($id)
{
    $user = User::find($id);
    $user->delete();
    return redirect()->route('table.register');
}

}

