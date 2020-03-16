<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facepic;
use App\Models\Pictype;
use Illuminate\Support\Facades\DB;

class PicController extends Controller
{
    public function show(Request $request){
    	
    	// 创建一个查询构造器
        $builder = Facepic::query()->where('online', true);
        $type_arr=[];
        if ($type = $request->input('type', '')) {
            $builder->where('type_name',$type);
            $type_arr = Pictype::find($type);
        }
        
        $info = $builder->paginate(60);
    	
    	//$info = DB::table('facepics')->paginate(15);
    	$face_type = Pictype::all();
    	/*var_dump($builder);die;
    	$info = $builder->limit(2);*/
    	return view('pic.pic',  [
            'info' => $info,
            'type'=>$type_arr,
            'face_type' => $face_type,
            'type_id'=>$type,
            'filters'  => [
                'type'  => $type,
            ],
        ]);
    }
}
