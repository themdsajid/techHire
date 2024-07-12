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
        // dd($request);
        $request->authenticate();
        $request->session()->regenerate();

        // dd($request->session()->regenerate());
        $url ='';
// dd($request->user()->role);
// dd($request);
        if ($request->user()->role === 'admin')
        {
            // dd('hello');
            $url = '/admin';
        }
        elseif ($request->user()->role === 'company')
        {
           $url = '/company';
        }

        elseif ($request->user()->role === 'employee')
        {
            // dd('Hello');
            $url = 'employee/dasborad';
        }



        return redirect()->intended($url);
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
