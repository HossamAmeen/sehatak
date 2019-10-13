<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use App\Http\Requests\BackEnd\NewsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
class NewsController extends BackEndController
{
    public function __construct(News $model)
    {
        parent::__construct($model);
    }
    public function store(NewsRequest $request){
       
        $requestArray = $request->all();
        if($request->hasFile('image'))
        { 
            $fileName = $this->uploadImage("image"  , $request , 540 , 441 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
       
      
      
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , NewsRequest $request){
        $requestArray = $request->all();
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage("image" , $request , 540 , 441 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
        $row = $this->model->FindOrFail($id);
       
       
        
        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'index');
    }
}
