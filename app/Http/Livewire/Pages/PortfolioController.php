<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Gallery\Models\Gallery;
use Domain\Portfolio\Models\Portfolio;
use Artesaos\SEOTools\Facades\SEOTools;

class PortfolioController extends Component
{
    public $portfolios;
    public $gallery;
    
    public function mount(Portfolio $portfolio, Gallery $gallery): void
    {
        $this->portfolios = $portfolio::with(['service','gallery'])->where('published', true)->orderBy('created_at', 'desc')->get();
        $this->gallery = $gallery::with(['portfolio'])->where('published', true)->get();
        #dd($this->gallery[3]['portfolio_id']);
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
        SEOTools::setTitle('Contacto');
        SEOTools::setDescription('Temos um suporte altamente especializado e completamente a seu dispor. 
        Entre em contacto e saia agora mesmo da zona de incerteza, obtenha explicações claras do que quer.');
        SEOTools::opengraph()->setUrl('https://egoliworldbusiness.com/contact');
        SEOTools::setCanonical('https://egoliworldbusiness.com/contact');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://egoliworldbusiness.com/public/assets/images/resources/logo-1.png');
        
        return view('livewire.pages.portfolio-controller')->layout('layouts.base');
    }
}
