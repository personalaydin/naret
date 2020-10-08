@extends('web.template.layout')

@section('content')
    <div class="min-height-60vh background-cover d-flex align-items-center justify-content-center" style="background-image: url({{ asset('assets/img/naret-politics/top-image.jpg') }});">
        <div class="header-overflow"></div>

        <div class="text-center text-white px-6 w-100">
            <div class="container">
                <h1 class="font-weight-700 font-size-30 font-size-sm-50 font-size-md-60 font-size-lg-70 font-size-xxl-90">{{ $page->getTitle() }}</h1>
                <div class="font-size-18 font-size-sm-20 font-size-md-26 max-width-lg-830 mx-auto">Cras ut dui at tortor convallis sodales sed ornare massa sit amet sem aliquet ac varius dui laoreet.</div>
            </div>
        </div>
    </div>

    <div class="container py-20">
        <div class="row align-items-center mb-10 mb-lg-20 mx-lg-5 mx-xxxl-n10">
            <div class="col-lg-14 px-lg-5 px-xxxl-10 mb-5 mb-lg-0">
                <img class="img-fluid w-100" src="https://via.placeholder.com/410x275" alt="">
            </div>
            <div class="col-lg-34 px-lg-5 px-xxxl-10">
                <h2 class="mb-2 font-size-26">Quis ipsum suspendisse  gravida.</h2>
                <p class="text-blue-500 font-size-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
            </div>
        </div>
        <div class="row flex-row-reverse align-items-center mb-10 mb-lg-20 mx-lg-5 mx-xxxl-n10">
            <div class="col-lg-14 px-lg-5 px-xxxl-10 mb-5 mb-lg-0">
                <img class="img-fluid w-100" src="https://via.placeholder.com/410x275" alt="">
            </div>
            <div class="col-lg-34 px-lg-5 px-xxxl-10">
                <h2 class="mb-2 font-size-26">Quis ipsum suspendisse  gravida.</h2>
                <p class="text-blue-500 font-size-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
            </div>
        </div>
        <div class="row align-items-center mb-10 mb-lg-20 mx-lg-5 mx-xxxl-n10">
            <div class="col-lg-14 px-lg-5 px-xxxl-10 mb-5 mb-lg-0">
                <img class="img-fluid w-100" src="https://via.placeholder.com/410x275" alt="">
            </div>
            <div class="col-lg-34 px-lg-5 px-xxxl-10">
                <h2 class="mb-2 font-size-26">Quis ipsum suspendisse  gravida.</h2>
                <p class="text-blue-500 font-size-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
            </div>
        </div>
        <div class="row flex-row-reverse align-items-center mb-10 mb-lg-20 mx-lg-5 mx-xxxl-n10">
            <div class="col-lg-14 px-lg-5 px-xxxl-10 mb-5 mb-lg-0">
                <img class="img-fluid w-100" src="https://via.placeholder.com/410x275" alt="">
            </div>
            <div class="col-lg-34 px-lg-5 px-xxxl-10">
                <h2 class="mb-2 font-size-26">Quis ipsum suspendisse  gravida.</h2>
                <p class="text-blue-500 font-size-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
            </div>
        </div>
        <div class="row align-items-center mb-10 mb-lg-20 mx-lg-5 mx-xxxl-n10">
            <div class="col-lg-14 px-lg-5 px-xxxl-10 mb-5 mb-lg-0">
                <img class="img-fluid w-100" src="https://via.placeholder.com/410x275" alt="">
            </div>
            <div class="col-lg-34 px-lg-5 px-xxxl-10">
                <h2 class="mb-2 font-size-26">Quis ipsum suspendisse  gravida.</h2>
                <p class="text-blue-500 font-size-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
            </div>
        </div>
    </div>
@endsection