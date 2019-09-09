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
                    <!-- FAQ Items -->
                    @foreach ($faqs as $item)
                    <div class="col-12 card wow bounceInUp">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    {{$item->question}}
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body"> 
                                {{$item->answer}}
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
