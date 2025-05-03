<?php

namespace App\Livewire\WebsiteManagement;

use App\Models\Website;
use App\Models\WebsiteManagement as ModelsWebsiteManagement;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard')]
class WebsiteManagement extends Component
{
    public $searchTerm;
    public bool $open = false;
    public string $title = 'Default Panel';
    public string $component = '';
    public array $params = [];

    protected $listeners = [
        'openPanel',
        'closePanel'
    ];

    public function render()
    {
        $query = Website::query();
    
        if (strlen($this->searchTerm) >= 1) {
            $query = Website::where('name', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('guard_name', 'like', '%'.$this->searchTerm.'%')
                ->get();
        }

        return view('livewire.website-management.website-management', [
            'websites' => $query->paginate(10)
        ]);
    }

    public function openPanel(string $title, string $component, array $params = []): void
    {
        $this->open = true;
        $this->title = $title;
        $this->component = $component;
        $this->params = $params;
    }

    public function closePanel(): void
    {
        $this->open = false;
        $this->component = '';
        $this->params = [];
    }
}
