<?php

namespace App\Http\Livewire\Components;

use Domain\Enterprise\Models\Enterprise;
use Domain\Post\Models\Post;
use Livewire\Component;

class Footer extends Component
{
    public $Enterprise;
    public $Posts;

    public function mount(Enterprise $enterprise, Post $post): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Posts = $post::where('published', true)->orderBy('created_at', 'desc')->limit(4)->get();
    }

    public function render()
    {
        return view('livewire.components.footer');
    }
}
