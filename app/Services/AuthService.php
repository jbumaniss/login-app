<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function auth(string $email, string $password): ?User
    {
        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            return null;
        }

        return Auth::user();
    }
}
