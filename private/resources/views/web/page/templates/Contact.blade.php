@extends('web.template.layout')

@section('content')
    <div class="bg-dark-blue min-height-65vh d-flex align-items-center justify-content-center">
        <div class="header-overflow"></div>

        <div class="text-center text-white px-6">
            <h1 class="h2 font-weight-700">İletişimin öneminden bahsettiğimiz alan</h1>
            <div class="h5">Cras ut dui at tortor convallis sodales sed ornare massa sit amet sem arka planda imaj var</div>
        </div>
    </div>

    <div class="container">
        <div class="contact-form mt-n10">
            <div class="row no-gutters align-items-stretch">
                <div class="col-lg-24 bg-main bg-container-lg-left">
                    <div class="h-100 bg-dark-blue text-white d-flex align-items-center justify-content-center p-10">
                        <div class="text-center">
                            <div class="font-weight-700 font-size-lg-40">İletişim Formu</div>
                            <div class="opacity-40 font-size-md-18 font-size-xl-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit ras ut dui at tortor convallis sodales.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-24 bg-white">
                    <form action="{{ route('web.'.app()->getLocale().'.ajax.contact') }}" class="js-form-validation-handle py-5 px-6 py-lg-10 px-lg-12" method="post">
                        @honeypot
                        @csrf

                        <div class="alert alert-success d-none"></div>

                        <div class="form-group">
                            <input name="name_surname" type="text" class="form-control" id="name_surname" placeholder="*Adınız Soyadınız" data-rule-required="true">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" id="email" placeholder="*E-posta" data-rule-required="true" data-rule-email="true">
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" id="name_surname" placeholder="*Konu" data-rule-required="true">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" rows="3" data-rule-required="true" placeholder="*Mesajınız"></textarea>
                        </div>

                        @if (getPageByTemplate('InformationText'))
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input name="information_text" type="checkbox" class="custom-control-input" id="information_text" data-rule-required="true">
                                    <label class="custom-control-label js-popup-ajax" for="information_text">
                                        {!! getSentence('information-text', false, [
                                            'link' => getPageByTemplate('InformationText')['viewLink']
                                        ]) !!}
                                    </label>
                                </div>
                            </div>
                        @endif

                        <button type="submit" class="button-main--fill py-4 px-24 font-weight-800 white-space-nowrap font-size-20 font-size-lg-24">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-lg-15 bg-main bg-container-left bg-container-right bg-container-lg-right-none text-white py-10 py-lg-20">
                <div class="h2 font-weight-800">Genel Merkez Fabrika</div>
                <div class="mb-3">Akçaburgaz Mh. 3030 Sk. No:12/1 34522 <br> Esenyurt / İSTANBUL</div>

                <div class="mb-2">
                    <a class="contact-item d-inline-flex align-items-center" href="tel:+02124316060">
                        <div class="contact-item__icon mr-3">{{ svg_image('assets/img/icons/phone') }}</div>
                        <div class="font-weight-700">(0212) 431 60 60</div>
                    </a>
                </div>

                <div class="mb-2">
                    <a class="contact-item d-inline-flex align-items-center" href="tel:+02124318080">
                        <div class="contact-item__icon mr-3">{{ svg_image('assets/img/icons/fax') }}</div>
                        <div class="font-weight-700">(0212) 431 80 80</div>
                    </a>
                </div>

                <div class="mb-2">
                    <a class="contact-item d-inline-flex align-items-center" href="tel:+05414316060">
                        <div class="contact-item__icon mr-3">{{ svg_image('assets/img/icons/mobile') }}</div>
                        <div class="font-weight-700">(0541) 431 60 60</div>
                    </a>
                </div>

                <div class="mb-2">
                    <a class="contact-item d-inline-flex align-items-center" target="_blank" href="https://www.google.com/maps/place/Naret+Fabrika,+Genel+M%C3%BCd%C3%BCrl%C3%BCk/@41.0722731,28.6262313,17z/data=!3m1!4b1!4m5!3m4!1s0x14b558e0426da0cd:0xdc5c5f2bc270ca0f!8m2!3d41.0722731!4d28.62842">
                        <div class="contact-item__icon mr-3">{{ svg_image('assets/img/icons/map') }}</div>
                        <div class="font-weight-700">Haritada Görüntüle</div>
                    </a>
                </div>
            </div>
            <div class="col-lg-33">
                <div class="row h-100 py-10 py-lg-0">
                    <div class="office col-md-16 pt-lg-32 mb-10 mb-md-0">
                        <div class="px-lg-3 px-xl-6 px-xxl-10">
                            <div class="h4 font-weight-700">Esenler Şube 1</div>

                            <div class="text-blue-200">
                                <div class="mb-6 font-size-xxl-18 line-height-1-4">Havaalanı Mahallesi <br> Taşocağı Cad. No: 31/A <br> Esenler / İstanbul</div>

                                <div class="mx-n2 font-weight-700">
                                    <div class="mb-2">
                                        <a class="office-contact-item office-contact-item--hover d-inline-flex align-items-center p-2" href="tel:+02124312525">
                                            <span class="office-contact-item__icon mr-2">{{ svg_image('assets/img/icons/phone') }}</span>
                                            <span>(0212) 431 25 25</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="office-contact-item office-contact-item--hover d-inline-flex align-items-center p-2" target="_blank" href="https://www.google.com/maps/place/Naret+Fabrika,+Genel+M%C3%BCd%C3%BCrl%C3%BCk/@41.0722731,28.6262313,17z/data=!3m1!4b1!4m5!3m4!1s0x14b558e0426da0cd:0xdc5c5f2bc270ca0f!8m2!3d41.0722731!4d28.62842">
                                            <span class="office-contact-item__icon mr-2">{{ svg_image('assets/img/icons/map') }}</span>
                                            <span>Haritada Görüntüle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="office col-md-16 pt-lg-32 mb-10 mb-md-0">
                        <div class="px-lg-3 px-xl-6 px-xxl-10">
                            <div class="h4 font-weight-700">Esenler Şube 2</div>

                            <div class="text-blue-200">
                                <div class="mb-6 font-size-xxl-18 line-height-1-4">Kemer Mahallesi <br> Atışalanı Cad. No:216/A <br> Esenler / İstanbul</div>

                                <div class="mx-n2 font-weight-700">
                                    <div class="mb-2">
                                        <a class="office-contact-item office-contact-item--hover d-inline-flex align-items-center p-2" href="tel:+02124306363">
                                            <span class="office-contact-item__icon mr-2">{{ svg_image('assets/img/icons/phone') }}</span>
                                            <span>(0212) 430 63 63</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="office-contact-item office-contact-item--hover d-inline-flex align-items-center p-2" target="_blank" href="https://www.google.com/maps/place/Naret+Fabrika,+Genel+M%C3%BCd%C3%BCrl%C3%BCk/@41.0722731,28.6262313,17z/data=!3m1!4b1!4m5!3m4!1s0x14b558e0426da0cd:0xdc5c5f2bc270ca0f!8m2!3d41.0722731!4d28.62842">
                                            <span class="office-contact-item__icon mr-2">{{ svg_image('assets/img/icons/map') }}</span>
                                            <span>Haritada Görüntüle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="office col-md-16 pt-lg-32 mb-10 mb-md-0">
                        <div class="px-lg-3 px-xl-6 px-xxl-10">
                            <div class="h4 font-weight-700">Esenler Şube 3</div>

                            <div class="text-blue-200">
                                <div class="mb-6 font-size-xxl-18 line-height-1-4">Yüzüncü Yıl Mahallesi <br> Barbaros Cad. No:93/A <br> Bağcılar / İstanbul</div>

                                <div class="mx-n2 font-weight-700">
                                    <div class="mb-2">
                                        <a class="office-contact-item office-contact-item--hover d-inline-flex align-items-center p-2" href="tel:+02122813434">
                                            <span class="office-contact-item__icon mr-2">{{ svg_image('assets/img/icons/phone') }}</span>
                                            <span>(0212) 281 34 34</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="office-contact-item office-contact-item--hover d-inline-flex align-items-center p-2" target="_blank" href="https://www.google.com/maps/place/Naret+Fabrika,+Genel+M%C3%BCd%C3%BCrl%C3%BCk/@41.0722731,28.6262313,17z/data=!3m1!4b1!4m5!3m4!1s0x14b558e0426da0cd:0xdc5c5f2bc270ca0f!8m2!3d41.0722731!4d28.62842">
                                            <span class="office-contact-item__icon mr-2">{{ svg_image('assets/img/icons/map') }}</span>
                                            <span>Haritada Görüntüle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
