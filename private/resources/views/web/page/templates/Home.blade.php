@extends('web.template.layout')

@section('content')
<div class="position-relative">
    <div class="js-slick main-slider position-relative" data-slick-progressbar="true" data-slick='{
            "autoplay": true,
            "autoplaySpeed": 3000,
            "speed": 1000,
            "arrows": false,
            "dots": true,
            "fade": false,
            "lazyLoad": "ondemand"
        }'>
            <div class="main-slider__item main-slider__item--1 background-cover d-flex align-items-center text-white">
                <div class="container">
                    <div class="font-size-30 font-size-sm-40 font-size-lg-60 line-height-1 mb-5">
                        % 100 <br>
                        Dana Kontrfile Kıyma
                    </div>
                    <div class="max-width-sm-500 max-width-lg-550 font-size-lg-20 line-height-1-8 mb-10 mb-sm-20">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat. Vivamus molestie, tortor ut dapibus ultrices, turpis ipsum rhoncus mauris.
                    </div>
                    <button type="submit" class="button-main--fill py-3 px-10 px-sm-15 font-weight-800 white-space-nowrap font-size-sm-18">Tüm Ürünler</button>
                </div>
            </div>
            <div class="main-slider__item main-slider__item--1 background-cover d-flex align-items-center text-white">
                <div class="container">
                    <div class="font-size-30 font-size-sm-40 font-size-lg-60 line-height-1 mb-5">
                        % 100 <br>
                        Dana Kontrfile Kıyma
                    </div>
                    <div class="max-width-sm-500 max-width-lg-550 font-size-lg-20 line-height-1-8 mb-10 mb-sm-20">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat. Vivamus molestie, tortor ut dapibus ultrices, turpis ipsum rhoncus mauris.
                    </div>
                    <a href="javascript:void(0);" class="button button-main--fill py-3 px-10 px-sm-15 font-weight-800 white-space-nowrap font-size-sm-18">Tüm Ürünler</a>
                </div>
            </div>
        </div>
    </div>
    <div class="min-height-100vh background-cover background-attachment-fixed py-10" style="background-image: url({{ asset('assets/img/home/1.jpg') }})">
        <div class="container text-white">
            <h1 class="font-size-30 font-size-sm-54 font-size-md-73 font-size-lg-98 font-size-xl-109 font-size-xxl-119 font-size-xxxl-140 font-size-xxxxl-149 font-weight-300 text-xl-center mb-10 mb-lg-20 mb-xxxxl-30">naret <strong class="position-relative"><span class="text-main">&#34;</span>iyi et<span class="text-main">&#34;</span></strong> ekosistemi</h1>
            <div class="row no-gutters mb-xl-15 mb-xxxxl-30">
                <div class="col-xl-24 mb-10 mb-xl-0">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="mb-5 mb-lg-0">
                            <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mr-lg-5 mr-xxxl-10">
                                {{ svg_image('assets/img/icons/cow2', ['class' => 'icon-cow']) }}
                            </div>
                        </div>
                        <div>
                            <h2 class="font-weight-bold font-size-22 font-size-sm-28 font-size-lg-32 mb-1 mb-lg-0">
                                % 100 Yerli Besi
                            </h2>
                            <div class="max-width-xl-450 font-size-14 font-size-sm-16">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-24 mb-10 mb-xl-0">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="mb-5 mb-lg-0">
                            <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mr-lg-5 mr-xxxl-10">
                                {{ svg_image('assets/img/icons/circulation', ['class' => 'icon-circle']) }}
                            </div>
                        </div>
                        <div>
                            <h2 class="font-weight-bold font-size-22 font-size-sm-28 font-size-lg-32 mb-1 mb-lg-0">
                                Hızlı Sirkülasyon Taze Ürün
                            </h2>
                            <div class="max-width-xl-450 font-size-14 font-size-sm-16">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor,e et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-24 mb-10 mb-xl-0">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="mb-5 mb-lg-0">
                            <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mr-lg-5 mr-xxxl-10">
                                {{ svg_image('assets/img/icons/control-check', ['class' => 'icon-control-check']) }}
                            </div>
                        </div>
                        <div>
                            <h2 class="font-weight-bold font-size-22 font-size-sm-28 font-size-lg-32 mb-1 mb-lg-0">
                                Tam denetim, Tam Kontrol
                            </h2>
                            <div class="max-width-xl-450 font-size-14 font-size-sm-16">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor,e et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-24 mb-10 mb-xl-0">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="mb-5 mb-lg-0">
                            <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mr-lg-5 mr-xxxl-10">
                                {{ svg_image('assets/img/icons/snow', ['class' => 'icon-circle']) }}
                            </div>
                        </div>
                        <div>
                            <h2 class="font-weight-bold font-size-22 font-size-sm-28 font-size-lg-32 mb-1 mb-lg-0">
                                Soğuk Zincir/Lojistik Konusu
                            </h2>
                            <div class="max-width-xl-450 font-size-14 font-size-sm-16">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor,e et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between bg-white">
        <div class="col-lg-22 pt-10 pb-10 pb-lg-20 py-xxxxl-20">
            <div class="js-set-container-offset-left">
                <div class="js-set-container-offset-right" data-breakpoint-down="lg">
                    <h2 class="text-dark-gray font-size-28 font-size-lg-38 font-size-xl-42 font-size-xxxl-55 font-size-xxxxl-64 font-weight-800 line-height-1-2 mb-3 mb-xxxxl-7">Brand Heritage <br> Paragraph Heading</h2>
                    <div class="font-size-lg-16 font-size-xl-18 font-size-xxl-20 line-height-1-8 mb-5 mb-lg-10 mb-xxxxl-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat. Vivamus molestie, tortor ut dapibus ultrices, turpis ipsum rhoncus mauris, eget fringilla est leo sed nulla. Vivamus finibus risus eget scelerisque malesuada.
                        <br><br>
                        Nam finibus aliquet lectus, vel scelerisque massa. Nulla facilisi. Nam vel mattis elit, iaculis consequat nisi. Suspendisse tempor ex nunc, eget fermentum justo scelerisque ornare.
                    </div>
                    @if (getPageByTemplate('About'))
                        <a href="{{ getPageByTemplate('About')['viewLink'] }}" class="button button-main--fill py-5 px-10 px-sm-20 font-weight-800 white-space-nowrap font-size-xxl-24">Discover more</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="js-light-gallery col-lg-26 pl-lg-10 pl-xxxxl-20">
            <a href="https://www.youtube.com/watch?v=4cQaNp1jar0" class="js-gallery-item video__home d-flex mt-lg-n12 mt-xxxl-n20 mb-xxxxl-20">
                <img class="img-fluid w-100" src="{{ asset('assets/img/home/2.jpg') }}" alt="">
                {{ svg_image('assets/img/icons/play') }}
            </a>
        </div>
    </div>
    <div class="row align-items-end justify-content-between bg-main">
        <div class="col-lg-22 py-20">
            <div class="js-set-container-offset-left">
                <div class="js-set-container-offset-right text-white" data-breakpoint-down="lg">
                    <img class="mb-10" src="{{ asset('assets/img/home/cow.png') }}" alt="">
                    <h2 class="font-size-xl-50 font-size-xxxl-60 font-weight-800 mb-5">Livestock Heading</h2>
                    <div class="font-size-lg-16 font-size-xxxl-20 line-height-1-8 mb-5 mb-lg-10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat. Vivamus molestie, tortor ut dapibus ultrices, turpis ipsum rhoncus mauris, eget fringilla est leo sed nulla. Vivamus finibus risus eget scelerisque malesuada.
                    </div>
                    @if (getPageByTemplate('ProductionFacilities'))
                        <a href="{{ getPageByTemplate('CuttingFacilities')['viewLink'] }}" class="button button-main--fill py-5 px-10 px-sm-20 font-weight-800 white-space-nowrap font-size-16 font-size-xxxl-24">Discover more</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-26 pl-lg-10 pb-lg-0 pl-xxxxl-20">
            <div class="box-shadow__home-livestock position__live-stock">
                <div class="h-100">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/home/3.jpg') }}" alt="">
                    <div class="bg-white pt-8 pb-10 px-lg-20 px-xxxl-30">
                        <div class="js-set-container-offset-left" data-breakpoint-down="lg">
                            <div class="js-set-container-offset-right" data-breakpoint-down="lg">
                                <h2 class="text-dark-gray font-size-xl-40 font-size-xxxl-60 font-weight-800 mb-2 mb-xxxl-5">Production Heading</h2>
                                <div class="max-width-lg-610 font-size-lg-16 font-size-xxxl-20 mb-10 line-height-1-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat. Vivamus molestie, tortor ut dapibus ultrices, turpis ipsum rhoncus mauris, eget fringilla est leo sed nulla. Vivamus finibus risus eget scelerisque malesuada.</div>
                                @if (getPageByTemplate('ProductionFacilities'))
                                    <a href="{{ getPageByTemplate('ProductionFacilities')['viewLink'] }}" class="button button-main--fill py-5 px-10 px-sm-20 font-weight-800 white-space-nowrap font-size-16 font-size-xxxl-24">Discover more</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="min-height-100vh background-cover background-attachment-fixed text-white py-20" style="background-image: url({{ asset('assets/img/home/4.jpg') }});">
        <div class="container">
            <div class="mb-15">
                <h2 class="font-size-28 font-size-lg-38 font-size-xl-42 font-size-xxxl-55 font-size-xxxxl-64 font-weight-800 line-height-1-2 mb-3 mb-xxxxl-7">Pro Cutters Heading</h2>
                <div class="max-width-610 font-size-lg-16 font-size-xl-18 font-size-xxl-20 line-height-1-8 mb-5 mb-lg-10 mb-xxxxl-15">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat. Vivamus molestie, tortor ut dapibus ultrices, turpis ipsum rhoncus mauris, eget fringilla est leo sed nulla. Vivamus finibus risus eget scelerisque malesuada.
                </div>
                <a href="javascript:void(0);" class="button button-main--fill py-4 px-10 font-weight-800 white-space-nowrap font-size-xxl-20">Naret Youtube Channel</a>
            </div>
            <div class="js-light-gallery row mx-n5">
                <div class="col-sm-24 col-xl-12 px-5 mb-10 mb-lg-0">
                    <a href="https://www.youtube.com/watch?v=4cQaNp1jar0" class="js-gallery-item video__home video__home--promotion-film">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/350x175" alt="">
                        {{ svg_image('assets/img/icons/play') }}
                        <div class="mt-5">
                            <h3 class="font-size-18 font-size-lg-20 font-size-xxl-24 font-size-xxxl-30 font-weight-800">Video Section Heading</h3>
                            <div class="font-size-14 font-size-xxl-16 line-height-1-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat.</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-24 col-xl-12 px-5 mb-10 mb-lg-0">
                    <a href="https://www.youtube.com/watch?v=4cQaNp1jar0" class="js-gallery-item video__home video__home--promotion-film">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/350x175" alt="">
                        {{ svg_image('assets/img/icons/play') }}
                        <div class="mt-5">
                            <h3 class="font-size-18 font-size-lg-20 font-size-xxl-24 font-size-xxxl-30 font-weight-800">Video Section Heading</h3>
                            <div class="font-size-14 font-size-xxl-16 line-height-1-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat.</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-24 col-xl-12 px-5 mb-10 mb-lg-0">
                    <a href="https://www.youtube.com/watch?v=4cQaNp1jar0" class="js-gallery-item video__home video__home--promotion-film">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/350x175" alt="">
                        {{ svg_image('assets/img/icons/play') }}
                        <div class="mt-5">
                            <h3 class="font-size-18 font-size-lg-20 font-size-xxl-24 font-size-xxxl-30 font-weight-800">Video Section Heading</h3>
                            <div class="font-size-14 font-size-xxl-16 line-height-1-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat.</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-24 col-xl-12 px-5 mb-10 mb-lg-0">
                    <a href="https://www.youtube.com/watch?v=4cQaNp1jar0" class="js-gallery-item video__home video__home--promotion-film">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/350x175" alt="">
                        {{ svg_image('assets/img/icons/play') }}
                        <div class="mt-5">
                            <h3 class="font-size-18 font-size-lg-20 font-size-xxl-24 font-size-xxxl-30 font-weight-800">Video Section Heading</h3>
                            <div class="font-size-14 font-size-xxl-16 line-height-1-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales feugiat consequat.</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection