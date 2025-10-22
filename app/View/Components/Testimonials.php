<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonials extends Component
{
    /**
     * Create a new component instance.
     */
    public array $testimonialsData;
    public function __construct()
    {
        $this->testimonialsData = [
            [
                'id' => 1,
                'name' => 'Sarah Chen',
                'role' => 'Product Designer',
                'feedback' => 'Noteful has completely transformed how I organize my thoughts. The color coding system is genius!'
            ],
            [
                'id' => 2,
                'name' => 'Michael Rodriguez',
                'role' => 'Student',
                'feedback' => 'Perfect for taking class notes. The mobile app means I can access everything anywhere on campus.'
            ],
            [
                'id' => 3,
                'name' => 'Emma Thompson',
                'role' => 'Writer',
                'feedback' => 'Finally, a note-taking app that doesn\'t get in the way of my creativity. Clean, simple, effective.',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonials')->with('testimonialsData', $this->testimonialsData);
    }
}
