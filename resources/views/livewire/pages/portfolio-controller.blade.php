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
                            <li>portifólio</li>
                        </ul>
                        <h2>Nosso portifólio</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!--Portfolio Carousel Page Start-->
        <section class="portfolio-carousel-page">
            <div class="container">
                <div class="row">
                    <div class="thm-owl__carousel owl-theme owl-carousel portfolio-carousel carousel-dot-style" data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 3
                            }
                        }
                    }'>
                    @for ($i = 0; $i < $portfolios->count(); $i++)
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{env('MY_PATH').$gallery[$i]['cover']}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{env('MY_PATH').$gallery[$i]['cover']}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">{{$portfolios[$i]->title}}</p>
                                        <h4 class="portfolio__title"><a href="#">{{Str::words($portfolios[$i]->body, 3, '...')}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                    @endfor
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Carousel Page End-->
    
            <!--Portfolio Start-->
            {{-- <section class="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                                <li data-filter=".filter-item" class="active"><span class="filter-text">Todos</span></li>
                                <li data-filter=".stra"><span class="filter-text">Projecto</span></li>
                                <li data-filter=".busi"><span class="filter-text">Projecto</span></li>
                                <li data-filter=".insur"><span class="filter-text">Projecto</span></li>
                                <li data-filter=".poli"><span class="filter-text last-pd-none">Projecto</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row filter-layout masonary-layout">
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-1.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-1.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-2.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-2.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi poli">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-3.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-3.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item poli busi">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-4.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-4.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra poli">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-5.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-5.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item insur busi">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-6.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-6.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-7.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-7.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra poli">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-8.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-8.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item poli busi">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{asset('assets/images/project/portfolio-1-9.jpg')}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{asset('assets/images/project/portfolio-1-9.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Projecto</p>
                                        <h4 class="portfolio__title"><a href="#">Egoli projectos</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                    </div>
                </div>
            </section> --}}
            <!--Portfolio End-->
</div>
