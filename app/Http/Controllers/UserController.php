<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register()
    {
        return view('user.register', ['title' => 'Register']);
    }

    public function userRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);
    
        try {
            // Creating a new user instance
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
    
            // Save the user to the database
            $user->save();
    
            return redirect()->route('user.login')->with('success', 'Registration successful. Please log in.');
        } catch (\Exception $e) {
            // Handle the registration failure, and redirect back to the registration page with an error message
            return redirect()->route('user.register')->with('error', 'Registration failed. Please try again.');
        }
    }
    

    public function login(): Response
    {
        return response()->view("user.login", ["title" => "Login"]);
    }

    public function userLogin(Request $request): Response | RedirectResponse
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (empty($email) || empty($password)) {
            return response()->view("user.login", [
                "title" => "Login",
                "error" => "Email or password cannot be empty"
            ]);
        }

        // Use Auth::attempt to handle hashed passwords
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->put("user", $email);
            return redirect()->route('todos.index')->with('success', 'Registration successful. Please log in.');
        }

        return response()->view("user.login", [
            "title" => "Login",
            "error" => "Email or password is incorrect"
        ]);
    }

    public function userLogout(Request $request): RedirectResponse
    {
        $request->session()->forget("user");
        return redirect()->route('user.login')->with('success', 'Logged out successfully.');
    } 

    public function showProfile()
    {
        $todos = Todo::all();

        return view('user.profile', ['todos' => $todos]);
    }

   
}
