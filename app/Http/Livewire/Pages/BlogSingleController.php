<?php

namespace App\Http\Livewire\Pages;

use Domain\Category\Models\Category;
use Domain\Comment\Models\Comment;
use Domain\Gallery\Models\Gallery;
use Domain\Post\Models\Post;
use Livewire\Component;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Illuminate\Http\Request;

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

    public function mount(Post $post, Category $category, Comment $comment, Gallery $gallery, Request $request): void
    {
        $this->post = $post;
        $this->comment = $comment;

        $this->allComments = $comment::where([['published', true],['post_id', $this->post->id]])->orderBy('created_at', 'desc')->get();
        $this->galleries = $gallery::where([['published', true],['post_id', $this->post->id]])->orderBy('created_at', 'desc')->limit(6)->get();
        $this->comments = $comment::where([['published', true],['post_id', $this->post->id]])->orderBy('created_at', 'desc')->limit(2)->get();
        $this->posts = Post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
        $this->categories = $category::where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
        
        $request->visitor()->visit($post); // create log for post
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
        $base = 'http://egoi-world-business.test/post/';
        SEOMeta::setTitle($this->post->title);
        SEOMeta::setDescription($this->post->body);
        SEOMeta::addMeta('article:published_time', $this->post->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $this->post->category->tile, 'property');
        #SEOMeta::addKeyword(['key1', 'key2', 'key3']);

        OpenGraph::setDescription($this->post->body);
        OpenGraph::setTitle($this->post->title);
        OpenGraph::setUrl($base.$this->post->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt');
        OpenGraph::addProperty('locale:alternate', ['pt-br', 'en-us']);

        OpenGraph::addImage(env('MY_PATH'). $this->post->cover);
        OpenGraph::addImage(env('MY_PATH'). $this->post->cover);
        OpenGraph::addImage(['url' => env('MY_PATH'). $this->post->cover, 'size' => 300]);
        OpenGraph::addImage(env('MY_PATH'). $this->post->cover, ['height' => 300, 'width' => 300]);

        OpenGraph::setTitle($this->post->title)
            ->setDescription($this->post->body)
            ->setType('article')
            ->setArticle([
                'published_time' => $this->post->created_at,
                'modified_time' => $this->post->updated_at,
                'author' => $this->post->user->first_name,
                'category' => $this->post->category->title,
                'tag' => 'Notícias / Egoli',
            ]);

        return view('livewire.pages.blog-single-controller')->layout('layouts.base');
    }
}
