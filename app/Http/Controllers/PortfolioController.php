<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    public function __construct(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
    }


    public function index(){

        $portfolio = $this->portfolio->all();
        return view('admin.portfolio.index' ,compact('portfolio'));
    }


    public function add(){
        return view('admin.portfolio.add');
    }


    public function store(Request $request){

        
        $this->portfolio->create([
            'name'=>$request->name,
            'image'=>$request->image,
        ]);
        return redirect()->route('portfolio')->with('status','Thêm thành công !');
    }

    public function edit($id){
        $portfolio = $this->portfolio->find($id);
        return view('admin.portfolio.edit' ,compact('portfolio'));
    }
    public function update($id, Request $request){
        $this->portfolio->find($id)->update([
            'name'=>$request->name,
            'image'=>$request->image,
        ]);

        return redirect()->route('portfolio')->with('status','Cập nhật thành công !');
    }

    public function delete($id){
        try {
            $this->portfolio->find($id)->delete();
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
