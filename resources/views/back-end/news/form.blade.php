 @php $input = "title"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">عنوان الخبر</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
           @enderror
    </div>
 </div>    
  
 @php $input = "date"; @endphp
 <div class="form-group">
      <label class="col-lg-2 control-label">التاريخ</label>
      <div class="col-lg-10">
          <input type="date" id="date" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
            class="form-control">
            @error($input)
            <span class="invalid-feedback" role="alert" required>
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
      </div>
  </div>    
     
@php $input = "image"; @endphp          
<div class="form-group">
        <label class="col-md-2 control-label">الصورة</label>
        <div class="col-md-10 ls-group-input">
            <input name="{{ $input }}" id="file-3" type="file" multiple="true" >
        </div>
        @error($input)
        <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>  

@php $input = "description"; @endphp
<div class="panel-body no-padding" >
           <textarea class="summernote" name="{{ $input }}"  id="demo" >
                    {{ isset($row) ? $row->{$input} : '' }}
   </textarea>
</div><br>
@error($input)
<span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
</span>
@enderror

