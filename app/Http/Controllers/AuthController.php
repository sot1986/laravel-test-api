<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthResource;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function fetchUser(Request $request)
    {
        return AuthResource::make($request->user());
    }
}
