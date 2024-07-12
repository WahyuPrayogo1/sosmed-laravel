<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'numeric', 'unique:users,number'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'number.required' => 'Field nomor wajib diisi.',
            'number.numeric' => 'Field nomor harus berupa angka.',
            'number.unique' => 'Nomor sudah terdaftar.',
            'password.required' => 'Field password wajib diisi.',
            'password.string' => 'Field password harus berupa teks.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'number' => $request->number,
            'password' => Hash::make($request->password),
        ]);

        // Tambahkan peran user
        $user->assignRole('user');

        // Buat profil pengguna
        Profile::create([
            'user_id' => $user->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
