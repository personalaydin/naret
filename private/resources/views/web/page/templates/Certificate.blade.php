@extends('web.template.layout')

@section('headerClass', 'header--main2')

@section('content')
    <div class="page-certificate">
        <div class="page-certificate-fancy-bg"></div>
        <div class="position-relative z-index-3">
            <div class="header-overflow"></div>
            <div class="d-flex align-items-center justify-content-center pt-10 pb-30">
                <div class="text-center px-6">
                    <h1 class="font-size-50 font-size-sm-60 font-size-lg-80 font-weight-700">{{ $page->getTitle() }}</h1>
                    <div class="font-size-22 font-size-lg-26 text-black-500">Cras ut dui at tortor convallis sodales sed ornare massa sit amet sem aliquet ac varius dui laoreet.</div>
                </div>
            </div>

            <div class="js-light-gallery container mb-20">
                <div class="row align-items-stretch mx-n2">
                    <div class="col-md-16 px-1 mb-2">
                        <a href="{{ asset('assets/img/certificates/big/kirmizi-et-onay-belgesi.jpg') }}" class="js-gallery-item certificate bg-white d-flex justify-content-center py-10 px-8 p-lg-14 h-100">
                            <div class="max-width-300">
                                <div class="text-center mb-8">
                                    <img class="certificate__thumb img-fluid w-100" src="{{ asset('assets/img/certificates/thumb/kirmizi-et-onay-belgesi.jpg') }}" alt="Kırmızı Et Onay Belgesi">
                                </div>

                                <div class="text-line text-line-main mb-5 font-size-20 font-size-lg-30 line-height-1-2 font-weight-800 pb-4">
                                    Kırmızı Et Onay Belgesi
                                </div>

                                <div class="text-blue-500 font-size-14 font-size-lg-20">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-16 px-1 mb-2">
                        <a href="{{ asset('assets/img/certificates/big/beyaz-et-onay-belgesi.jpg') }}" class="js-gallery-item certificate bg-white d-flex justify-content-center py-10 px-8 p-lg-14 h-100">
                            <div class="max-width-300">
                                <div class="text-center mb-8">
                                    <img class="certificate__thumb img-fluid w-100" src="{{ asset('assets/img/certificates/thumb/beyaz-et-onay-belgesi.jpg') }}" alt="Beyaz Et Onay Belgesi">
                                </div>

                                <div class="text-line text-line-main mb-5 font-size-20 font-size-lg-30 line-height-1-2 font-weight-800 pb-4">
                                    Beyaz Et Onay Belgesi
                                </div>

                                <div class="text-blue-500 font-size-14 font-size-lg-20">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-16 px-1 mb-2">
                        <a href="{{ asset('assets/img/certificates/big/kiyma-onay-belgesi.jpg') }}" class="js-gallery-item certificate bg-white d-flex justify-content-center py-10 px-8 p-lg-14 h-100">
                            <div class="max-width-300">
                                <div class="text-center mb-8">
                                    <img class="certificate__thumb img-fluid w-100" src="{{ asset('assets/img/certificates/thumb/kiyma-onay-belgesi.jpg') }}" alt="Kıyma Onay Belgesi">
                                </div>

                                <div class="text-line text-line-main mb-5 font-size-20 font-size-lg-30 line-height-1-2 font-weight-800 pb-4">
                                    Kıyma Onay Belgesi
                                </div>

                                <div class="text-blue-500 font-size-14 font-size-lg-20">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-24 px-1 mb-2">
                        <a href="{{ asset('assets/img/certificates/big/tesekkur-belgesi.jpg') }}" class="js-gallery-item certificate bg-white d-flex justify-content-center py-10 px-8 p-lg-14 h-100">
                            <div class="max-width-400">
                                <div class="text-center mb-8">
                                    <img class="certificate__thumb img-fluid w-100" src="{{ asset('assets/img/certificates/thumb/tesekkur-belgesi.jpg') }}" alt="Teşekkür Belgesi">
                                </div>

                                <div class="text-line text-line-main mb-5 font-size-20 font-size-lg-30 line-height-1-2 font-weight-800 pb-4">
                                    Teşekkür Belgesi
                                </div>

                                <div class="text-blue-500 font-size-14 font-size-lg-20">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-24 px-1 mb-2">
                        <a href="{{ asset('assets/img/certificates/big/veteriner-hekim-calisma-izin-belgesi.jpg') }}" class="js-gallery-item certificate bg-white d-flex justify-content-center py-10 px-8 p-lg-14 h-100">
                            <div class="max-width-400">
                                <div class="text-center mb-8">
                                    <img class="certificate__thumb img-fluid w-100" src="{{ asset('assets/img/certificates/thumb/veteriner-hekim-calisma-izin-belgesi.jpg') }}" alt="Veteriner Hekim Çalışma İzin Belgesi">
                                </div>

                                <div class="text-line text-line-main mb-5 font-size-20 font-size-lg-30 line-height-1-2 font-weight-800 pb-4">
                                    Veteriner Hekim Çalışma İzin Belgesi
                                </div>

                                <div class="text-blue-500 font-size-14 font-size-lg-20">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
