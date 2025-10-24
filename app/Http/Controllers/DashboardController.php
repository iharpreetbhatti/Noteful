<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $recentNotes = auth()->user()->notes()->latest()->limit(6)->get();
        return view("pages.dashboard")->with("notes", $recentNotes);
    }
}
