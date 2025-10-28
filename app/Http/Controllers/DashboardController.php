<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        // Get first name of current user
        $firstName = explode(' ', $user->name)[0];

        // Set start of week date
        $startOfWeek = Carbon::now()->startOfWeek();

        // Set end of week date
        $endOfWeek = Carbon::now()->endOfWeek();

        // Get count of all notes of current user updated this week
        $notesThisWeek = $user->notes()->whereBetween("updated_at", [$startOfWeek, $endOfWeek])->count();

        // Get count of total notes of current user
        $totalNotes = $user->notes()->count();

        // combine all stats into an associative array
        $stats = [
            ['title' => 'Total Notes', 'value' => $totalNotes, 'icon' => 'fa-regular fa-file-lines'],
            ['title' => 'This Week', 'value' => $notesThisWeek, 'icon' => 'fa-solid fa-arrow-up-right-dots'],
            ['title' => 'Quick Action', 'value' => '', 'icon' => ''],
        ];

        // Get recent 6 notes of current user
        $recentNotes = $user->notes()->latest()->limit(6)->get();

        return view("pages.dashboard")
            ->with("firstName", $firstName)
            ->with("stats", $stats)
            ->with("recentNotes", $recentNotes);
    }
}
