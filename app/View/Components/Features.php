<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Features extends Component
{
    /**
     * Create a new component instance.
     */
    public $featuresData = [];
    public function __construct()
    {
        // Add features data
        $this->featuresData = [
            [
                'id' => 1,
                'title' => 'Rich Text Editing',
                'description' => 'Create beautiful notes with formatting, lists, and more',
                'icon' => 'fa-regular fa-file-lines',
            ],
            [
                'id' => 2,
                'title' => 'Colorful Organization',
                'description' => 'Color-code your notes for better visual organization',
                'icon' => 'fa-solid fa-palette',
            ],
            [
                'id' => 3,
                'title' => 'Quick Search',
                'description' => 'Find any note instantly with powerful search functionality',
                'icon' => 'fa-solid fa-magnifying-glass',
            ],
            [
                'id' => 4,
                'title' => 'Mobile Ready',
                'description' => 'Access your notes seamlessly across all your devices',
                'icon' => 'fa-solid fa-mobile-screen',
            ],
            [
                'id' => 5,
                'title' => 'Cloud Sync',
                'description' => 'Your notes are automatically saved and synced in the cloud',
                'icon' => 'fa-solid fa-cloud',
            ],
            [
                'id' => 6,
                'title' => 'Secure & Private',
                'description' => 'Your thoughts are protected with end-to-end encryption',
                'icon' => 'fa-solid fa-lock',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.features')->with('featuresData', $this->featuresData);
    }
}
