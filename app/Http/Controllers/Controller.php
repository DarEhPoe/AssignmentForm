<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function fillform(){
        $data=InformationForm::all();
        return view('form')->with([
            'form'=>$data,
        ]);
    }
    public function formStores(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'job'=>'required',
        ],$messages=[
            'name.required'=>'please put name',
            'phone.required'=>'please put phone',
            'address.required'=>'please put address',
            'job.required'=>'please put job',
        ]);
        $name=$request->name;
        $phone=$request->phone;
        $address=$request->address;
        $job=$request->job;
       
        InformationForm::create([
            'name'=>$name,
            'phone'=>$phone,
            'address'=>$address,
            'job'=>$job,
        ]);
        return redirect('form')->with('success','you create form successfully');

    }
    public function deletePost(Request $request){

        $id = InformationForm::pluck('id')->toArray();
        $id=end($id);
        $data=InformationForm::find($id)->delete();
        $id--;
        
        return redirect('form')->with('success','you create form successfully');
        


    }
}
