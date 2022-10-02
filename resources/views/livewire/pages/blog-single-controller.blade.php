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
                                    <ul class="list-unstyled news-details__meta">
                                        <li><a href="news-details.html"><i class="far fa-calendar"></i> {{$post->created_at->diffForHumans()}}  </a>
                                        </li>
                                        <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-details__title">{{Str::ucfirst($post->title)}}</h3>
                                    <x-markdown>
                                    {{$post->description}}
                                    </x-markdown>
                                </div>
                                {{-- <div class="news-details__bottom">
                                    <p class="news-details__tags">
                                        <span>Tags</span>
                                        <a href="#">Insurance</a>
                                        <a href="#">Policies</a>
                                    </p>
                                    <div class="news-details__social-list">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="blgo-details__pagenation-box">
                                    <ul class="list-unstyled news-details__pagenation">
                                        <li>We proudly protect our loved ones life</li>
                                        <li>Survived not only five centuries</li>
                                    </ul>
                                </div> --}}
                                {{-- <div class="comment-one">
                                    <h3 class="comment-one__title">2 comments</h3>
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Kevin Martin</h3>
                                            <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                                            <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                        </div>
                                    </div>
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Sarah Albert</h3>
                                            <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                                            <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="comment-form">
                                    <h3 class="comment-form__title">Deixe seu Comentário</h3>
                                    <form action="#" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write a comment"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="submit" class="thm-btn comment-form__btn">Submit comment</button>
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
                                    <form action="#" class="sidebar__search-form">
                                        <input type="search" placeholder="Pesquise Aqui">
                                        <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                    </form>
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
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p><span>John Doe</span> on Template:</p>
                                                <h5>Comments</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p> <span>John Doe</span> on Template:</p>
                                                <h5>Comments</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--News Details End-->
</div>
