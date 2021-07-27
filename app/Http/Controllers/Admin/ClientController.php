<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    public function __construct(Clients $client)
    {
        $this->clients = $client;
    }


    public function index(){

        $clients = $this->clients->all();
        return view('admin.clients.index' ,compact('clients'));
    }


    public function add(){
        return view('admin.clients.add');
    }


    public function store(Request $request){

        
        $this->clients->create([
            'name'=>$request->name,
            'image'=>$request->image,
        ]);
        return redirect()->route('clients')->with('status','Thêm thành công !');
    }

    public function edit($id){
        $clients = $this->clients->find($id);
        return view('admin.clients.edit' ,compact('clients'));
    }
    public function update($id, Request $request){
        $this->clients->find($id)->update([
            'name'=>$request->name,
            'image'=>$request->image,
        ]);

        return redirect()->route('clients')->with('status','Cập nhật thành công !');
    }

    public function delete($id){
        try {
            $this->clients->find($id)->delete();
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
