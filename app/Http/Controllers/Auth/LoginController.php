<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginUserRequest $request): RedirectResponse
    {
        if (!auth()->attempt($request->validated())) {
            throw ValidationException::withMessages(['email' => 'The provided credentials do not match our records.']);
        }

        session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }
}
