<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facepic extends Model
{
	protected $table = 'facepics';

	protected $fillable = ['pic_url','type_name'];
	
    public function pictype()
    {
        return $this->belongsTo(Pictype::class,'type_name');
    }
}
