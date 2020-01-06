@extends('front-end.layout.app')
@section('content')

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{!! asset('web/img/news-bg.png') !!}')">

                </div>
            </div>
        </div>
    </header>

    <div class="newDetails-page">
        <section class="news-section">
            <div class="container-fluid">
                <div class="row wow fadeInUp">
                    <div class="col px-0 pb-1">
                        <h2 class="text-white text-center font-35 py-4">{{$news->title}}
                            <small class="text-info d-block mt-2">{{$news->date}}</small>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row wow bounceInUp">
                    <div class="my-auto col-12">
                        <img src="{{asset('uploads/news/'.$news->image)}} " alt="image" height="600" class="img-fluid border rounded my-2">
                    </div>
                    <div class="my-auto col-12"> 
                        {!!$news->description!!}
                    </div>


                </div>
            </div>
        </section>
    </div>
@endsection
