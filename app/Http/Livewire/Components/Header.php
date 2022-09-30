<?php

namespace App\Http\Livewire\Components;

use Domain\Enterprise\Models\Enterprise;
use Livewire\Component;

class Header extends Component
{
    public $Enterprise;

    public function mount(Enterprise $enterprise): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
