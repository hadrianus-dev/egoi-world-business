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
                            <li>404 erro</li>
                        </ul>
                        <h2>404 erro</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->
    
            <!--Error Page Start-->
            <section class="error-page">
                <div class="error-page-shape-1 float-bob-y"
                    style="background-image: url({{asset('assets/images/shapes/error-page-shape-1.png')}});">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="error-page__inner">
                                <div class="error-page__title-box">
                                    <h2 class="error-page__title">404</h2>
                                    <h3 class="error-page__sub-title">Pagina não Encontrada!</h3>
                                </div><br>
                                <p class="error-page__text">Lamentamos, nós não conseguimos encontrar a sua página! <br> A página que solicitou, não existe.</p>
                                
                                <a href="{{route('home')}}" class="thm-btn error-page__btn">Voltar a Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Error Page End-->
</div>
