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
                    <li>Notícias</li>
                </ul>
                <h2>Todas as Notícias</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    
    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="row">
                @forelse ($Post as $post)
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{env('MY_PATH'). $post->cover}}" alt="">
                            <div class="news-one__tag">
                                <p><i class="far fa-folder"></i>{{Str::ucfirst($post->category->title)}}</p>
                            </div>
                            <div class="news-one__arrow-box">
                                <a href="{{route('postshow', $post->slug)}}" class="news-one__arrow">
                                    <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="{{route('postshow', $post->slug)}}"><i class="far fa-calendar"></i> {{$post->created_at->diffForHumans()}} </a>
                                </li>
                                <li><a href="{{route('postshow', $post->slug)}}"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="{{route('postshow', $post->slug)}}">{{Str::words($post->title, 3, '...')}}</a></h3>
                            <p class="news-one__text">{{Str::words($post->body, 8, '...')}}</p>
                            <div class="news-one__read-more">
                                <a href="{{route('postshow', $post->slug)}}">Ler Mais <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                @empty
                    
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-1-2.jpg" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="news-details.html" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-calendar"></i> 15 March, 2022 </a>
                                    </li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="news-details.html">Leverage agile frameworks to provide</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-1-3.jpg" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="news-details.html" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-calendar"></i> 15 March, 2022 </a>
                                    </li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="news-details.html">Bring to the table win-win survival strategis</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                @endforelse
            </div>
        </div>
    </section>
    <!--News One End-->
</div>
