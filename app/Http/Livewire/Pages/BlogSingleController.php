<?php

namespace App\Http\Livewire\Pages;

use Domain\Category\Models\Category;
use Domain\Comment\Models\Comment;
use Domain\Gallery\Models\Gallery;
use Domain\Post\Models\Post;
use Livewire\Component;

class BlogSingleController extends Component
{
    protected $listeners = ['comment' => 'comment'];

    public $post;
    public $posts;
    public $categories;
    public $comment;
    public $comments;
    public $allComments;
    public $galleries;

    protected $rules = [
        'comment.name' => 'required|string|min:3',
        'comment.email' => 'required|email',
        'comment.body' => 'required|string'
    ];

    public function mount(Post $post, Category $category, Comment $comment, Gallery $gallery): void
    {
        $this->post = $post;
        $this->comment = $comment;

        $this->allComments = $comment::where('published', true)->orderBy('created_at', 'desc')->get();
        $this->galleries = $gallery::where([['published', true],['post_id', $this->post->id]])->orderBy('created_at', 'desc')->get();
        $this->comments = $comment::where('published', true)->orderBy('created_at', 'desc')->limit(2)->get();
        $this->posts = Post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
        $this->categories = $category::where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
    }

    public function comment()
    {
        $data = $this->validate()['comment'];
        $data['portfolio_id'] = null;
        $data['published'] = true;
        #dd($data);
        $this->post->comment()->create($data);
        $this->comment->fresh();
        $this->comment->name = '';
        $this->comment->email = '';
        $this->comment->body = '';
    }

    public function render()
    {
        return view('livewire.pages.blog-single-controller')->layout('layouts.base');
    }
}
