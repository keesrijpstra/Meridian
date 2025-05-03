<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Spatie\Permission\Models\Role;

#[Layout('components.layouts.dashboard')]
class ViewRole extends Component
{
    public $role;

    public function mount($role)
    {
        $this->role = $this->getRole($role);
    }

    private function getRole($roleId)
    {
        return Role::find($roleId);
    }

    public function render()
    {
        return view('livewire.roles.view-role');
    }
}
