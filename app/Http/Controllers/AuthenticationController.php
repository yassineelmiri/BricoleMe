<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function artisanRegistrationPage()
    {
        return view('auth.artisan.register');
    }

    public function artisanRegistrationImages()
    {
        return view('auth.artisan.upload');
    }

    public function customerRegistrationPage()
    {
        return view('auth.customer.register');
    }
}
