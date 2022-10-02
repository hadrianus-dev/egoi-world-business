<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Gallery\Models\Gallery;
use Domain\Portfolio\Models\Portfolio;

class PortfolioSingleController extends Component
{
    public $portfolio;
    public $gallery;
    
    public function mount(Portfolio $portfolio, Gallery $gallery): void
    {
        $this->portfolio = $portfolio;
        $this->gallery = $this->portfolio->gallery()->get();
        #dd($this->gallery);
        #dd($this->portfolios[0]->gallery()->first()['cover']);
    }

    public function render()
    {
        return view('livewire.pages.portfolio-single-controller')->layout('layouts.base');
    }
}
