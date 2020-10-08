@extends('web.template.layout')

@section('content')
    <div class="page-products text-white pb-10">
        <div class="page-products__dondurulmus-doner-grubu-bg"></div>
        <div class="position-relative z-index-3">
            <div class="minimum-full-height d-flex align-items-end justify-content-center mb-20 mb-sm-40">
                <div class="mb-20 mb-lg-40">
                    <div class="text-center">
                        <div class="font-size-30 font-size-sm-60 font-size-md-70 font-size-lg-100 line-height-1 mb-5 mb-lg-10">
                            <span class="font-weight-300">dondurulmuş</span> <span class="font-weight-700">döner grubu</span>
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
            <div class="col-lg-28 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/dondurulmus-doner-grubu/dana-but-doner.png') }}" alt="Dana But Döner">
            </div>
            <div class="col-lg-20">
                <div class="max-width-sm-500 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <div class="w-100 width-lg-auto">
                            <h2 class="mb-3 mb-lg-0">Dana But Döner</h2>
                            <div class="font-weight-700 font-size-20">%100 Yaprak</div>
                        </div>
                        <div class="d-flex justify-content-start justify-content-lg-end product-item__icon icon__rotateY ml-lg-10 w-100 width-lg-auto">
                            {{ svg_image('assets/img/icons/cow-partial', ['class' => 'icon-cow-partial cow12    ']) }}
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
            <div class="col-lg-20">
                <div class="max-width-sm-500 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <div class="w-100 width-lg-auto">
                            <h2 class="mb-3 mb-lg-0">Dana But Döner</h2>
                            <div class="font-weight-700 font-size-20">%80 Yaprak  %20 Kıyma</div>
                        </div>
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
            <div class="col-lg-28 text-center text-lg-left product-item__img">

            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-28 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/dondurulmus-doner-grubu/dana-but-doner-3.png') }}" alt="Dana But Döner">
            </div>
            <div class="col-lg-20">
                <div class="max-width-sm-500 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <div class="w-100 width-lg-auto">
                            <h2 class="mb-3 mb-lg-0">Dana But Döner</h2>
                            <div class="font-weight-700 font-size-20">%60 Yaprak  %40 Kıyma </div>
                        </div>
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
            <div class="col-lg-20">
                <div class="max-width-sm-500 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <div class="w-100 width-lg-auto">
                            <h2 class="mb-3 mb-lg-0">Dana But Döner</h2>
                            <div class="font-weight-700 font-size-20">%50 Yaprak  %50 Kıyma</div>
                        </div>
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
            <div class="col-lg-28 text-center text-lg-left product-item__img">
                <img src="{{ asset('assets/img/products/dondurulmus-doner-grubu/dana-but-doner-4.png') }}" alt="Dana But Döner">
            </div>
        </div>

        <div class="product-item mb-40 row align-items-end">
            <div class="col-lg-28 text-center text-lg-right product-item__img">
                <img src="{{ asset('assets/img/products/dondurulmus-doner-grubu/dana-but-doner-5.png') }}" alt="Dana But Döner">
            </div>
            <div class="col-lg-20">
                <div class="max-width-sm-500 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--right flex-column flex-lg-row">
                        <div class="w-100 width-lg-auto">
                            <h2 class="mb-3 mb-lg-0">Dana But Döner</h2>
                            <div class="font-weight-700 font-size-20">%35 Yaprak  %65 Kıyma</div>
                        </div>
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
            <div class="col-lg-20">
                <div class="max-width-sm-500 mx-auto mb-6 px-8 px-lg-0">
                    <div class="product-item__title product-item__title--full-width product-item__title--left flex-column flex-lg-row-reverse">
                        <div class="w-100 width-lg-auto">
                            <h2 class="mb-3 mb-lg-0">Dana But Döner</h2>
                            <div class="font-weight-700 font-size-20">%10 Yaprak  %90 Kıyma</div>
                        </div>
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
            <div class="col-lg-28 text-center text-lg-left product-item__img">
                <img src="{{ asset('assets/img/products/dondurulmus-doner-grubu/dana-but-doner-6.png') }}" alt="Dana But Döner">
            </div>
        </div>
    </div>
@endsection