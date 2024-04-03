<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user() && Auth::user()->role == 'admin') {
            return view('admin.home-admin');
        } else if (Auth::user() && Auth::user()->role == 'customer') {
            return view('customer.home-customer');
        } else {
            return view('home');
        }
    }
}
