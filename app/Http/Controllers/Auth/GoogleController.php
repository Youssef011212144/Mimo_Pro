<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use App\Models\UserGoogle; // Update the model namespace

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if the user with this email already exists in your 'user_google' table
            $existingUser = UserGoogle::where('email', $user->getEmail())->first();

            if ($existingUser) {
                // User already exists, you can log them in or do any other action
                Auth::login($existingUser);

                return redirect()->route('home'); // Redirect to your home route
            }

            // User doesn't exist, create a new user in 'user_google'
            $newUser = new UserGoogle();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            // Add any other fields you want to save

            $newUser->save();

            // Log in the new user
            Auth::login($newUser);

            return redirect()->route('home'); // Redirect to your home route
        } catch (\Exception $e) {
            // Handle exceptions, e.g., log or show an error message
            return redirect()->route('login')->with('error', 'Unable to sign in with Google');
        }
    }
}
