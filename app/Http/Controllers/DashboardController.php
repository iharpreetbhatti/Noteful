<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $recentNotes = Note::latest()->limit(6)->get();
        return view("pages.dashboard")->with("notes", $recentNotes);
    }
}
