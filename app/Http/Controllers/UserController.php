<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function loginPage()
    {
        return view("login");
    }

    public function loginAuthenticate(Request $request){
        $incomingFields = $request->validate([
            "name" => ["required", "min:3"],
            "password" => ["required", "min:8"]
        ]);
        if (auth()-> attempt([
            'name' => $incomingFields['name'],
            'password' => $incomingFields['password']
        ]))
        $request->session()->regenerate();
        return redirect('/')->with('success', 'Login successful!');
    }

    public function registerPage()
    {
        return view("register");
    }

    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            "name" => ["required", "min:3", Rule::unique('users', 'name')],
            "email" => ["required","email", Rule::unique('users', 'email')],
            "password" => ["required", "min:8"],
            "confirm_password" =>  "same:password"
        ]);
        // Hash the password before storing it in the database.
        $incomingFields["password"] = bcrypt($incomingFields['password']);
        // Create a new user with the validated data
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect("/")->with("success", "Account created successfully!");
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with("success", "Logged out successfully.");
    }
}
