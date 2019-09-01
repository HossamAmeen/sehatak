<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  {{-- <title>{{$brefs->title}} - {{$pageTitle}}</title> --}}
  <title> {{ config('app.name' . $pageTitle , $brefs->title .'-'. $pageTitle) }}</title>
 
  <!-- Bootstrap core CSS -->
  <link href="{{asset('web/vendor/bootstrapRTL/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
  <!-- fontawesome -->
  <link href="{{asset('web/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Animate css -->
  <link href="{{asset('web/vendor/wow/animate.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
  <!-- Media Queries -->
  <link rel="stylesheet" href="{{asset('web/css/media-query.css')}}">

</head>

<body>
       <!-- Navigation -->
        <nav class="topHead"></nav>
        <nav class="navbar mainNav navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="index.html">
                <img src="{{asset('web/img/logo.png')}}" alt="Logo">
              </a>
              <button class="navbar-toggler navbar-toggler-left ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link {{is_active_web('index')}}" href="{{route('index')}}">الرئيسية</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{is_active_web('about')}} " href="{{route('about')}}">عن المشروع</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{is_active_web('news')}}" href="{{route('news')}}">الأخبار</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{is_active_web('timeline')}}" href="{{route('timeline')}}">الجدول الزمنى</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{is_active_web('gallery')}}" href="{{route('gallery')}}">معرض الصور</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{is_active_web('faq')}}" href="{{route('faq')}}">الأسئلة الشائعة</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <div class="social-media-box">
        <ul>
          <li>
              <a href="{{ isset($brefs->facebook) ? $brefs->facebook : '' }}" target="_blank"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="{{ isset($brefs->phone) ? $brefs->phone : '' }}" target="_blank"><i class="fa fa-whatsapp"></i></a>
          </li>
          <li>
            <a href="{{ isset($brefs->instagram) ? $brefs->instagram : '' }}" target="_blank"><i class="fa fa-instagram"></i></a>
          </li>
          <li>
            <a href="{{ isset($brefs->phone2) ? $brefs->phone2 : '' }}" target="_blank"><i class="fa fa-phone"></i></a>
          </li>
        </ul>
        </div>
        <!-- Page Content -->
          @yield('content')

  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-baseline">
        <div class="col-md-8 col-12">
          <div class="row">
            <div class="col-md-12 col-12">
              <p class="text-white">
                <i class="fa fa-map-marker m-1"></i>
              <span>المقر الأدارى : {{ isset($brefs->address) ? $brefs->address : '' }}</span>
              </p>
            </div>
            <div class="col-md-4 col-6">
              <a href="javascript:void(0);" class="text-white">
                {{ isset($brefs->phone) ? $brefs->phone : '' }}
                <i class="fa fa-phone border py-1 px-2 m-1 rounded-circle"></i>
              </a>
            </div>
            <div class="col-md-4 col-6">
              <a href="javascript:void(0);" class="text-white">
                {{ isset($brefs->phone2) ? $brefs->phone2 : '' }}
                <i class="fa fa-phone border py-1 px-2 m-1 rounded-circle"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 text-right mt-md-0 mt-2">
          <div class="row">
            <div class="col-12 mb-3">
              <a href=" {{ isset($brefs->facebook) ? $brefs->facebook : '' }}" class="text-white">
                {{ isset($brefs->facebook) ? $brefs->facebook : '' }}
                <i class="fa fa-facebook border py-1 px-2 m-1 rounded-circle"></i>
              </a>
            </div>
            <div class="col-12">
              <a href="javascript:void(0);" class="text-white">
                {{ isset($brefs->email) ? $brefs->email : '' }}
                <i class="fa fa-envelope-o px-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </footer>
  
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('web/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('web/vendor/bootstrapRTL/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('web/vendor/sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('web/vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('web/js/scripts.js')}}"></script>

</body>

</html>
