<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthLoginController extends Controller
{
    public function login(Request $request)
    {
        return view("auth.login");
    }
}
