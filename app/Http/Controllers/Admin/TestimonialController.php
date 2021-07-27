<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class TestimonialController extends Controller
{
    public function __construct(Testimonials $testimonials)
    {
        $this->testimonials = $testimonials;
    }


    public function index(){

        $testimonials = $this->testimonials->all();
        return view('admin.testimonials.index' ,compact('testimonials'));
    }


    public function add(){

        return view('admin.testimonials.add');
    }


    public function store(Request $request){
        $this->testimonials->create([
            'name'=>$request->name,
            'image'=>$request->image,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('testimonials')->with('status','Thêm thành công !');
    }

 
    public function edit($id){

        $testimonials=   $this->testimonials->find($id);

        return view('admin.testimonials.edit' ,compact('testimonials'));
    }
    public function update($id, Request $request){
      
        $this->testimonials->find($id)->update([
            'name'=>$request->name,
            'image'=>$request->image,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('testimonials')->with('status','Thêm thành công !');
    }

  

    public function delete($id){
        try {
            $this->testimonials->find($id)->delete();
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
