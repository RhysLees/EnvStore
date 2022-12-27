<?php

namespace App\Http\Livewire;

use App\Enums\StatusEnum;
use App\Models\Team;
use App\Rules\TeamUnique;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectManagerForm extends Component
{
    public Team $team;
    public string $name = '';

    public function mount()
    {
        $this->team = Auth::user()->currentTeam;
    }
    public function render()
    {
        return view('livewire.project-manager-form');
    }

    public function submit()
    {
        $this->resetErrorBag();

        $this->validate([
            'name' => [
                'required',
                new TeamUnique($this->team, 'name'),
            ],
        ]);

        $this->team->projects()->create([
            'name' => $this->name,
            'status' => StatusEnum::Active,
        ]);

        $this->team->save();

        return redirect()->route('dashboard');
    }
}
