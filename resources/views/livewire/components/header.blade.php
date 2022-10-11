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
                                <p><a href="mailto:{{$Enterprise->general_email}}">{{$Enterprise->general_email}}</a></p>
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
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="fab fa-twitter"></i></a>
                            <a href="http://www.facebook.com/share.php?u=https://egoliworldbusiness.com"><i class="fab fa-facebook"></i></a>
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
                                    <li class="dropdown {{ Route::currentRouteName() == 'home' ? 'current' : ''  }} megamenu">
                                        <a href="{{route('home')}}">Home </a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'about' ? 'current' : ''  }}"><a href="{{route('about')}}">Sobre</a></li>
                                    
                                    <li class="{{ (Route::currentRouteName() == 'serviceindex' || Route::currentRouteName() == 'serviceshow') ? 'current' : ''  }}"><a href="{{route('serviceindex')}}">Serviços</a></li>
                                    <li class="{{ (Route::currentRouteName() == 'portfolioindex' || Route::currentRouteName() == 'portfolioshow') ? 'current' : ''  }}"><a href="{{route('portfolioindex')}}">Portfolio</a></li>
                                    <li class="{{ (Route::currentRouteName() == 'postindex' || Route::currentRouteName() == 'postshow') ? 'current' : ''  }}"><a href="{{route('postindex')}}">Notícias </a></li>
                                    <li class="{{ Route::currentRouteName() == 'contact' ? 'current' : ''  }}"><a href="{{route('contact')}}">Contacto </a></li>
                                </ul>
                            </div>
                            <div class="main-menu__main-menu-box-search-get-quote-btn">
                                <div class="main-menu__main-menu-box-search">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu__main-menu-box-get-quote-btn-box">
                                    <a href="{{route('contact')}}" class="thm-btn main-menu__main-menu-box-get-quote-btn">Newslatter</a>
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
