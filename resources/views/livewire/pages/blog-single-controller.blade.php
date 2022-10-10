<div>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}})">
            </div>
            <div class="page-header-shape-1"><img src="{{asset('assets/images/shapes/page-header-shape-1.png')}}" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Blog</li>
                    </ul>
                    <h2>{{Str::ucfirst($post->title)}}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
    
            <!--News Details Start-->
            <section class="news-details">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="news-details__left">
                                <div class="news-details__img">
                                    <img src="{{env('MY_PATH'). $post->cover}}" alt="">
                                </div>
                                <div class="news-details__content">
                                    <ul class="list-unstyled news-details__meta"
                                        <li><a href="news-details.html"><i class="far fa-calendar"></i> {{$post->created_at->diffForHumans()}}  </a>
                                        </li>
                                        <li><a href="news-details.html"><i class="far fa-comments"></i> {{$post->comment->count()}} Comentário(s)</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-details__title">{{Str::ucfirst($post->title)}}</h3>
                                    <x-markdown>
                                    {{$post->description}}
                                    </x-markdown>
                                </div>
                                <div class="news-details__bottom">
                                    <div class="news-details__social-list">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="blgo-details__pagenation-box">
                                    
                                <!--Similar Portfolio Start-->
                                <section class="similar-portfolio">
                                    <div class="row">
                                        @foreach ($galleries as $item)
                                        <!--Portfolio Single Start-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="portfolio__single">
                                                <div class="portfolio__img">
                                                    <img src="{{env('MY_PATH'). $item->cover}}" alt="">
                                                    <div class="portfolio__plus">
                                                        <a href="{{env('MY_PATH'). $item->cover}}" class="img-popup"><span class="icon-plus"></span></a>
                                                    </div>
                                                    <div class="portfolio__content">
                                                        <p class="portfolio__sub-title">Arquivos Relacionados</p>
                                                        <h4 class="portfolio__title"><a href="#">{{$post->title}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Portfolio Single End-->
                                        @endforeach
                                    </div>
                                </section>
                                <!--Similar Portfolio End-->
                                </div>
                                <div class="comment-one">
                                    <h3 class="comment-one__title">{{$allComments->count()}} Comentário(s)</h3>
                                    @foreach ($comments as $item)
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>{{$item->name}}</h3>
                                            <p>
                                                <x-markdown>
                                                    {{$item->body}}
                                                </x-markdown>
                                            </p>
                                            {{-- <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a> --}}
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                                <div wire:ignore.self class="comment-form">
                                    <h3 class="comment-form__title">Deixe seu Comentário</h3>
                                    <form action="#" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input wire:model='comment.name' type="text" placeholder="Seu nome" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input wire:model='comment.email' type="email" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea wire:model='comment.body' name="message" placeholder="Comentário"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="buttom" wire:click="comment" class="thm-btn comment-form__btn">Submeter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="sidebar">
                                <div class="sidebar__single sidebar__search">
                                    <livewire:components.blog-search>
                                </div>
                                <div class="sidebar__single sidebar__post">
                                    <h3 class="sidebar__title">Últimas Notícias</h3>
                                    <ul class="sidebar__post-list list-unstyled">
                                        @forelse ($posts as $posts)
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="{{env('MY_PATH'). $posts->cover}}" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <span class="sidebar__post-content-meta"><i class="far fa-bookmark"></i> {{$posts->category->title}}</span>
                                                    <a href="news-details.html">{{Str::words($posts->title, 3, '...')}}</a>
                                                </h3>
                                            </div>
                                        </li>
                                        @empty
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> by Admin</span>
                                                    <a href="news-details.html">Get tips to get quick
                                                        life insurance</a>
                                                </h3>
                                            </div>
                                        </li>
                                        @endforelse

                                    </ul>
                                </div>
                                <div class="sidebar__single sidebar__category">
                                    <h3 class="sidebar__title">Categorias</h3>
                                    <ul class="sidebar__category-list list-unstyled">
                                        @foreach ($categories as $category)
                                        <li class="{{($category->id === $post->category->id) ? 'active' : ''}}"><a href="#">{{$category->title}} 
                                            <span class="fas fa-angle-double-right">
                                                </span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                {{-- <div class="sidebar__single sidebar__tags">
                                    <h3 class="sidebar__title">Tags</h3>
                                    <div class="sidebar__tags-list">
                                        <a href="#">Insurance</a>
                                        <a href="#">Policies</a>
                                        <a href="#">Financial</a>
                                        <a href="#">Health Insurance</a>
                                        <a href="#">Money</a>
                                    </div>
                                </div> --}}
                                <div class="sidebar__single sidebar__comments">
                                    <h3 class="sidebar__title">Comentários</h3>
                                    <ul class="sidebar__comments-list list-unstyled">
                                        @foreach ($allComments as $item)
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p><span>{{$item->name}}</span> Disse:</p>
                                                <p>{{Str::words($item->body, 15, ' ...')}}</p>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--News Details End-->
</div>
