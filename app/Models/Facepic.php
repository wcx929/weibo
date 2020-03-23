<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facepic extends Model
{
	protected $table = 'facepics';

	protected $fillable = ['pic_url','type_name'];
	
    public function pictype()
    {
        return $this->belongsTo(Pictype::class,'type_name');
    }

    public static function getList($request){
        // 创建一个查询构造器
        $builder = Facepic::query()->where('online', true);
        $type_arr=[];
        if ($type = $request->input('type', '')) {
            $builder->where('type_name',$type);
            $type_arr = Pictype::find($type);
        }
        
        $info = $builder->paginate(20);
    	
    	//$info = DB::table('facepics')->paginate(15);
    	$face_type = Pictype::all();
    	/*var_dump($builder);die;
    	$info = $builder->limit(2);*/
    	return [
	            'info' => $info,
	            'type'=>$type_arr,
	            'face_type' => $face_type,
	            'type_id'=>$type,
	            'filters'  => [
	                'type'  => $type,
	            ]
	        ];
    }
}
