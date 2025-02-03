<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * AuthController handles user registration and authentication.
 */
class AuthController extends Controller
{

    /**
     * Register a new user with the provided user details.
     *
     * Provided user details include:
     * - name: maxium 255 characters
     * - email: unique, of email address type
     * - password: minimum 8 characters
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password']
        ]);

        return response()->json($user);
    }

    /**
     * Log in a user with the provided credentials.
     *
     * Provided credentials include:
     * - email: of email address type
     * - password
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json("error", 401);
        }

        $token = $user->createToken('token')->plainTextToken;

        return response()->json($token);
    }

    /**
     * Get the current authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
