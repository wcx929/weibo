<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facepic;
use Illuminate\Support\Facades\DB;

class PicController extends Controller
{
    public function show(){
    	$info = DB::table('facepics')->paginate(15);
    	/*var_dump($builder);die;
    	$info = $builder->limit(2);*/
    	return view('pic.pic', compact('info'));
    }
}
