@extends('front-end.layout.app')
@section('content')

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{!! asset('web/img/gallery-bg.png') !!}')">
              
                </div>
            </div>
        </div>
    </header>

    <div class="timeline-page">
        <section class="timeline-section">
            <div class="container-fluid">
                <div class="row wow bounceInUp">
                    <div class="col px-0 pb-1">
                        <h2 class="text-white text-center font-35 py-4">الجدول الزمنى</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-3 pb-5">
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-xs-12">
                                    <div class="timeline-item wow bounceInUp">
                                        <div class="container">
                                            <div class="row align-items-baseline">
                                                <div class="col d-flex">
                                                    <img src="{{asset('web/img/timeline-img1.png')}}" width="75" height="75" alt="">
                                                    <h5 class="text-white d-inline ml-3">ستة اشهر لتسويق المشروع</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-9 col-xs-12">
                                    <div class="timeline-item wow bounceInUp">
                                        <div class="container">
                                            <div class="row align-items-baseline">
                                                <div class="col d-flex">
                                                    <img src="{{asset('web/img/timeline-img2.png')}}" width="75" height="75" alt="">
                                                    <h5 class="text-white d-inline ml-3">سنة ونصف لتجهيز المشروع وبداية
                                                        التشغيل</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="timeline-item wow bounceInUp">
                                        <div class="container">
                                            <div class="row align-items-baseline">
                                                <div class="col d-flex">
                                                    <img src="{{asset('web/img/timeline-img3.png')}}" width="75" height="75" alt="">
                                                    <h5 class="text-white d-inline ml-3">بعد مرور عام علي المشروع يتم
                                                        عمل تقييم شامل لأرباح المشروع وتوزيعها علي المساهمين بعدعمل كشف
                                                        حساب مختصر من قبل الجهاز الإداري للمشروع وذلك لبيان كافة
                                                        المصروفات والدخل للمشروع وحساب كامل أرباح المشروع.</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection