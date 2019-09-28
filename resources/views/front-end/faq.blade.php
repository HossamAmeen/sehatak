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

    <div class="faq-page">
        <section class="faq-section">
            <div class="container-fluid">
                <div class="row wow bounceInUp">
                    <div class="col px-0 pb-1">
                        <h2 class="text-white text-center font-35 py-4">الأسئلة الشائعة</h2>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <div id="accordion" class="row">
                     <div class="col-12 card wow bounceInUp">
                        <div class="card-header" id="{{$faq->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$faq->id}}"
                                    aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                                    {{$faq->question}}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{$faq->id}}" class="collapse show" aria-labelledby="{{$faq->id}}"
                            data-parent="#accordion">
                            <div class="card-body"> 
                                    {!!html_entity_decode($faq->answer)!!}
                                
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Items -->
                    @foreach ($faqs as $item)
                    <div class="col-12 card wow bounceInUp">
                        <div class="card-header" id="{{$item->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$item->id}}"
                                    aria-expanded="false" aria-controls="collapse{{$item->id}}">
                                    {{$item->question}}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="{{$item->id}}"
                            data-parent="#accordion">
                            <div class="card-body"> 
                                    {!!html_entity_decode($item->answer)!!}
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="col-12 my-5 wow bounceIn">
                            <ul>
                                    {{ $faqs->links() }}
                            </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
