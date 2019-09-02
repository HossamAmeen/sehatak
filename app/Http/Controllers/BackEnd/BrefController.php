<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Bref;
use App\Model\User;
use Hash;

class BrefController extends BackEndController
{
    public function __construct(Bref $model)
    {
        parent::__construct($model);
    }
    public function index()
    {
       
        return redirect()->route('brefs.edit' , ['id' => 1]);
    }
   
    
    public function update(Request $request, $id)
    {
        // return $request->all();
       $bref = Bref::find($id);
       if(!empty($bref)){
           $bref->fill($request->all());
           $bref->save();
       }

       $request->session()->flash('status', 'updated successfully');
       return back()->withInput();
    }
  

}
