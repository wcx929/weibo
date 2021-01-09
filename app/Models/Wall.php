<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Wall extends Model
{
    protected $table = 'wall';

    protected $fillable = [
        'id', 'uid', 'content', 'online', 'created_at','updated_at'
    ];

    public static function getList(){
        // 创建一个查询构造器
        $map['wall.online'] = 1;
        $info = Wall::query()->where($map)->leftJoin('wxapp_user', 'wall.uid', '=', 'wxapp_user.id')
                                          ->orderBy("wall.id","desc")
                                          ->select('wall.id', 'wall.uid', 'wall.content', 'wall.created_at', 'wxapp_user.wxapp_name', 'wxapp_user.wxapp_avatar') ->paginate(20);
        return  $info;
    }
}
