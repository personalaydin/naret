@extends('web.template.layout')

@section('content')
    <div class="page-products text-white ">
        <div class="page-products__taze-dana-grubu-bg"></div>
        <div class="position-relative z-index-3">
            <div class="minimum-full-height d-flex align-items-end justify-content-center mb-20 mb-sm-40">
                <div class="mb-20 mb-lg-40">
                    <div class="text-center">
                        <div class="font-size-30 font-size-sm-60 font-size-md-70 font-size-lg-100 line-height-1 mb-5 mb-lg-10">
                            <span class="font-weight-300">taze</span> <span class="font-weight-700">dana grubu</span>
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

        @php 
        $products = [
            [
                'image' => 'dallas', 
                'text' => 'Dallas'
            ], 
            [
                'image' => 'dana-antrikot', 
                'text' => 'Dana Antrikot'
            ], 
            [
                'image' => 'dana-pirzola', 
                'text' => 'Dana Pirzola'
            ], 
            [
                'image' => 'kiyma', 
                'text' => 'Kıyma'
            ], 
            [
                'image' => 'ossobuco', 
                'text' => 'Ossobuco'
            ], 
            [
                'image' => '1', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '2', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '3', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '3luset', 
                'text' => '3\'lü Set'
            ], 
            [
                'image' => '5', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '5liset', 
                'text' => '5\'li set'
            ], 
            [
                'image' => '6', 
                'text' => 'Lorem'
            ], 
            
            [
                'image' => '7', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '9', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '10', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '11', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '12', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '13', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '14', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '15', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '16', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '17', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '18', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '19', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '20', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '21', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '22', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '23', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '24', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '25', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '26', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '27', 
                'text' => 'Lorem'
            ], 
            [
                'image' => '28', 
                'text' => 'Lorem'
            ] 
         ] 
         @endphp

        <div class="row product-item js-light-gallery" >
            @foreach ($products as $i => $product)
            <div class="col-md-12 col-xs-24 col-24   col-md-12-ex col-lg-8  xcontainer divClass">
                <a href="/assets/img/products/taze-dana-grubu/{{$product['image']}}.jpg" class="js-gallery-item">
                    <img src="/assets/img/products/taze-dana-grubu/{{$product['image']}}.jpg" class="imgClass">
                </a>
                <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-18">{{$product['text']}}</div>
            </div>
            @endforeach
        </div>  

    </div>
@endsection