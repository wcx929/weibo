<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supports extends Model
{
	//获取捐助列表
    public static function getList(){
        // 创建一个查询构造器
        $info = Supports::query()->where('online', true)->paginate(21);
    	return  $info;
    }
}
