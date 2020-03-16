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
        // 是否有提交 order 参数，如果有就赋值给 $order 变量
        // order 参数用来控制商品的排序规则
        if ($type = $request->input('type', '')) {
            $builder->where('type_name',$type);
        }
        
        $info = $builder->paginate(30);
    	
    	//$info = DB::table('facepics')->paginate(15);
    	$face_type = Pictype::all();
    	/*var_dump($builder);die;
    	$info = $builder->limit(2);*/
    	return view('pic.pic',  [
            'info' => $info,
            'face_type' => $face_type,
            'type_id'=>$type,
            'filters'  => [
                'type'  => $type,
            ],
        ]);
    }
}
