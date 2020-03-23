<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    protected $table = 'sentence';

    protected $fillable = [
        'content', 'type', 'online','copy_num',
    ];
    
    //随机取一条
    public static function getOne($type=1){
        $map['type'] = $type;
        return $sentence = Sentence::select('content','type')->where($map)->inRandomOrder()->first();
    }
    
    public static function getList($request){
        // 创建一个查询构造器
        $builder = Sentence::query()->where('online', true);
        $type_arr=[];
        // 是否有提交 type 参数，如果有就赋值给 type 变量
        if ($type = $request->input('type', '')) {
            $builder->where('type',$type);
            $type_arr = SentenceType::find($type);
        }   
        $info = $builder->paginate(20);
    	$sentence_type = SentenceType::all();
    	return  [
            'info' => $info,
            'sentence_type' => $sentence_type,
            'type'=>$type_arr,
            'type_id'=>$type,
            'filters'  => [
                'type'  => $type,
            ],
        ];	
    }
}
