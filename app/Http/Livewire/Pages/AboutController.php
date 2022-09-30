<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Service\Models\Service;
use Domain\Enterprise\Models\Enterprise;

class AboutController extends Component
{
    public $Enterprise;
    public $Services;

    public function mount(Enterprise $enterprise, Service $service): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Services = $service::where('published', true)->orderBy('created_at', 'desc')->get();
    }
    
    public function render()
    {
        return view('livewire.pages.about-controller')->layout('layouts.base');
    }
}
