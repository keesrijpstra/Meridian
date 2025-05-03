<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

#[Layout('components.layouts.dashboard')]
class Roles extends Component
{
    public $roles;
    
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $selectedGuard;

    public $editId;
    #[Validate('required')]
    public $editName;
    #[Validate('required')]
    public $editGuard;
    public $selectedPermissions = [];
    
    public $searchTerm;

    public function mount()
    {
        $this->roles = Role::query()->select('*')->get();
    }

    public function submit() 
    {
        $this->validate([
            'name' => 'required',
            'selectedGuard' => 'required'
        ]);

        $role = Role::create([
            'name' => $this->name,
            'guard_name' => $this->selectedGuard
        ]);

        if (!$role) {
            session()->flash('status', 'Failed to create role.');
        } else {
            session()->flash('status', 'Successfully created the role.');
            
            $this->reset(['name', 'selectedGuard']);
            
            $this->roles = Role::query()->select('*')->get();
        }
    }

    public function selectGuard($guardName)
    {
        $this->selectedGuard = $guardName;
    }
    
    public function editRole($id)
    {
        $role = Role::findOrFail($id);
        
        $this->editId = $role->id;
        $this->editName = $role->name;
        $this->editGuard = $role->guard_name;
        
        if (method_exists($role, 'permissions')) {
            $this->selectedPermissions = $role->permissions()->pluck('name')->toArray();
        }
    }
    
    public function selectEditGuard($guardName)
    {
        $this->editGuard = $guardName;
    }
    
    public function updateRole()
    {
        $this->validate([
            'editName' => 'required',
            'editGuard' => 'required'
        ]);
        
        $role = Role::findOrFail($this->editId);
        
        $role->update([
            'name' => $this->editName,
            'guard_name' => $this->editGuard
        ]);
        
        if (!empty($this->selectedPermissions) && method_exists($role, 'syncPermissions')) {
            $permissions = Permission::whereIn('name', $this->selectedPermissions)->get();
            $role->syncPermissions($permissions);
        }
        
        session()->flash('status', 'Role updated successfully.');
        
        $this->reset(['editId', 'editName', 'editGuard', 'selectedPermissions']);
        
        $this->roles = Role::query()->select('*')->get();
    }

        public function deleteRole()
    {
        $role = \Spatie\Permission\Models\Role::find($this->editId);
        
        if (!$role) {
            return;
        }
        
        $role->delete();
        
        $this->reset(['editId', 'editName', 'editGuard', 'selectedPermissions']);
        
        $this->roles = \Spatie\Permission\Models\Role::query()->select('*')->get();
    }

    public function render()
    {
        if (strlen($this->searchTerm) >= 1) {
            $this->roles = Role::where('name', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('guard_name', 'like', '%'.$this->searchTerm.'%')
                ->get();
        }
        
        return view('livewire.roles.roles', [
            'availablePermissions' => Permission::all()
        ]);
    }
}