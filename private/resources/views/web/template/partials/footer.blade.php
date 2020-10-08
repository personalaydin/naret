<footer class="footer">
    <div class="container h-100">
        <div class="row align-items-stretch no-gutters h-100">
            <div class="col-lg-37 py-10 py-lg-0">
                <div class="row align-items-center no-gutters h-100">
                    <div class="col-lg-12 col-xl-10 mb-10 mb-lg-0">
                        <a href="/" class="footer__logo">
                            {{ svg_image('assets/img/logo') }}
                        </a>
                    </div>
                    <div class="col-lg-36 col-xl-38">
                        <div class="row no-gutters">
                            <div class="col-24 col-lg-10 mb-5 mb-lg-0">
                                <div>
                                    @if (getPageByTemplate('RetailProducts'))
                                        <div class="text-gray-400 font-size-lg-15 font-size-xxl-16 font-weight-700 mb-1 mb-xxl-2">
                                            {{ getPageByTemplate('RetailProducts')['title'] }}
                                        </div>
                                    @endif

                                    <div class="font-weight-300 font-size-13 font-size-xl-15 font-size-xxxl-16">
                                        @foreach(getPageByTemplate('RetailProducts')['children'] as $child)
                                            <div>
                                                <a href="{{ $child->getViewLink() }}" class="footer__item">
                                                    {{ $child->getShortTitle() }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-24 col-lg-8 mb-5 mb-lg-0">
                                <div>
                                    @if (getPageByTemplate('WholesaleProducts'))
                                        <div class="text-gray-400 font-size-lg-15 font-size-xxl-16 font-weight-700 mb-1 mb-xxl-2">
                                            {{ getPageByTemplate('WholesaleProducts')['title'] }}
                                        </div>
                                    @endif

                                    <div class="font-weight-300 font-size-13 font-size-xl-15 font-size-xxxl-16">
                                        @foreach(getPageByTemplate('WholesaleProducts')['children'] as $child)
                                            <div>
                                                <a href="{{ $child->getViewLink() }}" class="footer__item">
                                                    {{ $child->getShortTitle() }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-24 col-lg-10 mb-5 mb-lg-0">
                                <div>
                                    @if (getPageByTemplate('Manufacture'))
                                        <div class="text-gray-400 font-size-lg-15 font-size-xxl-16 font-weight-700 mb-1 mb-xxl-2">
                                            {{ getPageByTemplate('Manufacture')['title'] }}
                                        </div>
                                    @endif

                                    <div class="font-weight-300 font-size-13 font-size-xl-15 font-size-xxxl-16">
                                        @foreach(getPageByTemplate('Manufacture')['children'] as $child)
                                            <div>
                                                <a href="{{ $child->getViewLink() }}" class="footer__item">
                                                    {{ $child->getShortTitle() }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-24 col-lg-10 mb-5 mb-lg-0">
                                <div>
                                    @if (getPageByTemplate('Corporate'))
                                        <div class="text-gray-400 font-size-lg-15 font-size-xxl-16 font-weight-700 mb-1 mb-xxl-2">
                                            {{ getPageByTemplate('Corporate')['title'] }}
                                        </div>
                                    @endif

                                    <div class="font-weight-300 font-size-13 font-size-xl-15 font-size-xxxl-16">
                                        @foreach(getPageByTemplate('Corporate')['children'] as $child)
                                            <div>
                                                <a href="{{ $child->getViewLink() }}" class="footer__item">
                                                    {{ $child->getShortTitle() }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-24 col-lg-10 mb-5 mb-lg-0">
                                <div>
                                    @if (getPageByTemplate('Contact'))
                                        <div class="text-gray-400 font-size-lg-15 font-size-xxl-16 font-weight-700 mb-1 mb-xxl-2">
                                            {{ getPageByTemplate('Contact')['title'] }}
                                        </div>
                                    @endif
                                    <div class="font-weight-300 font-size-13 font-size-xl-15 font-size-xxxl-16">
                                        @if (getPageByTemplate('Contact'))
                                            <div>
                                                <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="footer__item">İletişim Bilgileri</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-11">
                <div class="bg-main d-flex align-items-center justify-content-start justify-content-lg-end bg-container-left bg-container-lg-left-none bg-container-right h-100 py-5 py-lg-0 pl-lg-5 pl-xxxl-10">
                    @if (setting('social_facebook'))
                        <a target="_blank" href="{{ setting('social_facebook') }}" class="footer__social-icon d-flex align-items-center justify-content-center mr-5 mr-xxxl-10">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif

                    @if (setting('social_twitter'))
                        <a target="_blank" href="{{ setting('social_twitter') }}" class="footer__social-icon d-flex align-items-center justify-content-center mr-5 mr-xxxl-10">
                            <i class="fab fa-twitter"></i>
                        </a>
                    @endif

                    @if (setting('social_instagram'))
                        <a target="_blank" href="{{ setting('social_instagram') }}" class="footer__social-icon d-flex align-items-center justify-content-center mr-5 mr-xxxl-10">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif

                    @if (setting('social_youtube'))
                        <a target="_blank" href="{{ setting('social_youtube') }}" class="footer__social-icon d-flex align-items-center justify-content-center">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>