<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Gallery;
class GalleryController extends BackEndController
{
    public function __construct(Gallery $model)
    {
        parent::__construct($model);
    }
    public function store(Request $request){
       
            $fileName = $this->uploadImage($request , 1110 , 300 );
            $requestArray = $request->all();
          
            if(isset($requestArray['image']) )
            $requestArray['image'] =  $fileName;
            $requestArray['user_id'] = Auth::user()->id;
            $this->model->create($requestArray);
            session()->flash('action', 'تم الاضافه بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
    
        public function update($id , Request $request){
            $fileName = $this->uploadImage($request );
            $row = $this->model->FindOrFail($id);
            $requestArray = $request->all();
           
            if(isset($requestArray['image']) )
            $requestArray['image'] =  $fileName;
            $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.edit' , ['id' => $row->id]);
        }
}
