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
                        <li>Serviços Gearis</li>
                    </ul>
                    <h2>Nossos serviços</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Insurance Page One Start-->
        <section class="insurance-page-one">
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
        </section>
        <!--Insurance Page One End-->
</div>
