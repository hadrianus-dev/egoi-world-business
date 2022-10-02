<div>
        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{asset('assets/images/backgrounds/main-slider-1-1.jpg')}});"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{asset('assets/images/shapes/main-slider-shape-1.png')}}" alt="">
                        </div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Excelência <br> proeficiência <br> e <span>resultados.</span></h2>
                                        <p class="main-slider__text">A Egoli World Business é uma empresa sólida e em contínuo <br> crescimento para responder às suas necessidades.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{route('about')}}" class="thm-btn main-slider__btn">Saiba Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{asset('assets/images/backgrounds/main-slider-1-2.jpg')}});"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{asset('assets/images/shapes/main-slider-shape-1.png')}}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Diferencial <br> experiênça <br> <span>estrategias.</span></h2>
                                        <p class="main-slider__text">A Egoli World Business é uma empresa sólida e em contínuo <br> crescimento para responder às suas necessidades.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{route('about')}}" class="thm-btn main-slider__btn">Saiba Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{asset('assets/images/backgrounds/main-slider-1-3.jpg')}});"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{asset('assets/images/shapes/main-slider-shape-1.png')}}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Promovendo <br> mudanças <br> que <span>ficam.</span></h2>
                                        <p class="main-slider__text">A Egoli World Business é uma empresa sólida e em contínuo <br> crescimento para responder às suas necessidades.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{route('about')}}" class="thm-btn main-slider__btn">Saiba Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-mission"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{asset('assets/images/shapes/feature-one-shape-1.png')}}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="{{route('about')}}">Missão</a></h3>
                                    <p class="feature-one__text"> {{$Enterprise->mission}}.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-family"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{asset('assets/images/shapes/feature-one-shape-1.png')}}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="{{route('about')}}">Visão</a></h3>
                                    <p class="feature-one__text"> {{$Enterprise->vision}}</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-house"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{asset('assets/images/shapes/feature-one-shape-1.png')}}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="{{route('about')}}">Valor</a></h3>
                                    <p class="feature-one__text"> {{$Enterprise->value}}</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-bg wow slideInRight" data-wow-delay="100ms"
            data-wow-duration="2500ms" style="background-image: url({{asset('assets/images/backgrounds/about-one-bg.png')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="{{asset('assets/images/resources/about-one-img-1.jpg')}}" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="{{asset('assets/images/resources/about-one-img-2.jpg')}}" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <h2 class="about-one__experience-year">20</h2>
                                    <p class="about-one__experience-text">Anos de <br> Experiênça</p>
                                </div>
                                <div class="about-one__shape-1">
                                    <img src="{{asset('assets/images/shapes/about-one-shape-1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">A Nossa Companhia</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Dispômos dos melhores recursos</h2>
                            </div>
                            <p class="about-one__text-1">A Egoli World Business assume-se como a ponte que faltava entre o continente Africano e a Europa!.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Refresing to get such a personal touch.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="about-one__text-2">{{$Enterprise->body}}</p>
                            <div class="about-one__btn-call">
                                <div class="about-one__btn-box">
                                    <a href="{{route('about')}}" class="thm-btn about-one__btn">Descubra Mais</a>
                                </div>
                                <div class="about-one__call">
                                    <div class="about-one__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="about-one__call-content">
                                        <a href="tel:{{$Enterprise->general_phone}}">(+244) 999 999-999</a>
                                        <p>Entre em Contacto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Nossos Serviços</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">Confira os nossos serviços e disponha</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text">Nullam eu nibh vitae est tempor molestie id sed ex. Quisque dignissim maximus ipsum, sed rutrum metus tincidunt et. Sed eget tincidunt ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="services-one__container">
                    <div class="row">
                       @foreach ($Services as $service)
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-ring"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{route('serviceshow', $service->slug)}}">{{$service->title}}</a></h3>
                                <p class="services-two__text">{{Str::words($service->body, 10, '...')}}</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Why Choose One Start-->
        <section class="download">
            <div class="download-bg" style="background-image: url({{asset('assets/images/backgrounds/download-bg.png')}});"></div>
            <div class="download-shape-1 float-bob-y">
                <img src="{{asset('assets/images/shapes/download-shape-1.png')}}" alt="">
            </div>
            <div class="download-shape-2 float-bob-x">
                <img src="{{asset('assets/images/shapes/download-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="download__left">
                            <p class="download__sub-title">Egoli World Business, uma opção à não descartar</p>
                            <h3 class="download__title">Trabalhe com quem já domina o mercado.</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="download__right">
                            <div class="download__img wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{asset('assets/images/resources/download-img-1.png')}}" alt="">
                                <div class="download__badge">
                                    <img src="{{asset('assets/images/shapes/download-dadge.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Get Insurance Start-->
        <section class="get-insurance">
            <div class="get-insurance-bg" style="background-image: url({{asset('assets/images/backgrounds/get-insurance-bg.png')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-insurance__left">
                            <div class="get-insurance__img wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                                <img src="{{asset('assets/images/resources/get-insurance-img-1.png')}}" alt="">
                            </div>
                            <div class="get-insurance__author">
                                <!-- <p>Alessa Rose</p> -->
                            </div>
                            <div class="get-insurance__circle"></div>
                            <div class="get-insurance__shape-1 float-bob-x">
                                <img src="{{asset('assets/images/shapes/get-insurance-shape-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-insurance__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Cotação Gratuita</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Peça a sua cotação para <br> um dos nossos serviços!</h2>
                            </div>
                            <div class="get-insurance__tab">
                                <div class="get-insurance__tab-box tabs-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#home2" class="tab-btn active-btn"><span>Pega uma  proforma</span></li>
                                       <!--  <li data-tab="#vehicles" class="tab-btn"><span>Transportes</span></li>
                                        <li data-tab="#health" class="tab-btn"><span>Catering</span></li>
                                        <li data-tab="#life" class="tab-btn"><span>Jogos</span></li> -->
                                    </ul>
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="home2">
                                            <div class="get-insurance__content">
                                                <form wire:submit.prevent='order' class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input wire:model='fullName' type="text" placeholder="Nome completo" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input wire:model='email' type="email" placeholder="Seu email" name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker" aria-label="Escolha">
                                                                <option selected>Escolha um serviço</option>
                                                                @foreach ($Services as $service)
                                                                <option value="{{$service->title}}">{{$service->title}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Pega uma cotação agora</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Get Insurance End-->

        <!--Counter One Start-->
        <Section class="counter-one">
            <div class="counter-one-shape-1 float-bob-y">
                <img src="{{asset('assets/images/shapes/counter-one-shape-1.png')}}" alt="">
            </div>
            <div class="counter-one-shape-2 float-bob-y">
                <img src="{{asset('assets/images/shapes/counter-one-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-insurance-1"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="2.6">00</h3>
                                        <span class="counter-one__plus">k</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Serviços Prestados</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="89">00</h3>
                                        <span class="counter-one__plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Professional team</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-life-insurance"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="2.8">00</h3>
                                        <span class="counter-one__plus">k</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Clientes Satisfeitos</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-success"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="99">00</h3>
                                        <span class="counter-one__plus">%</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Exitos em Projectos</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </Section>
        <!--Counter One End-->

        
        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Feed de Notícias Recentes</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Informa-te mais <br> com a Egoli News</h2>
                </div>
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
