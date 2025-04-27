<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard')]
class ViewRole extends Component
{
    public $role;

    public function mount($role)
    {
        $this->role = $role;
    }

    public function render()
    {
        return view('livewire.roles.view-role');
    }
}
