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
                    <h2>{{Str::ucfirst($service->title)}}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Why Choose Two Start-->
        <section class="why-choose-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">{{Str::ucfirst($service->title)}}</h2>
                            </div>
                            <p class="why-choose-two__text">
                                <x-markdown>
                                {{$service->description}}
                                </x-markdown>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__right">
                            <div class="why-choose-two__list-box">
                                <ul class="list-unstyled why-choose-two__list">
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-easy-to-use"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Optimização</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">Optimizamos sempre, para resultaods excelentes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-contract"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Processual</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">Respeitamos cada fase, por um processo melhor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-policy"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Controle</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">Temos controle perfeito em todos os nossos processos</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-fund"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Custo-benefício</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">O melhor custo-beneficio para todos os clientes e parceiros</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Two End-->

        <!--Feature Four Start-->
        <section class="feature-four">
            <div class="container">
                <div class="feature-four__top">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="feature-four__top-inner">
                                <div class="feature-four__top-call">
                                    <div class="feature-four__top-call-box">
                                        <div class="feature-four__top-call-number-box float-bob-y">
                                            <a href="tel:{{$Enterprise->general_phone}}">{{$Enterprise->general_phone}}</a>
                                        </div>
                                        <div class="feature-four__top-call-box-two">
                                            <div class="feature-four__top-call-box-three">
                                                <div class="feature-four__top-call-icon">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-four__top-content">
                                    <h3 class="feature-four__top-title">Fale com um dos nossos especialistas da área</h3>
                                    <p class="feature-four__top-text">Temos um suporte altamente especializado e completamente
                                        a seu dispor. Entre em contacto e saia agora mesmo da zona de incerteza, obtenha explicações claras do que quer.
                                    </p>
                                    <div class="feature-four__top-btn-box">
                                        <a href="about.html" class="thm-btn feature-four__top-btn">Faça por Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature Four End-->

        <!--FAQ One Start-->
        <section class="faq-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Nós Queremos te Ajudar</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Questões frequentes <br> respostas previas</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="faq-one__single">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                @foreach ($service->FAQ as $faq)
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>?</span> {{$faq->question}}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>{{$faq->response}}</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ One End-->
</div>
