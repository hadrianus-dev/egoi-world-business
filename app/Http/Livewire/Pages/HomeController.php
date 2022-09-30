<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Enterprise\Models\Enterprise;
use Domain\Service\Models\Service;

class HomeController extends Component
{
    public $Enterprise;
    public $Services;

    public function mount(Enterprise $enterprise, Service $service): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Services = $service::where('published', true)->orderBy('created_at', 'desc')->get();
    }

    public function order(): void
    {
        # code...
    }
    
    public function render()
    {
        return view('livewire.pages.home-controller')->layout('layouts.base');
    }
}
