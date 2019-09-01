@extends('front-end.layout.app')
@section('content')


    <div class="error-page">
        <div class="container-fluid">
            <div class="row wow bounceInUp">
                <div class="col-12 text-center mt-5">
                    <img src="{{asset('web/img/logo.png')}}" alt="Logo">
                </div>
                <div class="col-12 text-center">
                    <h1>404</h1>
                </div>
                <div class="col-12 text-center">
                    <p>صفحة خطأ , برجاء العودة الى الصفحة السابقة أو أذهب  للصفحة <a class="text-info" href="{{route('index')}}">الرئيسية</a></p>
                </div>
            </div>
        </div>
    </div>

 @endsection