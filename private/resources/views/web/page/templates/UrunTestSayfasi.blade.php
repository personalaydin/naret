@extends('web.template.layout')


@section('content')

<style>
    .imgClass{
        width: 100%;
        padding: -5px;
        margin: 0%
    }
    .divClass{
        padding: unset !important;
    }
    .xcontainer {
        position: relative;
        text-align: center;
        color: white;
        }
    .align-center-on-image {
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

    <div class="page-products text-white">
        <div class="page-products__naret-kasap-urunleri-clone-bg"></div>
        <div class="position-relative z-index-3">
            <div class="minimum-full-height d-flex align-items-end justify-content-center mb-20 mb-sm-40">
                <div class="mb-20 mb-lg-40">
                    <div class="text-center">
                        <div class="font-size-30 font-size-sm-60 font-size-md-70 font-size-lg-100 line-height-1 mb-5 mb-lg-10">
                            <span class="font-weight-300">kasap</span><span class="font-weight-700">perakende</span>
                        </div>

                        <div class="max-width-700 mx-auto">
                            <div class="font-size-14 font-size-sm-18 font-size-md-20">
                                Praesent sodales condimentum dolor laoreet pretium. Vivamus molestie metus vitae tellus semper, id ultrices velit cursus. Donec ex diam, lacinia non sollicitudin in, finibus quis magna. Nulla placerat est mi, sit amet commodo odio elementum eu. Fusce risus turpis, dapibus in suscipit commodo, commodo eget eros. Sed sodales venenatis massa, vel congue elit.
                            </div>
                        </div>

                        <a class="js-scroll-to double-chevron font-size-100 font-size-md-180" href="javascript:void(0);" data-target=".product-item" data-offset="0">
                            <span class="chevron bottom"></span>
                            <span class="chevron bottom"></span>
                        </a>
                    </div>
                </div>
            </div>

            


            <div class="row product-item js-light-gallery" >
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-1.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-1.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">T-Bone</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-2.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-2.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Şiş</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-3.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-3.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Kuşbaşı</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-4.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-4.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Antrikot</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-5.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-5.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">T-Bone</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-6.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-6.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Şiş</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-7.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-7.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Kuşbaşı</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-8.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-8.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Antrikot</div>
                </div> 
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-9.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-9.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Kuşbaşı</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-10.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-10.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">T-Bone</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-2.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-2.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Şiş</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-12.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-12.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Kuşbaşı</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-13.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-13.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Antrikot</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-14.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-14.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Tecxt</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-15.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-15.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">T-Bone</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-16.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-16.jpg') }}" class="imgClass"></a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Şiş</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-17.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-17.jpg') }}" class="imgClass"</a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Dana Kuşbaşı</div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-xs-24 col-24 xcontainer divClass">
                    <a href="{{ asset('assets/img/kasap-parakende/product-18.jpg') }}" class="js-gallery-item"><img src="{{ asset('assets/img/kasap-parakende/product-18.jpg') }}" class="imgClass"</a>
                    <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-20">Antrikot</div>
                </div>
              </div>  


        </div>
    </div>
@endsection
