<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectManagerForm extends Component
{
    public Team $team;

    public function mount()
    {
        $this->team = Auth::user()->currentTeam;
    }
    public function render()
    {
        return view('livewire.project-manager-form');
    }
}
