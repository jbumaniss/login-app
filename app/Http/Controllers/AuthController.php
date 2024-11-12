<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(private readonly AuthService $authService)
    {
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        $user = $this->authService->auth(
            email: $credentials['email'],
            password: $credentials['password']
        );

        if ($user) {
            Auth::login($user, $remember);

            return response()->json([
                'status' => 'ok',
                'message' => "Hello {$user->name}, you are logged in as {$user->email}."
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials.'
        ], 401);
    }

    public function logout(): JsonResponse
    {
        Auth::logout();

        return response()->json([
            'status' => 'ok',
            'message' => 'Logged out successfully.'
        ]);
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json([
            'status' => 'ok',
            'message' => 'Registration successful.',
            'user' => $user
        ]);
    }

    public function rememberMe(Request $request): JsonResponse
    {
        return response()->json([
            'status' => 'ok',
            'message' => 'Remember me functionality is not implemented.'
        ]);
    }
}
