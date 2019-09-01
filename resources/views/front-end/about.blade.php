@extends('front-end.layout.app')
@section('content')

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{!! asset('web/img/slider-img1.png')!!}">
                </div>
            </div>
        </div>
    </header>

    <div class="about-page">
        <section class="bg-dark">
            <div class="container">
                <div class="row wow bounceInUp">
                    <div class="col-lg-6 col-12 mx-auto">
                        <h2 class="text-blue text-center font-35">مقدمة عن المشروع</h2>
                        <p class="text-center font-20"> مشروع إنشاء اكبرمجمع طبي تخصصى بوسط مدينة أسيوط
                            احدى مشروعات مجموعة ( استثمر) للاقتصاد التشاركي</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="container">
                <div class="row wow bounceInUp">
                    <div class="col-12 text-center">
                        
                            {!!html_entity_decode( isset($brefs->descriptionPoint) ? $brefs->descriptionPoint : '')!!}
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark video-section">
            <div class="container">
                <div class="row wow bounceInUp">
                    <div class="col-lg-7 col-12 mx-auto">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/AZ1tfR2HxfY"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-0">
            <div class="container-fluid bg-primary">
                <div class="row wow bounceInUp">
                    <div class="col">
                        <h2 class="text-white text-center font-35 py-3">مميزات مشروع صحتك</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-info py-5">
                <div class="row wow bounceInUp">
                    <div class="col">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <ul class="text-white">
                                        <li>
                                            <p class="text-white font-20">هتكون شريك فى مشروع اكبرمجمع طبي تخصصى متكامل
                                                فى أسيوط.</p>
                                        </li>
                                        <li>
                                            <p class="text-white font-20"> كل المساهمين هيكون ليهم ولأسرهم مظلة طبية
                                                كاملة وهيستفادو من جميع خدمات المستشفى انت وأسرتك باسعار خاصة جدا وبخدمة
                                                (vip)
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-white font-20">هتكون شريك في الاصول و جميع مكونات المشروع
                                                يعنى غير ارباح المستشفى وقيمة العلامة التجارية انت كمان</p>
                                        </li>
                                        <li>
                                            <p class="text-white font-20">
                                                بتستفاد من ارتفاع سعر العقار.</p>
                                        </li>
                                        <li>
                                            <p class="text-white font-20">العقار قائم بالفعل ..وده بيديك ثقة أكبر فى
                                                المشروع</p>
                                        </li>
                                        <li>
                                            <p class="text-white font-20">المستشفى فى موقع متميز فى شارع المكتبات بسيتى
                                                يعنى دقيقتين من جامعة أسيوط وفي قلب مدينة أسيوط</p>
                                        </li>
                                        <li>
                                            <p class="text-white font-20"> انت بتحصل على عائد ربحي سنوي متميز
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-white font-20"> بتدفع ثمن السهم بالتقسيط وبنفس ترتيب مراحل
                                                سير العمل فى المشروع.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
