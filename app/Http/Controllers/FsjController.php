<?php

namespace App\Http\Controllers;
use App\Models\Fsj;
use Illuminate\Http\Request;

class FsjController extends Controller
{
    public function show(){
    	// 创建一个查询构造器
        $builder = Fsj::query()->where('online', true);
        $info = $builder->paginate(11);
        foreach ($info as $key => $value) {
        	$info[$key]['cc'] = strip_tags($value['content']);
        }
    	return view('fsj.fsj',  [
            'info' => $info,
        ]);
    }
}
