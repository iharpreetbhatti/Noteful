<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    // @desc Load User profile view
    public function index(): View
    {
        return view("pages.profile");
    }
}
