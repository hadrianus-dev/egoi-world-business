<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOTools;

class ContactController extends Component
{
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
        
        return view('livewire.pages.contact-controller')->layout('layouts.base');
    }
}
