<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Show the registration page.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'unique:' . User::class,
            ],

            'phone' => [
                'required',
                'regex:/^01[3-9]\d{8}$/',
                'unique:users,phone',
            ],

            'address' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'password' => [
                'required',
                'confirmed',
                Rules\Password::defaults(),
            ],
        ]);

        // Create the new customer account
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

            // Every public registration is a customer
            'role' => 'customer',

            'password' => Hash::make($request->password),
        ]);

        // Fire the registered event
        event(new Registered($user));

        // Automatically log the user in
        Auth::login($user);

        // Redirect to dashboard
        return redirect()->route('dashboard');
    }
}