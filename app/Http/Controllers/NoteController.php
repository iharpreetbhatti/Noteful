<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class NoteController extends Controller
{
    public function index(): View
    {
        return view("notes.index");
    }
}
