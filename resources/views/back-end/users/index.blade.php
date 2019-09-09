@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "عرض المسؤلين" @endphp  
@section('title')
   {{$pageTitle}}
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
        {{$pageTitle}} 
         <a href="{{ route($routeName.'.create') }}">  
            <button class="alert-success"> <i class="fa fa-plus"></i> </button>
         </a>
        @endslot
    @endcomponent
    @component('back-end.shared.table' )
                    @if (session()->get('action') )
                        <div class="alert alert-success">
                            <strong>{{session()->get('action')}}</strong>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>الاسم</th>
                                <th>البريد</th>
                                <th>الصلاحيه</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td> {{$row_num++}}</td>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td> 
                                        @if ($item->role == 1 )
                                            مسؤول
                                        @else
                                            موظف
                                        @endif
                                    </td>
                                    <td>
                                     @include('back-end.shared.buttons.delete')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    @endcomponent
@endsection

 {{-- @push('js')

 

  <!--botbox library script-->
  <script src="{{asset('panel/assets/js/bootbox.min.js')}}"></script>
    
  <script type="text/javascript">
    $('.check').click(function(){
        $url = $(this).attr('href');
        bootbox.dialog({
            message: "هل أنت متأكد من أنك تريد القيام بهذه العملية؟",
            title: "تأكيد القيام بالعملية",
            buttons: {
                success: {
                    label: "نعم!",
                    className: "btn-success",
                    callback: function() {

                        if($url == undefined)
                            $('form').submit();
                        else{
                            console.log("should go to " + $url);
                            window.location = $url;

                        }
                    }
                },
                danger: {
                    label: "لا!",
                    className: "btn-danger",
                    callback: function() {
                        //Example.show("uh oh, look out!");
                    }
                },

            }
        });
        return false;
    });
    </script>
@endpush --}}