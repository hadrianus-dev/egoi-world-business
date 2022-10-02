<?php

namespace App\Http\Livewire\Pages;

use Domain\Gallery\Models\Gallery;
use Domain\Portfolio\Models\Portfolio;
use Livewire\Component;

class PortfolioController extends Component
{
    public $portfolios;
    public $gallery;
    
    public function mount(Portfolio $portfolio, Gallery $gallery): void
    {
        $this->portfolios = $portfolio::with(['service','gallery'])->where('published', true)->orderBy('created_at', 'desc')->get();
        $this->gallery = $gallery::where('published', true)->get();
        #dd($this->portfolios->count());
        #dd($this->portfolios[0]->gallery()->first()['cover']);
    }

    public function getPath($id)
    {
        $gallery = Gallery::where([
            ['status', true],
            ['portfolio_id', $id]
            ])->get();
        
        return $path = $gallery[0]->cover;
    }

    public function render()
    {
        return view('livewire.pages.portfolio-controller')->layout('layouts.base');
    }
}
