<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AboutUsController extends Controller
{
    private $aboutus ; 

    public function __construct(AboutUs $aboutusModel)
    {
        $this->aboutus = $aboutusModel;
    }


    public function index(){

        $aboutus = $this->aboutus->all();
        return view('admin.aboutus.index' ,compact('aboutus'));
    }


    public function add(){

     

        return view('admin.aboutus.add');

    }


    public function store(Request $request){

        $this->aboutus->create([
            'description' =>$request->description,
            'happy_clients'=>$request->happy_clients,
            'qualified'=>$request->qualified,
            'image'=> $request->image,
            'percent_risk'=>$request->percent_risk,
            'audit_percentage'=>$request->audit_percentage,
            'financial_percent'=> $request->financial_percent
        ]);

        return redirect()->route('aboutus')->with('status','Thêm thành công !');
    }

    public function edit($id){
        $aboutus = $this->aboutus->find($id);
        return view('admin.aboutus.edit' ,compact('aboutus'));
    }
    public function update($id, Request $request){
        $this->aboutus->find($id)->update([
            'description' =>$request->description,
            'happy_clients'=>$request->happy_clients,
            'qualified'=>$request->qualified,
            'image'=> $request->image,
            'percent_risk'=>$request->percent_risk,
            'audit_percentage'=>$request->audit_percentage,
            'financial_percent'=> $request->financial_percent
        ]);
        return redirect()->route('aboutus')->with('status','Cập nhật thành công !');
    }



    public function delete($id){

      
        try {
            $this->aboutus->find($id)->delete();
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
