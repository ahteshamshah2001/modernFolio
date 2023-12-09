<!-- ==================== Start Footer ==================== -->
<footer class="sub-bg">
    <section class="contact-crev section-padding">
        <div class="footer-container container" data-scroll-index="6">
            <div class="call-box text-center mb-80">
                <h2>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{ (!empty(Voyager::setting('site.phone')) ? Voyager::setting('site.phone') : '') }}">Let's <span
                            class="stroke"> Discuss</span></a>
                    <span class="arrow main-color3">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-lg-head md-mb80">
                        <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                        <h2 class="fz-50">Let's make your brand brilliant!</h2>
                        <p class="fz-15 mt-10">If you would like to work with us or just want to get in touch, we’d love to hear from you!</p>
                        <div class="phone fz-30 fw-600 mt-30 underline">
                            <a target="_blank"
                               href="https://api.whatsapp.com/send?phone={{ (!empty(Voyager::setting('site.phone')) ? Voyager::setting('site.phone') : '') }}">+{{ (!empty(Voyager::setting('site.phone')) ? Voyager::setting('site.phone') : '') }}</a>
                        </div>
                        <ul class="rest social-text d-flex mt-60">
                            <li class="mr-30">
                                <a target="_blank"
                                   href="{{ (!empty(Voyager::setting('site.1linkinbio')) ? Voyager::setting('site.1linkinbio') : '') }}"
                                   class="hover-this"><span
                                        class="hover-anim">1linkinbio.com/{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="full-width">
                        <form id="contact-form" method="post" action="">
                            <div class="messages"></div>
                            <div class="controls row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-30">
                                        <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                                      required="required"></textarea>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="butn butn-full butn-bord radius-30">
                                            <span class="text">Let's Talk</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer pt-40 pb-40 bord-thin-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright d-flex">
                        <div class="ml-auto">
                            <p class="fz-13">© 2017 To {{ date('Y') }} All rights reserved by <span class="underline"><a
                                        href="https://ahtesham.me"
                                        target="_blank">{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==================== End Footer ==================== -->
@include('portfolio.layouts._partials.footerLinks')
