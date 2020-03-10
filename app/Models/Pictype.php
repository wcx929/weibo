<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pictype extends Model
{
	protected $table = 'pictypes';
    public function facepic()
    {
        return $this->hasMany(Facepic::class,'type_name');
    } 
}
