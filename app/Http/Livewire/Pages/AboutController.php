<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Service\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
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
        
        SEOTools::setTitle('Quem Somos');
        SEOTools::setDescription($this->Enterprise->body);
        SEOTools::opengraph()->setUrl('https://egoliworldbusiness.com/about');
        SEOTools::setCanonical('https://egoliworldbusiness.com/about');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://egoliworldbusiness.com/public/assets/images/resources/logo-1.png');
        
        return view('livewire.pages.about-controller')->layout('layouts.base');
    }
}
