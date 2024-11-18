<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        
        
        $request->authenticate();
    
        $user = $request->user();
    
        if (Auth::check()) {
            if (Auth::user()->role_id == 4 || Auth::user()->role_id == 9) {
                
                // dd(gethostbyname('api.ipify.org'));
                
                    $request->session()->regenerate();
                    return redirect()->intended(RouteServiceProvider::HOME);
                
            } 
            // if (Auth::user()->role_id == 4 || Auth::user()->role_id == 9) {
            //     if ($request->ip() == "49.43.181.247") {
            //         // If logging in from the fixed IP, proceed to intended route
            //         $request->session()->regenerate();
            //         return redirect()->intended(RouteServiceProvider::HOME);
            //     } else {
            //         // dd($request->ip());
            //         Auth::logout();
            //         return redirect()->back()->with('warning', 'Unauthorized access (out of office not allow to login).');
            //     }
            // } 
            
            elseif(Auth::user()->role_id == 2)
            {
              return redirect('/MyOrders');   
            }
            
            
            else {
                $redirectTo = RouteServiceProvider::HOME;
                // Handle redirection for users with roles other than 4
                return redirect($redirectTo);
            }
        }
        else {
            // Handle the case where the user is not authenticated
            return redirect()->route('login')->with('warning', 'Please log in to access this page.');
}


    
        $request->session()->regenerate();
    
        return redirect()->intended($redirectTo);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
