<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Service\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Domain\Enterprise\Models\Enterprise;

class ServiceController extends Component
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
        SEOTools::setTitle('Serviços');
        SEOTools::setDescription('Temos um suporte altamente especializado e completamente a seu dispor. 
        Entre em contacto e saia agora mesmo da zona de incerteza, obtenha explicações claras do que quer.');
        SEOTools::opengraph()->setUrl('https://egoliworldbusiness.com/service');
        SEOTools::setCanonical('https://egoliworldbusiness.com/service');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://egoliworldbusiness.com/public/assets/images/resources/logo-1.png');
        
        return view('livewire.pages.service-controller')->layout('layouts.base');
    }
}
