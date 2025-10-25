<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(): View
    {
        // Get first name of current user
        $firstName = explode(' ', auth()->user()->name)[0];

        // Set start of week date
        $startOfWeek = Carbon::now()->startOfWeek();

        // Set end of week date
        $endOfWeek = Carbon::now()->endOfWeek();

        // Get count of all notes of current user updated this week
        $notesThisWeek = auth()->user()->notes()->whereBetween("updated_at", [$startOfWeek, $endOfWeek])->count();

        // Get count of total notes of current user
        $totalNotes = auth()->user()->notes()->count();

        // combine all stats into an associative array
        $stats = [
            ['title' => 'Total Notes', 'value' => $totalNotes, 'icon' => 'fa-regular fa-file-lines'],
            ['title' => 'This Week', 'value' => $notesThisWeek, 'icon' => 'fa-solid fa-arrow-up-right-dots'],
            ['title' => 'Quick Action', 'value' => '', 'icon' => ''],
        ];

        // Get recent 6 notes of current user
        $recentNotes = auth()->user()->notes()->latest()->limit(6)->get();

        return view("pages.dashboard")
            ->with("firstName", $firstName)
            ->with("stats", $stats)
            ->with("recentNotes", $recentNotes);
    }
}
