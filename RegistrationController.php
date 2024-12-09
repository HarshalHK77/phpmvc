<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    private $userdata=[];

    public function showForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:50',
            'email' => 'required|email',
        ]);

        session(['user' => $validated]);
    }

    public function showDetails()
    {
        $user = session('user',[]);
        return view('details',compact('user'));
    }

}
