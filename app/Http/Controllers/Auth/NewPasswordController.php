<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewPasswordController extends Controller
{
    public function create(string $token): View
    {
        return view('auth.reset-password', [
            'token' => $token
        ]);
    }
}
