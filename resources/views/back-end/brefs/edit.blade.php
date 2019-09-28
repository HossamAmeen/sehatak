@extends('back-end.layout.app')

@section('title')
    تعديل بيانات الموقع  
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
            تعديل بيانات الموقع
        @endslot
    @endcomponent
   
    <div class="container-fluid">
            <div class="row">
                <div class="panel panel-default">
                            <form id="defaultForm" method="post" class="form-horizontal ls_form" action="{{ route($routeName.'.update' , ['id' => $row]) }}"
                                    data-bv-message="This value is not valid"
                                    data-bv-feedbackicons-valid="fa fa-check"
                                    data-bv-feedbackicons-invalid="fa fa-bug"
                                    data-bv-feedbackicons-validating="fa fa-refresh"
                                    enctype="multipart/form-data"
                                    >  
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                              
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">اسم الموقع</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="title"
                                            data-bv-message="The service is not valid"
                                             data-bv-notempty-message="The service is  and cannot be empty"
                                    value="{{$row->title}}"

                                                />
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-lg-3 control-label">العنوان</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="address"
                                                data-bv-message="The service is not valid"
                                                 data-bv-notempty-message="The service is  and cannot be empty"
                                                 value="{{$row->address}}"
    
                                                    />
                                        </div>
                                    </div>

                                <div class="form-group">
                                        <label class="col-lg-3 control-label">الوصف الاساسي بالعربيه</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="description"
                                                data-bv-message="The username is not valid"
                                                 data-bv-notempty-message="The username is  and cannot be empty"
                                                 value="{{$row->description}}"
                                                    />
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-lg-3 control-label">رقم الواتس</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="phone"
                                                data-bv-message="The username is not valid"
                                                 data-bv-notempty-message="The username is  and cannot be empty"
                                                 value="{{$row->phone}}"
                                                    />
                                        </div>
                                </div>
                                <div class="form-group">
                                <label class="col-lg-3 control-label">  الايميل الاساسي</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="email"
                                        data-bv-message="The username is not valid"
                                         data-bv-notempty-message="The username is  and cannot be empty"
                                         value="{{$row->email}}"
                                            />
                                </div>
                                </div>
                                  <div class="form-group">
                                        <label class="col-lg-3 control-label">رابط الفديو</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="video"
                                             
                                                 value="{{$row->video}}"
                                                    />
                                        </div>
                                </div>
                               
                                <div class="form-group">
                                        <label class="col-lg-3 control-label"> instagram account</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="instagram"
                                                data-bv-message="The username is not valid"
                                                 data-bv-notempty-message="The username is  and cannot be empty"
                                                 value="{{$row->instagram}}"
                                                    />
                                        </div>
                                </div>
                                
                                <label class="col-lg-3 control-label">الوصف بالنقاط</label><br>
                                <div class="panel-heading">
                                   
                                    <ul class="panel-control">
                                        <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a></li>
                                        <li><a class="refresh" href="javascript:void(0)"><i class="fa fa-refresh"></i></a></li>
                                        <li><a class="close-panel" href="javascript:void(0)"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body no-padding" >
                                    <textarea class="summernote" name="descriptionPoint" id="demo" >
                                        {!!html_entity_decode($row->descriptionPoint)!!}  
                                    </textarea>
                                </div><br>
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-primary" onclick="myFunction()">تحديث</button>
                                    </div>
                                </div>
                        </form>
                    </div>
               
                </div> 
        </div>
                 
   

@endsection
@push('css')
      <!-- Responsive Style For-->
  <link href="{{asset('panel/assets/css/rtl-css/responsive-rtl.css')}}" rel="stylesheet">
  <!-- Responsive Style For-->
  <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/summernote-rtl.css')}}">
  <!-- Custom styles for this template -->


    <!-- Plugin Css Put Here -->
  
    <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/fileinput-rtl.css')}}">
@endpush
@push('js')
     <!--Upload button Script Start-->
   <script src="{{asset('panel/assets/js/fileinput.min.js')}}"></script>
   <!--Upload button Script End-->

<!--Auto resize  text area Script Start-->
<script src="{{asset('panel/assets/js/jquery.autosize.js')}}"></script>
 <!--Auto resize  text area Script Start-->
<script src="{{asset('panel/assets/js/pages/sampleForm.js')}}"></script>


<!-- summernote Editor Script For Layout start-->
<script src="{{asset('panel/assets/js/summernote.min.js')}}"></script>
<!-- summernote Editor Script For Layout End-->

<!-- Demo Ck Editor Script For Layout Start-->
<script src="{{asset('panel/assets/js/pages/editor.js')}}"></script>
<!-- Demo Ck Editor Script For Layout ENd-->
@endpush

