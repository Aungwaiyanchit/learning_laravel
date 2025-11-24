<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6)],
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry credentials does not match'
            ]);
        };

        request()->session()->regenerateToken();

        return redirect('/jobs');

    }

    public function destory()
    {
        Auth::logout();

        return redirect('/');
    }
}
