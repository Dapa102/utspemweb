<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\Project;

class Showcase extends Component
{
    public function render()
    {
        $projects = Project::latest()->get();
        return view('livewire.portfolio.showcase', compact('projects'));
    }
}
