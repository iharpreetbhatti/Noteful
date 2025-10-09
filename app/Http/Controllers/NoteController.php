<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $notes = Note::all();
        return view("notes.index")->with('notes', $notes);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $validatedData['user_id'] = 1; // Temporary hardcoded user ID

        Note::create($validatedData);

        return redirect()->route('notes.index')->with('success', 'Note created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note): View
    {
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): View
    {
        return view('notes.edit')->with('note', $note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $note->update($validatedData);

        return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
    }
}
