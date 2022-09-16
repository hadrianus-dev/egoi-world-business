<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PortfolioController extends Component
{
    public function render()
    {
        return view('livewire.pages.portfolio-controller')->layout('layouts.base');
    }
}
