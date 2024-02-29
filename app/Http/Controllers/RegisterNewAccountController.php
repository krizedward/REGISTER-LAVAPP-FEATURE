<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterNewAccountController extends Controller
{
    //
    public function create() {
        $response = Http::get('https://restcountries.com/v2/all');
        $countries = $response->json();
        
        // return 'register new account';
        return view('auth.register', compact('countries'));
    }
}
