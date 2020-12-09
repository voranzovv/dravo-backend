<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData =   $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required',
            'password' => 'required|confirmed'
        ]);
        $validatedData['password'] = bcrypt($request->password);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        // return Auth()->Auth::attempt($loginData);

        if (!Auth::attempt($loginData)) {
            return response(['message' => 'Invalid credentials']);
        }
        $user = User::where('email', $request->email)->first();
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=>auth()->user(),'access_token' =>$accessToken]);
    }
}
