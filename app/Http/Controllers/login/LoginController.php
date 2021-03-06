<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    
use  AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
    }
}
