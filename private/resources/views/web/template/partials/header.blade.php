<header class="header @yield('headerClass') d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-24">
                <a href="/" class="header__logo">
                    {{ svg_image('assets/img/logo') }}
                </a>
            </div>
            <div class="col-24 d-flex align-items-center justify-content-end">
                <button class="js-hamburger-menu-trigger hamburger hamburger--spin" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</header>