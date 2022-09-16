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
                            <li>Contacto</li>
                        </ul>
                        <h2>Contacte-nos</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->
    
            <!--Contact Page Start-->
            <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="contact-page__left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Contacte-nos</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">Gratos por cantactar-nos!</h2>
                                </div>
                                <div class="contact-page__call-email">
                                    <div class="contact-page__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-page__call-email-content">
                                        <h4>
                                            <a href="tel:9200368090" class="contact-page__call-number">(+244) 999 999-999</a>
                                            <a href="mailto:contacto@egoli.com" class="contact-page__email">contacto@egoli.com</a>
                                        </h4>
                                    </div>
                                </div>
                                <p class="contact-page__location-text">Suporte especialisado <br> A tempo inteiro</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="contact-page__right">
                                <div class="contact-page__form">
                                    <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Seu nomee" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Endereço de email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Telefone" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Assunto" name="subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Escreva sua mensagem"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="submit" class="thm-btn comment-form__btn">Enviar Mensagem</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Contact Page End-->
    
            <!--CTA One Start-->
            <section class="cta-one cta-three">
                <div class="container">
                    <div class="cta-one__content">
                        <div class="cta-one__inner">
                            <div class="cta-one__left">
                                <h3 class="cta-one__title">Fale diretamente com o nosso suporte</h3>
                            </div>
                            <div class="cta-one__right">
                                <div class="cta-one__call">
                                    <div class="cta-one__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="cta-one__call-number">
                                        <a href="tel:9200368090">(+244) 999 999-999</a>
                                        <p>Entre em Contacto</p>
                                    </div>
                                </div>
                                <div class="cta-one__btn-box">
                                    <a href="tel:9200368090" class="thm-btn cta-one__btn">Liga já</a>
                                </div>
                            </div>
                            <div class="cta-one__img">
                                <img src="{{asset('assets/images/resources/cta-one-img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--CTA One End-->
    
            <!--Google Map Start-->
            <section class="google-map-two">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-8.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                    class="google-map__two" allowfullscreen></iframe>
    
            </section>
            <!--Google Map End-->
</div>
