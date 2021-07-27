<?php

namespace App\Http\Controllers;

use App\Models\TeamWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TeamWorkController extends Controller
{
    public function __construct(TeamWork $teamWork)
    {
        $this->teamWork = $teamWork;
    }


    public function index(){

        $teamWork = $this->teamWork->all();
        return view('admin.teamwork.index' ,compact('teamWork'));
    }


    public function add(){

     

        return view('admin.teamwork.add');

    }


    public function store(Request $request){

        $this->teamWork->create([
            'name'=>$request->name,
            'position'=>$request->position,
            'image'=>$request->image,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('teamwork')->with('status','Thêm thành công !');
    }

    public function edit($id){

        

        $teamwork = $this->teamWork->find($id);
     
        return view('admin.teamwork.edit' ,compact('teamwork'));
    }
    public function update($id, Request $request){
        $this->teamWork->find($id)->update([
            'name'=>$request->name,
            'position'=>$request->position,
            'image'=>$request->image,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('teamwork')->with('status','Cập nhật thành công !');
    }

    public function delete($id){
        try {
            $this->teamWork->find($id)->delete();
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
