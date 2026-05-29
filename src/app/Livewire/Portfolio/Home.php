<?php

namespace App\Livewire\Portfolio;

use App\Models\Profile;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $profile = Profile::first() ?? new Profile();
        return view('livewire.portfolio.home', [
            'profile' => $profile,
        ]);
    }
}
