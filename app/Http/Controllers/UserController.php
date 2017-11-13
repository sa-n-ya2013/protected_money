<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->get('email', '');
        $password = $request->get('password', '');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return response()->json(['code' => 0]);
        } else {
            return response()->json(['code' => 1]);
        }
    }
}