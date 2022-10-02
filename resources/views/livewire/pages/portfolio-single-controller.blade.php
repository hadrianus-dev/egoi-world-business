<div>
            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}})">
                </div>
                <div class="page-header-shape-1"><img src="{{asset('assets/images/shapes/page-header-shape-1.png')}}" alt=""></div>
                <div class="container">
                    <div class="page-header__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>/</span></li>
                            <li>Portifólio</li>
                        </ul>
                        <h2>{{Str::ucfirst($this->portfolio->title)}}</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!--Portfolio Details Start-->
            <section class="portfolio-details">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="portfolio-details__img">
                                <img src="{{env('MY_PATH').$gallery[0]['cover']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-details__content">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="portfolio-details__content-left">
                                    <h3 class="portfolio-details__title">{{Str::ucfirst($this->portfolio->title)}}</h3>
                                    <x-markdown>
                                        {{$this->portfolio->description}}
                                    </x-markdown>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="portfolio-details__content-right">
                                    <div class="portfolio-details__details-box">
                                        <ul class="list-unstyled portfolio-details__details-list">
                                            {{-- <li>
                                                <p class="portfolio-details__client">Clients:</p>
                                                <h4 class="portfolio-details__name">Jessica Brown</h4>
                                            </li> --}}
                                            <li>
                                                <p class="portfolio-details__client">Serviço:</p>
                                                <h4 class="portfolio-details__name">{{Str::ucfirst($this->portfolio->service->title)}}</h4>
                                            </li>
                                            <li>
                                                <p class="portfolio-details__client">Cronologia:</p>
                                                <h5 class="portfolio-details__name">Começo: {{$this->portfolio->date_start}}</h5>
                                                <h5 class="portfolio-details__name">Termino: {{$this->portfolio->date_finish}}</h5>
                                            </li>
                                            <li>
                                                <div class="portfolio-details__social">
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Portfolio Details End-->
    
            <!--Portfolio Start-->
            <section class="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                                <li data-filter=".filter-item" class="active"><span class="filter-text">Todos</span></li>
                                <li data-filter=".stra"><span class="filter-text">Antes</span></li>
                                <li data-filter=".busi"><span class="filter-text">Depois</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row filter-layout masonary-layout">
                        @foreach ($gallery as $item)
                        <!--Portfolio Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item {{$item->status == true ? 'stra' : ''}}  {{$item->status == false ? 'busi' : ''}}">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{env('MY_PATH').$item->cover}}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{env('MY_PATH').$item->cover}}" class="img-popup"><span class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">{{Str::words($this->portfolio->body, 3,'...')}}</p>
                                        <h4 class="portfolio__title"><a href="#">{{Str::ucfirst($this->portfolio->title)}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                       @endforeach
                    </div>
                </div>
            </section>
            <!--Portfolio End-->
</div>
