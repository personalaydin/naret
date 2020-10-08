@extends('web.template.layout')

@section('content')
    <div class="bg-dark-blue min-height-55vh d-flex align-items-end">
        <div class="header-overflow"></div>

        <div class="text-white px-6 w-100">
            <div class="container">
                <div class="text-center font-size-20 font-size-sm-26 font-size-lg-36 font-size-xxl-40">naret <strong class="position-relative font-weight-900"><span class="text-main">&#34;</span>iyi et<span class="text-main">&#34;</span></strong> ekosistemi</div>
                <h1 class="text-center text-lg-left font-weight-700 font-size-30 font-size-sm-50 font-size-md-60 font-size-lg-70 font-size-xxl-90">{{ $page->getTitle() }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-24 box-line py-12">
                <div class="px-md-5 px-lg-18">
                    <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mb-5">
                        {{ svg_image('assets/img/icons/cow2', ['class' => 'icon-cow']) }}
                    </div>
                    <div class="font-size-20 font-size-md-30 font-size-lg-40 font-weight-800 mb-5">% 100 Yerli Besi</div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                </div>
            </div>
            <div class="col-md-24 box-line py-12">
                <div class="px-md-5 px-lg-18">
                    <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mb-5">
                        {{ svg_image('assets/img/icons/cow2', ['class' => 'icon-cow']) }}
                    </div>
                    <div class="font-size-20 font-size-md-30 font-size-lg-40 font-weight-800 mb-5">% 100 Yerli Besi</div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                </div>
            </div>
            <div class="col-md-24 box-line py-12">
                <div class="px-md-5 px-lg-18">
                    <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mb-5">
                        {{ svg_image('assets/img/icons/circulation', ['class' => 'icon-circle']) }}
                    </div>
                    <div class="font-size-20 font-size-md-30 font-size-lg-40 font-weight-800 mb-5">Hızlı Sirkülasyon Taze Ürün</div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                </div>
            </div>
            <div class="col-md-24 box-line py-12">
                <div class="px-md-5 px-lg-18">
                    <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mb-5">
                        {{ svg_image('assets/img/icons/circulation', ['class' => 'icon-circle']) }}
                    </div>
                    <div class="font-size-20 font-size-md-30 font-size-lg-40 font-weight-800 mb-5">Hızlı Sirkülasyon Taze Ürün</div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                </div>
            </div>
            <div class="col-md-24 box-line py-12">
                <div class="px-md-5 px-lg-18">
                    <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mb-5">
                        {{ svg_image('assets/img/icons/control-check', ['class' => 'icon-control-check']) }}
                    </div>
                    <div class="font-size-20 font-size-md-30 font-size-lg-40 font-weight-800 mb-5">Tam denetim, Tam Kontrol</div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                </div>
            </div>
            <div class="col-md-24 box-line py-12">
                <div class="px-md-5 px-lg-18">
                    <div class="d-flex align-items-center justify-content-center icon-main icon-70 icon-lg-100 mb-5">
                        {{ svg_image('assets/img/icons/control-check', ['class' => 'icon-control-check']) }}
                    </div>
                    <div class="font-size-20 font-size-md-30 font-size-lg-40 font-weight-800 mb-5">Tam denetim, Tam Kontrol</div>
                    <div class="font-size-16 font-size-md-18 font-size-lg-20 text-blue-400 line-height-1-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                </div>
            </div>
        </div>
    </div>
@endsection
