<?php

namespace App\Http\Livewire\Components;

use Domain\Comment\Models\Comment as ModelsComment;
use Livewire\Component;

class Comment extends Component
{

    public $comment;

    protected $rules = [
        'comment.name' => 'required|string|min:3',
        'comment.email' => 'required|email',
        'comment.body' => 'required|string'
    ];

    public function mount(ModelsComment $comment): void
    {
        $this->comment = $comment;
    }

    public function comment()
    {
        $data = $this->validate()['comment'];
        dd($data);
        $data['portfolio_id'] = null;
        $data['published'] = true;
        $this->post->comment()->create($data);
        $this->comment->fresh();
    }

    public function render()
    {
        return view('livewire.components.comment');
    }
}
