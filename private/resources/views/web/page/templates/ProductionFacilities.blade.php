@extends('web.template.layout')

@section('content')
    <div class="bg-dark-blue min-height-65vh min-height-lg-75vh d-flex align-items-center justify-content-center">
        <div class="header-overflow"></div>

        <div class="text-center text-white px-6">
            <h1 class="font-weight-700 font-size-lg-60">Video</h1>
        </div>
    </div>

    <div class="container">
        <div class="row mb-md-3 flex-column-reverse flex-md-row">
            <div class="col-md-30 bg-container bg-container-left bg-container-right bg-container-md-right-none bg-gray-100 d-flex align-items-end">
                <div class="pr-md-30 pl-xl-40 pr-xl-44 my-10">
                    <div class="text-line text-line-main pb-3 pb-lg-5 mb-10 h3 font-weight-800">
                        Marka Hikayesi viverra erat quis dignissim mi. In aliquam neque dictum eros dictum.
                    </div>

                    <div class="font-size-14 font-size-lg-18 text-blue-200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>
                </div>
            </div>
            <div class="col-md-18 col-lg-10 px-0 ml-md-n12 ml-xxl-n18 mt-md-20 mb-md-n10 position-relative z-index-1">
                <img class="img-fluid w-100 d-none d-md-block" src="{{ asset('assets/img/about/1.jpg') }}" alt="">
                <img class="img-fluid w-100 d-md-none" src="{{ asset('assets/img/about/1-mobile.jpg') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-21 px-0 text-right py-md-20 position-relative z-index-2 mr-md-n20 mr-xxl-n30">
                <img class="img-fluid w-100" src="{{ asset('assets/img/about/2.jpg') }}" alt="">
            </div>
            <div class="col-md-27 bg-container bg-container-left bg-container-md-left-none bg-container-right bg-gray-100 d-flex align-items-center">
                <div class="pl-md-30 pl-lg-40 my-10">
                    <div class="text-line text-line-main pb-3 pb-lg-5 mb-10 h3 font-weight-800">
                        Blandit viverra erat quis dignissim mi
                    </div>

                    <div class="font-size-14 font-size-lg-18 text-blue-200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background-cover text-white" style="background-image: url('{{ asset('assets/img/about/experience.jpg') }}')">
        <div class="container">
            <div class="row align-items-center py-16 min-height-400 max-width-1120 mx-auto">
                <div class="col-md-24 d-flex align-items-center justify-content-center justify-content-md-start mb-10 mb-md-0">
                    <div class="text-center">
                        <div class="font-size-80 font-weight-800 line-height-1">47 Yılık</div>
                        <div class="font-size-42 line-height-1">Tecrübe</div>
                    </div>
                </div>
                <div class="col-md-24">
                    <div class="font-size-18 font-size-sm-20 font-size-lg-22 text-center text-md-left">
                        Naret geleneksel imalathanelerden modern tesislerde üretime geçerek kaliteden ödün vermeden yeni bir süreç başlatmıştır. Bu başlayan süreçte art arda yenilikçi adımlar atmıştır.
                        <br>
                        Naret doğal sağlıklı ve güvenilir ürünleriyle lezzete verdiği önem sayesinde tüketicinin her zaman tercihi olan marka haline gelmiştir.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-15 py-lg-30">
        <div class="row max-width-1120 mx-auto">
            <div class="col-md-24 mb-10 mb-md-0">
                <div class="pr-lg-6">
                    <div class="text-line pb-5 text-line-main mb-5 mb-xxl-10 font-weight-800 font-size-16 font-sm-22 font-size-lg-30 font-size-xxl-36 line-height-1-3">
                        Vizyonumuz blandit viverra erat quis dignissim mi.
                    </div>

                    <div class="font-size-14 font-size-lg-24 text-blue-500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
            <div class="col-md-24">
                <div class="pl-lg-6">
                    <div class="text-line pb-5 text-line-main mb-5 mb-xxl-10 font-weight-800 font-size-16 font-sm-22 font-size-lg-30 font-size-xxl-36 line-height-1-3">
                        Değerlerimiz blandit viverra erat quis dignissi.
                    </div>

                    <div class="font-size-14 font-size-lg-24 text-blue-500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection