<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Post\Models\Post;
use Domain\Service\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Domain\Enterprise\Models\Enterprise;

class HomeController extends Component
{
    public $Enterprise;
    public $Services;
    public $Post;

    public function mount(Enterprise $enterprise, Service $service, Post $post): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Services = $service::where('published', true)->orderBy('created_at', 'desc')->get();
        $this->Post = $post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
    }

    public function order(): void
    {
        # code...
    }
    
    public function render()
    {
        $base = 'http://egoi-world-business.test/post/';

        
        SEOTools::setTitle('Home');
        SEOTools::setDescription('A Egoli World Business é uma empresa angolana, 
        sediada em Luanda e com delegações em Portugal e na República do Congo, 
        que procura promover parcerias para o desenvolvimento das comunidades. ');
        SEOTools::opengraph()->setUrl('https://egoliworldbusiness.com');
        SEOTools::setCanonical('https://egoliworldbusiness.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://egoliworldbusiness.com/public/assets/images/resources/logo-1.png');

        
        return view('livewire.pages.home-controller')->layout('layouts.base');
    }
}
