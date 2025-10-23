<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    // @desc Show registration form
    // @route GET /register
    public function register(): View
    {
        return view('auth.register');
    }

    //@desc Handle registration
    //@route POST /register
    public function store(Request $request): string
    {
        return 'store';
    }
}
