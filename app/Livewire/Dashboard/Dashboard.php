<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
