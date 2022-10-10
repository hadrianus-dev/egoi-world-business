<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Domain\Post\Models\Post;

class BlogSearch extends Component
{
    public $postResults;
    public $searchWords;

    public function render()
    {
        if($this->searchWords){
            $this->postResults = Post::where([['published', true],['title', 'like', '%'.$this->searchWords.'%']])->get();
        }
        return view('livewire.components.blog-search');
    }
}
