<div class="hamburger-menu bg-main text-black d-flex align-items-center">
    <div class="h-100 w-100">
        <div class="row no-gutters h-100">
            <div class="col-lg-16 d-none d-lg-block">
                <div class="js-hamburger-menu-trigger background-cover h-100" style="background-image: url({{ asset('assets/img/menu/1.jpg') }});"></div>
            </div>
            <div class="col-lg-14 col-xxl-12 hamburger-menu-level-1 js-hamburger-menu-level-1">
                <div class="bg-main hamburger-menu__top-spacing">
                    <div class="nav nav-pills d-block text-white font-size-lg-18 font-size-xxxxl-24 font-weight-700">
                        @if (getPageByTemplate('RetailProducts'))
                            <a href="#{{ getPageByTemplate('RetailProducts')['slug'] }}" class="nav-link hamburger-menu__nav-item d-flex align-items-center justify-content-between py-5 px-10 px-xxxl-15" data-toggle="pill">
                                {{ getPageByTemplate('RetailProducts')['title'] }} <i class="fas fa-chevron-right"></i>
                            </a>
                        @endif

                        @if (getPageByTemplate('WholesaleProducts'))
                            <a href="#{{ getPageByTemplate('WholesaleProducts')['slug'] }}" class="nav-link hamburger-menu__nav-item d-flex align-items-center justify-content-between py-5 px-10 px-xxxl-15" data-toggle="pill">
                                {{ getPageByTemplate('WholesaleProducts')['title'] }} <i class="fas fa-chevron-right"></i>
                            </a>
                        @endif

                        @if (getPageByTemplate('Manufacture'))
                            <a href="#{{ getPageByTemplate('Manufacture')['slug'] }}" class="nav-link hamburger-menu__nav-item d-flex align-items-center justify-content-between py-5 px-10 px-xxxl-15" data-toggle="pill">
                                {{ getPageByTemplate('Manufacture')['title'] }} <i class="fas fa-chevron-right"></i>
                            </a>
                        @endif

                        @if (getPageByTemplate('Corporate'))
                            <a href="#{{ getPageByTemplate('Corporate')['slug'] }}" class="nav-link hamburger-menu__nav-item d-flex align-items-center justify-content-between py-5 px-10 px-xxxl-15" data-toggle="pill">
                                {{ getPageByTemplate('Corporate')['title'] }} <i class="fas fa-chevron-right"></i>
                            </a>
                        @endif

                        @if (getPageByTemplate('Contact'))
                            <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="nav-link hamburger-menu__nav-item d-flex align-items-center justify-content-between py-5 px-10 px-xxxl-15">
                                {!! getPageByTemplate('Contact')['title'] !!}
                            </a>
                        @endif
                    </div>
                    <div class="d-flex align-items-center px-10 px-xxxl-15 pt-5 pt-xxxl-15">
                        @if (setting('social_facebook'))
                            <a target="_blank" href="{{ setting('social_facebook') }}" class="hamburger-menu__social-icon d-flex align-items-center justify-content-center mr-5 mr-xxxxl-10">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif

                        @if (setting('social_twitter'))
                            <a target="_blank" href="{{ setting('social_twitter') }}" class="hamburger-menu__social-icon d-flex align-items-center justify-content-center mr-5 mr-xxxxl-10">
                                <i class="fab fa-twitter"></i>
                            </a>
                        @endif

                        @if (setting('social_instagram'))
                            <a target="_blank" href="{{ setting('social_instagram') }}" class="hamburger-menu__social-icon d-flex align-items-center justify-content-center mr-5 mr-xxxxl-10">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif

                        @if (setting('social_youtube'))
                            <a target="_blank" href="{{ setting('social_youtube') }}" class="hamburger-menu__social-icon d-flex align-items-center justify-content-center">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-18 col-xxl-20 hamburger-menu-level-2 js-hamburger-menu-level-2">
                <div class="bg-main2 hamburger-menu__top-spacing h-100 text-white font-size-lg-18 font-size-xxxxl-24 font-weight-700">
                    <a href="javascript:void(0);" class="d-lg-none hamburger-menu__nav__submenu-item d-inline-flex py-5 px-10 px-xxxl-15 hamburger-menu-back js-hamburger-menu-back">
                        <i class="fa fa-chevron-left mr-4"></i> <span>GERİ DÖN</span>
                    </a>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="{{ getPageByTemplate('RetailProducts')['slug'] }}">
                            @foreach(getPageByTemplate('RetailProducts')['children'] as $child)
                                <div>
                                    <a href="{{ $child->getViewLink() }}" class="hamburger-menu__nav__submenu-item d-inline-flex py-5 px-10 px-xxxl-15">
                                        <span>{{ $child->getTitle() }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="{{ getPageByTemplate('WholesaleProducts')['slug'] }}">
                            @foreach(getPageByTemplate('WholesaleProducts')['children'] as $child)
                                <div>
                                    <a href="{{ $child->getViewLink() }}" class="hamburger-menu__nav__submenu-item d-inline-flex py-5 px-10 px-xxxl-15">
                                        <span>{{ $child->getTitle() }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="{{ getPageByTemplate('Manufacture')['slug'] }}">
                            @foreach(getPageByTemplate('Manufacture')['children'] as $child)
                                <div>
                                    <a href="{{ $child->getViewLink() }}" class="hamburger-menu__nav__submenu-item d-inline-flex py-5 px-10 px-xxxl-15">
                                        <span>{{ $child->getTitle() }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="{{ getPageByTemplate('Corporate')['slug'] }}">
                            @foreach(getPageByTemplate('Corporate')['children'] as $child)
                                <div>
                                    <a href="{{ $child->getViewLink() }}" class="hamburger-menu__nav__submenu-item d-inline-flex py-5 px-10 px-xxxl-15">
                                        <span>{{ $child->getTitle() }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>