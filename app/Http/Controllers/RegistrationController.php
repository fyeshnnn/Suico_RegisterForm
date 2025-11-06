<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:user_infos,email',
            'age' => 'required|integer|min:18',
        ]);

        // Save to database
        $user = UserInfo::create($validated);

        // Pass the saved user to the success page
        return view('success', ['data' => $user]);
    }
}
