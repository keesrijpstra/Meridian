<?php

namespace App\Livewire;

use Livewire\Component;

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