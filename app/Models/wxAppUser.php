<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wxAppUser extends Model
{
    protected $table = 'wxapp_user';

    protected $fillable = [
        'id', 'user_id', 'wxapp_name','wxapp_avatar','wxapp_openid','wxapp_sex','created_at','updated_at'
    ];
}
