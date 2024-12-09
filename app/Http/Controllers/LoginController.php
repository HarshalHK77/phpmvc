<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $validUser = [
        'username' => 'testuser',
        'email' => 'test@example.com',
    ];

    public function showForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
        ]);

        // Check if the user input matches the predefined data
        if (
            $validated['username'] === $this->validUser['username'] &&
            $validated['email'] === $this->validUser['email']
        ) {
            // Save user data in session
            session(['user' => $validated]);

            return redirect()->route('login.welcome');
        }

        return back()->withErrors(['login' => 'Invalid username or email.'])->withInput();
    }

    public function welcome()
    {
        // Retrieve user data from session
        $user = session('user', []);

        return view('welcome', compact('user'));
    }
}
