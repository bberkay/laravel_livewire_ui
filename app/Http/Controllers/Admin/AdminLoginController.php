<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        // Attempt to log the admin in
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        // if unsuccessful, then redirect back to the login with the form data can be used like $message in the view
        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    /**
     * Logout the admin.
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect()->route('admin.login');
    }

    /**
     * Show the admin login page.
     */
    public function index()
    {
        return view('admin.admin-login');
    }
}
