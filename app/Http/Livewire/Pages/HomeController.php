<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Domain\Enterprise\Models\Enterprise;
use Domain\Post\Models\Post;
use Domain\Service\Models\Service;

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
        return view('livewire.pages.home-controller')->layout('layouts.base');
    }
}
