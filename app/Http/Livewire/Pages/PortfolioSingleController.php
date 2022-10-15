<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Gallery\Models\Gallery;
use Artesaos\SEOTools\Facades\SEOMeta;
use Domain\Portfolio\Models\Portfolio;
use Artesaos\SEOTools\Facades\OpenGraph;
use Illuminate\Http\Request;

class PortfolioSingleController extends Component
{
    public $portfolio;
    public $gallery;
    
    public function mount(Portfolio $portfolio, Gallery $gallery, Request $request): void
    {
        $this->portfolio = $portfolio;
        $this->gallery = $this->portfolio->gallery()->get();
        #dd($this->gallery);
        #dd($this->portfolios[0]->gallery()->first()['cover']);
        $request->visitor()->visit($portfolio); // create log for post
    }

    public function render()
    {
        $base = 'https://egoi-world-business.test/post/';
        SEOMeta::setTitle($this->portfolio->title);
        SEOMeta::setDescription($this->portfolio->body);
        SEOMeta::addMeta('article:published_time', $this->portfolio->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $this->portfolio->service->title, 'property');
        #SEOMeta::addKeyword(['key1', 'key2', 'key3']);

        OpenGraph::setDescription($this->portfolio->body);
        OpenGraph::setTitle($this->portfolio->title);
        OpenGraph::setUrl($base.$this->portfolio->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt');
        OpenGraph::addProperty('locale:alternate', ['pt-br', 'en-us']);

        OpenGraph::addImage(env('MY_PATH'). $this->portfolio->gallery->first()->cover);
        OpenGraph::addImage(env('MY_PATH'). $this->portfolio->gallery->first()->cover[0]);
        OpenGraph::addImage(['url' => env('MY_PATH'). $this->portfolio->gallery->first()->cover, 'size' => 300]);
        OpenGraph::addImage(env('MY_PATH'). $this->portfolio->gallery->first()->cover, ['height' => 300, 'width' => 300]);

        OpenGraph::setTitle($this->portfolio->title)
            ->setDescription($this->portfolio->body)
            ->setType('article')
            ->setArticle([
                'published_time' => $this->portfolio->created_at,
                'modified_time' => $this->portfolio->updated_at,
                'author' => 'Egoli World Business',
                'tag' => 'Portifolio / Egoli',
            ]);
            
        return view('livewire.pages.portfolio-single-controller')->layout('layouts.base');

    }
}
