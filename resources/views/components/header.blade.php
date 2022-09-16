<header class="main-header clearfix">
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner">
                <div class="main-header__top-address">
                    <ul class="list-unstyled main-header__top-address-list">
                        <li>
                            <i class="icon">
                                <span class="icon-pin"></span>
                            </i>
                            <div class="text">
                                <p>Suporte 24 horas em qualquer parte do mundo</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon">
                                <span class="icon-email"></span>
                            </i>
                            <div class="text">
                                <p><a href="mailto:contacto@egoli.com">contacto@egoli.com</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-header__top-right">
                    <div class="main-header__top-menu-box">
                        <ul class="list-unstyled main-header__top-menu">
                            <li><a href="{{route('home')}}"> FAQs</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                        </ul>
                    </div>
                    <div class="main-header__top-social-box">
                        <div class="main-header__top-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner clearfix">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="{{route('home')}}"><img src="{{asset('assets/images/resources/logo-1.png')}}" alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current megamenu">
                                        <a href="{{route('home')}}">Home </a>
                                    </li>
                                    <li><a href="{{route('about')}}">Quem Somos</a></li>
                                    
                                    <li class="dropdown">
                                        <a href="#">Serviços </a>
                                        <ul>
                                            <li><a href="{{route('service')}}">Serviços</a></li>
                                            <li><a href="{{route('home')}}">Serviço 1</a></li>
                                            <li><a href="{{route('home')}}">Serviço2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Portfolio</a>
                                        <ul>
                                            <li><a href="{{route('portifolio')}}">Portfolio</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contacto </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__main-menu-box-search-get-quote-btn">
                                <div class="main-menu__main-menu-box-search">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu__main-menu-box-get-quote-btn-box">
                                    <a href="contact.html" class="thm-btn main-menu__main-menu-box-get-quote-btn">Newslatter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="main-menu__call-content">
                                <a href="tel:9200368090">(+244) 999 999-999</a>
                                <p>Entre Em Contacto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


</header>