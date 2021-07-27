<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SliderController extends Controller
{

    private $slider ; 

    public function __construct(Slider $sliderModel)
    {
        $this->slider = $sliderModel;
    }


    public function index(){

        $sliders = $this->slider->all();
        return view('admin.slider.index' ,compact('sliders'));
    }


    public function add(){

        return view('admin.slider.add');

    }


    public function store(Request $request){

        $this->slider->create([
            'title' =>$request->title,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=> $request->image
        ]);

        return redirect()->route('slider')->with('status','Thêm thành công !');
    }

    public function edit($id){
        $slider = $this->slider->find($id);
        return view('admin.slider.edit' ,compact('slider'));
    }
    public function update($id, Request $request){
        $this->slider->find($id)->update([
            'title' =>$request->title,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=> $request->image
        ]);

        return redirect()->route('slider')->with('status','Cập nhật thành công !');
    }

    public function updateStatus($id){
        $slider = $this->slider->find($id);
        if($slider->status == 0){
            $slider->find($id)->update([
                'status' => 1
            ]);
        }else{
            $slider->find($id)->update([
                'status' => 0
            ]);
        }
    }


    public function delete($id){

        try {
            $this->slider->find($id)->delete();
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
