<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentenceType extends Model
{
    public function loveword()
    {
        return $this->hasMany(Loveword::class);
    }
}
