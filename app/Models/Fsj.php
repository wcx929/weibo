<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fsj extends Model
{
    protected $table = 'fsj';
    //获取浮生记列表
    public static function getList(){
        // 创建一个查询构造器
        $info = Fsj::query()->where('online', true)->orderBy("created_at","desc") ->paginate(20);
    	return  $info;
    }
}
