<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentenceType extends Model
{
	protected $table = 'sentence_types';
    public function loveword()
    {
        return $this->hasMany(Loveword::class);
    }
}
