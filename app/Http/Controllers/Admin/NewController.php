<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class NewController extends Controller
{
    public function __construct(News $news)
    {
        $this->news = $news;
    }


    public function index(){

        $news = $this->news->all();
        return view('admin.news.index' ,compact('news'));
    }


    public function add(){

        return view('admin.news.add');
    }


    public function store(Request $request){
        $this->news->create([
            'title'=>$request->title,
            'image'=>$request->image,
            'date_update'=>$request->date_update,
            'desc'=>$request->desc,
            'our_clients'=>$request->our_clients,
        ]);
        
        return redirect()->route('news')->with('status','Thêm thành công !');
    }

 
    public function edit($id){

        $news=   $this->news->find($id);

        return view('admin.news.edit' ,compact('news'));
    }
    public function update($id, Request $request){
      
        $this->news->find($id)->update([
            'title'=>$request->title,
            'image'=>$request->image,
            'date_update'=>$request->date_update,
            'desc'=>$request->desc,
            'our_clients'=>$request->our_clients,
        ]);
        return redirect()->route('news')->with('status','Thêm thành công !');
    }

  

    public function delete($id){
        try {
            $this->news->find($id)->delete();
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
