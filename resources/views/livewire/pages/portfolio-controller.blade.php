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
                        @foreach ($portfolios as $portfolio)
                        <!--Portfolio Single Start-->
                        @if ($portfolio->gallery())
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{env('MY_PATH').$portfolio->gallery()->first()->cover}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{env('MY_PATH').$portfolio->gallery()->first()->cover}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">{{Str::words($portfolio->body, 3, '...')}}</p>
                                        <h4 class="portfolio__title"><a href="{{route('portfolioshow', $portfolio->slug)}}">{{$portfolio->title}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        @endif
                        @endforeach
       
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Carousel Page End-->
    
</div>
