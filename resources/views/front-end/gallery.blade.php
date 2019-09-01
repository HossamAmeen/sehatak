@extends('front-end.layout.app')
@section('content')


    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{!! asset('web/img/slider-img1.png') !!}')">
                
                </div>
            </div>
        </div>
    </header>

    <div class="gallery-page">
        <section class="gallery-section">
            <div class="container-fluid">
                <div class="row wow bounceInUp">
                    <div class="col px-0 pb-1">
                        <h2 class="text-white text-center font-35 py-4">معرض الصور</h2>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <!-- Large Image -->
                    <div class="col-12 wow bounceInUp">
                        <a href="{{asset('uploads/galleries/'.$image->image)}}" data-lightbox="gallery" class="gallery-item">
                            <img src="{{asset('uploads/galleries/'.$image->image)}}" class="img-fluid" alt="Large Image">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    @foreach ($images as $item)
                         <!-- small item -->
                    <div class="col-lg-6 col-md-4 col-12 wow bounceInUp">
                        <a href="{{asset('uploads/galleries/'.$item->image)}}" data-lightbox="gallery" class="gallery-item">
                            <img src="{{asset('uploads/galleries/'.$item->image)}}" class="img-fluid" alt="Large Image">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    @endforeach
                   
                   

                    <!-- More Button -->
                    <div class="col-12 my-5 wow bounceIn">
                        <a href="javascript:void(0);" class="btn btn-lg bg-info text-white px-4 py-3 rounded-pill"> <i
                                class="fa fa-spinner fa-pulse mr-1"></i> المزيد</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection