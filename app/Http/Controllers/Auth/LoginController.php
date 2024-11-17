<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the login form input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in with the provided credentials
        if (Auth::attempt($credentials)) {
            // Regenerate session to protect against session fixation attacks
            $request->session()->regenerate();

            // Redirect to the dashboard route
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        // Redirect back with error messages on failure
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'Please check your password.',
        ])->onlyInput('email'); // Retain email input for user convenience
    }

    /**
     * Handle logout requests.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session and regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the homepage with a success message
        return redirect('/')->with('status', 'You have been logged out.');
    }
}
