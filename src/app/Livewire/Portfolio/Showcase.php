<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\Project;
use App\Models\Skill;

class Showcase extends Component
{
    public function render()
    {
        $projects = Project::latest()->get();
        $skills = Skill::all();
        return view('livewire.portfolio.showcase', [
            'projects' => $projects,
            'skills' => $skills,
        ]);
    }
}
