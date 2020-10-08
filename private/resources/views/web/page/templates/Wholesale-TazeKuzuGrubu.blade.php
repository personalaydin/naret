@extends('web.template.layout')

@section('content')
    <div class="page-products text-white">
        <div class="page-products__taze-kuzu-grubu-bg"></div>
        <div class="position-relative z-index-3">
            <div class="minimum-full-height d-flex align-items-end justify-content-center mb-20 mb-sm-40">
                <div class="mb-20 mb-lg-40">
                    <div class="text-center">
                        <div class="font-size-30 font-size-sm-60 font-size-md-70 font-size-lg-100 line-height-1 mb-5 mb-lg-10">
                            <span class="font-weight-300">taze</span> <span class="font-weight-700">kuzu grubu</span>
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
                'image' => '4', 
                'text' => 'Ipsum'
            ], 
            [
                'image' => '8', 
                'text' => 'Ipsum'
            ], 
            [
                'image' => 'but-orta-kemikli', 
                'text' => 'But Orta Kemikli'
            ], 
            [
                'image' => 'kuzu-beyti', 
                'text' => 'Kuzu Beyti'
            ], 
            [
                'image' => 'kuzu-fileto', 
                'text' => 'Kuzu Fileto'
            ], 
            [
                'image' => 'kuzu-gerdan', 
                'text' => 'Kuzu Gerdan'
            ], 
            [
                'image' => 'kuzu-kol', 
                'text' => 'Kuzu Kol'
            ], 
            [
                'image' => 'kuzu-kontrfile', 
                'text' => 'Kuzu Kontrfile'
            ], 
            [
                'image' => 'kuzu-kulbasti', 
                'text' => 'Kuzu Külbasti'
            ], 
            [
                'image' => 'kuzu-kusbasi', 
                'text' => 'Kuzu Kuşbaşı'
            ], 
            [
                'image' => 'kuzu-pirzola', 
                'text' => 'Kuzu Pirzola'
            ], 
            [
                'image' => 'kuzubut-kemiksiz', 
                'text' => 'Kuzubut Kemiksiz'
            ], 
            [
                'image' => 'kuzukol-kemiksiz', 
                'text' => 'Kuzukol Kemiksiz'
            ], 
            [
                'image' => 'kzubut-incik', 
                'text' => 'Kuzubut İncik'
            ], 
            [
                'image' => 'kzuu-kol-kemiksiz', 
                'text' => 'Kuzu Kol Kemiksiz'
            ], 
            
         ] 
         @endphp

        <div class="row product-item js-light-gallery" >
            @foreach ($products as $i => $product)
            <div class="col-md-12 col-xs-24 col-24 col-md-12-ex col-lg-8  xcontainer divClass">
                <a href="/assets/img/products/taze-kuzu-grubu/{{$product['image']}}.jpg" class="js-gallery-item">
                    <img src="/assets/img/products/taze-kuzu-grubu/{{$product['image']}}.jpg" class="imgClass">
                </a>
                <div class="align-center-on-image font-size-14 font-size-sm-18 font-size-md-18">{{$product['text']}}</div>
            </div>
            @endforeach
        </div>  

        
    </div>
@endsection