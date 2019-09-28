                                        @php $input = "question"; @endphp
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">السؤال</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="{{ $input }}" 
                                                        value="{{ isset($row) ? $row->{$input} : '' }}"/>
                                                @error($input)
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>                                       
                                        <label class="col-lg-3 control-label">الإجابة</label><br>
                                        <div class="panel-heading">
                                           
                                            <ul class="panel-control">
                                                <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a></li>
                                                <li><a class="refresh" href="javascript:void(0)"><i class="fa fa-refresh"></i></a></li>
                                                <li><a class="close-panel" href="javascript:void(0)"><i class="fa fa-times"></i></a></li>
                                            </ul>
                                        </div>
                                        @php $input = "answer"; @endphp
                                        <div class="panel-body no-padding" >
                                            <textarea style="margin-right: 25%" name="{{ $input }}"  id="demo" rows="10" cols="100">
                                                    {{ isset($row) ? $row->{$input} : '' }}
                                            </textarea>
                                        </div><br>

                                       
                                       