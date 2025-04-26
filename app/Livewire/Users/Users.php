<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard')]
class Users extends Component
{
    public $searchTerm = '';

    public $userCount = 20;

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
        return view('livewire.users');
    }
}
