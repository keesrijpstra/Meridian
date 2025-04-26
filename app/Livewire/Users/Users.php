<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard')]
class Users extends Component
{
    public $searchTerm = '';

    public $users;

    public $userCount = 20;

    public function mount()
    {
        $this->users = User::query()->orderBy('id', 'desc')->get();
    }

    public function addUser()
    {
        $this->userCount++;
    }

    public function resetCounter()
    {
        $this->userCount = 0;
    }

    public function render()
    {
        if(strlen($this->searchTerm) >= 1) {
            $this->users = User::where('name', 'like', '%'.$this->searchTerm.'%')->get();
        }

        return view('livewire.users');
    }
}
