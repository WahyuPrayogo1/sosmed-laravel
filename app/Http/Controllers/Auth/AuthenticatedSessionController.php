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
    public function store(Request $request)
    {
        $request->validate([
            'number' => ['required', 'numeric'],
            'password' => ['required', 'string'],
        ], [
            'number.required' => 'Field nomor wajib diisi.',
            'number.numeric' => 'Field nomor harus berupa angka.',
            'password.required' => 'Field password wajib diisi.',
            'password.string' => 'Field password harus berupa teks.',
        ]);

        if (Auth::attempt($request->only('number', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'number' => 'Nomor HP atau password salah.',
        ])->withInput($request->only('number'));
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
