<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Service\Models\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Domain\Enterprise\Models\Enterprise;
use Illuminate\Http\Request;

class ServiceSingleController extends Component
{
    public $Enterprise;
    public $service;

    public function mount(Service $service, Enterprise $enterprise, Request $request): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->service = $service;
        $request->visitor()->visit($service); 
    }
    public function render()
    {
        $base = 'https://egoi-world-business.test/post/';
        SEOMeta::setTitle($this->service->title);
        SEOMeta::setDescription($this->service->body);
        SEOMeta::addMeta('article:published_time', $this->service->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $this->service->category->title, 'property');
        #SEOMeta::addKeyword(['key1', 'key2', 'key3']);

        OpenGraph::setDescription($this->service->body);
        OpenGraph::setTitle($this->service->title);
        OpenGraph::setUrl($base.$this->service->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt');
        OpenGraph::addProperty('locale:alternate', ['pt-br', 'en-us']);

        OpenGraph::setTitle($this->service->title)
            ->setDescription($this->service->body)
            ->setType('article')
            ->setArticle([
                'published_time' => $this->service->created_at,
                'modified_time' => $this->service->updated_at,
                'author' => 'Egoli World Business',
                'tag' => 'Portifolio / Egoli',
            ]);
            
        return view('livewire.pages.service-single-controller')->layout('layouts.base');
    }
}
