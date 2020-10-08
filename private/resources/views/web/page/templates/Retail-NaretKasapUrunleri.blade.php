@extends('web.template.layout')

@section('content')
    <div class="page-products text-white pb-10">
        <div class="page-products__naret-kasap-urunleri-bg"></div>
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

                        <a class="js-scroll-to double-chevron font-size-100 font-size-md-180" href="javascript:void(0);" data-target=".product-item" data-offset="100">
                            <span class="chevron bottom"></span>
                            <span class="chevron bottom"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-30 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-sis.png') }}" alt="Dana Şiş">
            </div>
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <h2 class="mb-3 mb-lg-0">Dana Şiş</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY ml-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow1']) }}
                        </div>
                    </div>

                    <div class="product-item__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="product-item mb-40 row flex-column-reverse flex-lg-row align-items-lg-end">
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <h2 class="mb-3 mb-lg-0">Dana Sotelik Kuşbası</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY mr-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow1']) }}
                        </div>
                    </div>

                    <div class="product-item__content text-lg-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300 ml-lg-auto mr-lg-0">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-30 text-center text-lg-left product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-sotelik-kusbasi.png') }}" alt="Dana Sotelik Kuşbası">
            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-30 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-kusbasi-yemeklik.png') }}" alt="Dana Kuşbaşı Yemeklik">
            </div>
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <h2 class="mb-3 mb-lg-0">Dana Kuşbaşı Yemeklik</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY ml-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow1']) }}
                        </div>
                    </div>

                    <div class="product-item__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="product-item mb-40 row flex-column-reverse flex-lg-row align-items-lg-end">
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <h2 class="mb-3 mb-lg-0">Dana Yemeklik Kıyma</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY mr-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow1']) }}
                        </div>
                    </div>

                    <div class="product-item__content text-lg-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300 ml-lg-auto mr-lg-0">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-30 text-center text-lg-left product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-yemeklik-kiyma.png') }}" alt="Dana Yemeklik Kıyma">
            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-30 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-kuzu-adana-kofte.png') }}" alt="Dana-Kuzu Adana Köfte">
            </div>
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <h2 class="mb-3 mb-lg-0">Dana-Kuzu Adana Köfte</h2>
                        <div class="d-flex align-items-end ml-0 ml-lg-10 w-100 width-lg-auto">
                            <div class="product-item__icon icon__rotateY mr-3">
                                {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow5']) }}
                            </div>
                            <div class="product-item__hogget">
                                {{ svg_image('assets/img/icons/hogget-partial', ['class' => 'icon-hogget-partial hogget2']) }}
                            </div>
                        </div>
                    </div>

                    <div class="product-item__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="product-item mb-40 row flex-column-reverse flex-lg-row align-items-lg-end">
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <h2 class="mb-3 mb-lg-0">Dana Urfa Kebap</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY mr-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow5']) }}
                        </div>
                    </div>

                    <div class="product-item__content text-lg-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300 ml-lg-auto mr-lg-0">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-30 text-center text-lg-left product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-urfa-kebap.png') }}" alt="Dana Urfa Kebap">
            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-30 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-kuzu-inegol-kofte.png') }}" alt="Dana-Kuzu İnegöl Köfte">
            </div>
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <h2 class="mb-3 mb-lg-0">Dana-Kuzu İnegöl Köfte</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY ml-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow12']) }}
                        </div>
                    </div>

                    <div class="product-item__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="product-item mb-40 row flex-column-reverse flex-lg-row align-items-lg-end">
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <h2 class="mb-3 mb-lg-0">Dana-Kuzu Kasap Köfte</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY mr-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow12']) }}
                        </div>
                    </div>

                    <div class="product-item__content text-lg-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300 ml-lg-auto mr-lg-0">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-30 text-center text-lg-left product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-kuzu-kasap-kofte.png') }}" alt="Dana-Kuzu Kasap Köfte">
            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-30 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-kuzu-kasap-kofte-2.png') }}" alt="Dana-Kuzu Kasap Köfte">
            </div>
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <h2 class="mb-3 mb-lg-0">Dana-Kuzu Kasap Köfte</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY ml-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow12']) }}
                        </div>
                    </div>

                    <div class="product-item__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="product-item mb-40 row flex-column-reverse flex-lg-row align-items-lg-end">
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <h2 class="mb-3 mb-lg-0">Dana Misket Köfte</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY mr-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow12']) }}
                        </div>
                    </div>

                    <div class="product-item__content text-lg-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300 ml-lg-auto mr-lg-0">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-30 text-center text-lg-left product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-misket-kofte.png') }}" alt="Dana Misket Köfte">
            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-30 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/naret-kasap-urunleri/dana-steak-kofte.png') }}" alt="Dana Steak Köfte">
            </div>
            <div class="col-lg-18">
                <div class="max-width-sm-450 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <h2 class="mb-3 mb-lg-0">Dana Steak Köfte</h2>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY ml-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow12']) }}
                        </div>
                    </div>

                    <div class="product-item__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>

                    <table class="product-item__table w-100 max-width-sm-300">
                        <tr>
                            <td>Lorem</td>
                            <td>5,0</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>-4</td>
                        </tr>
                        <tr>
                            <td>Dolor</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Amet</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>Consectetur</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection