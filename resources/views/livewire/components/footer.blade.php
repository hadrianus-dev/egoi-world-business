        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url({{asset('assets/images/backgrounds/site-footer-bg.png')}});"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="{{route('home')}}"><img src="{{asset('assets/images/resources/footer-logo.png')}}" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">{{Str::words($Enterprise->body, 30, '...')}}</p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contacto</h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:{{$Enterprise->general_email}}">{{$Enterprise->general_email}}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>30 Commercial Road Fratton, Australia</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="footer-widget__open-hour">
                                    <h3 class="footer-widget__open-hour-title">Disponibilidade</h3>
                                    <h3 class="footer-widget__open-hour-text">Seg – Sext: 8:00 am to 6:00 pm</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__gallery clearfix">
                                <h3 class="footer-widget__title">Posts Recentes</h3>
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                    @foreach ($Posts as $post)
                                     
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{asset('assets/images/resources/footer-widget-gallery-img-1.jpg')}}" alt="">
                                            <a href="#"><span class="fa fa-link"></span></a>
                                        </div>
                                    </li>
                                       
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <p class="footer-widget__newsletter-text">Subscreva-se e receba sempre as nossas newsletter<br></p>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn"><i
                                                class="far fa-paper-plane"></i></button>
                                    </div>
                                </form>
                                <div class="footer-widget__phone">
                                    <div class="footer-widget__phone-icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="footer-widget__phone-text">
                                        <a href="tel:{{$Enterprise->general_phone}}">{{$Enterprise->general_phone}}</a>
                                        <p>Entre em Contacto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2022 by <a href="#">egoli.com</a> | © 2022 Development by <a href="#">insidelinked.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->
