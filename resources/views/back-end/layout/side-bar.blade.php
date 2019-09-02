<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="{{asset('panel/assets/images/demo/avatar-80.png')}}" alt=""/>
        <div class="user-online-status"><span class="user-status is-online  "></span> </div>
    </div>
    <ul class="social-icon">
        {{-- <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li> --}}
    </ul>
    <!--Left navigation user details end-->

    <!--Phone Navigation Menu icon start-->
    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="index.html" title="">
            <h1>صحتك</h1>
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>
        <div class="clearfix"></div>
    </div>

    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
    <ul class="mainNav">
        <li >
            <a href="{{route('brefs.edit' , ['id' => '1'])}}" class="{{is_active('brefs')}}">
                <i class="fa fa-dashboard"></i> <span>تعديل بيانات الموقع</span>
            </a>
        </li>
        <li class="{{is_active('users')}}">
            <a href="{{route('users.index')}}"  class="{{is_active('users')}}">
                <i class="fa fa-group"></i><span>المستخدمين</span>
            </a>
        
        </li>
        <li class="{{is_active('galleries')}}">
            <a href="{{route('galleries.index')}}"  class="{{is_active('galleries')}}">
                <i class="fa fa-group"></i><span>معرض الصور</span>
            </a>
        
        </li>
        <li class="{{is_active('news')}}">
            <a href="{{route('news.index')}}"  class="{{is_active('news')}}">
                <i class="fa fa-group"></i><span>الأخبار</span>
            </a>
        
        </li>
        <li class="{{is_active('questions')}}">
            <a href="{{route('questions.index')}}"  class="{{is_active('questions')}}">
                <i class="fa fa-group"></i><span>الأسئله الشائعه</span>
            </a>
        
        </li>
        <li >
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             
            
             <i class="fa fa-power-off"></i><span>تسجيل الخروج</span>
            </a>
        
        </li>
    </ul>
    <!--Left navigation end-->
</section>