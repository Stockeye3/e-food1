<?php

namespace App\Http\Controllers\CustomerAuth;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    

    use AuthenticatesUsers;


    protected $redirectTo = '/';

    
    
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
