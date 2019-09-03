

<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
               
                <div class="panel-body">
                <!--Table Wrapper Start-->
                    <div class="ls-editable-table table-responsive ls-table">
                            {{  $slot }}
                    </div>
                <!--Table Wrapper Finish-->
                </div>
            </div>
        </div>
</div>                       
@push('js')
    
<script>
        function myFunction() {
          var txt;
          if (confirm("هل تريد تاكيد الحذف!")) {
            txt = "You pressed OK!";
          } else {
            txt = "You pressed Cancel!";
          }
          document.getElementById("demo").innerHTML = txt;
        }
        </script>

@endpush
@push('css')
   

@endpush