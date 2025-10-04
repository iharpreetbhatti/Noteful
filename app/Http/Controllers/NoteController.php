<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();
        return view("notes.index")->with('notes', $notes);
    }
}
