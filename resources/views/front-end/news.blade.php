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

    <div class="news-page">
        <section class="news-section">
            <div class="container-fluid">
                <div class="row wow fadeInUp">
                    <div class="col px-0 pb-1">
                        <h2 class="text-white text-center font-35 py-4">أخبار المشروع</h2>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                    <div class="row">
                        <!-- News Items -->
                        @foreach ($news as $item)
                        <div class="col-12 news-item wow bounceInUp">
                            <div class="row">
                                <div class="col-lg-6 col-xs-12 mb-2">
                                  <img src="{{asset('uploads/news/'.$item->image)}} " 
                                       class="img-fluid" alt="news item" width="5px" height="5px">
                                </div>
                                <div class="col-lg-6 col-xs-12 text-left">
                                    <h3>
                                            <a href="{{route('news' ,  $item->id ) }}">{{$item->title}}</a>
                                    </h3>
                                    <p>     {{substr( $item->description , 0 , 800 )}}</p>
                                    <span>{{$item->date}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        <!-- End News Items -->
                        <!-- Pagination -->
                        <div class="col-12 my-5 wow bounceIn">
                              
                         
                                 
                                <ul>
                                        {{ $news->links() }}
                                </ul>
                          
                        </div>
                    </div>
                </div>
            
        </section>
    </div>
@endsection
