<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loveword extends Model
{
    protected $table = 'loveword';

    protected $fillable = [
        'content', 'type', 'online',
    ];
}
