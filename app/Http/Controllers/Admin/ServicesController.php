<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ServicesController extends Controller
{

    public function __construct(Services $servicesModel)
    {
        $this->services = $servicesModel;
    }


    public function index(){

        $services = $this->services->all();
        return view('admin.services.index' ,compact('services'));
    }


    public function add(){

        return view('admin.services.add');
    }


    public function store(Request $request){
        $this->services->create([
            'title'=>$request->title,
            'status'=>$request->status,
            'image'=>$request->image,
            'desc'=>$request->desc,
        ]);
        
        return redirect()->route('services')->with('status','Thêm thành công !');
    }


    public function updateStatus($id){
 

        $services = $this->services->find($id);
        if($services->status == 0){
            $services->find($id)->update([
                'status' => 1
            ]);
        }else{
            $services->find($id)->update([
                'status' => 0
            ]);
        }
    }

    public function edit($id){

        $services=   $this->services->find($id);

        return view('admin.services.edit' ,compact('services'));
    }
    public function update($id, Request $request){
      
        $this->services->find($id)->update([
            'title'=>$request->title,
            'status'=>$request->status,
            'image'=>$request->image,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('services')->with('status','Thêm thành công !');
    }

  

    public function delete($id){
        try {
            $this->services->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success',
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("message" . $e->getMessage() . 'Line: ' . $e->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail',
            ], 500);
        }
         
    }
}
