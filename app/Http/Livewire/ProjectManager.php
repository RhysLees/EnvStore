<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectManager extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = Auth::user()->currentTeam->projects;
    }

    public function render()
    {
        return view('livewire.project-manager');
    }
}
