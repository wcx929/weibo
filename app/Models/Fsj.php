<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fsj extends Model
{
    protected $table = 'fsj';
    //获取浮生记列表
    public static function getList(){
        // 创建一个查询构造器
        $info = Fsj::query()->where('online', true)->orderBy("created_at","desc") ->paginate(20);
    	return  $info;
    }

    //返回图片路径
    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }
}
