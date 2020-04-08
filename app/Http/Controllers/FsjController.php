<?php

namespace App\Http\Controllers;
use App\Models\Fsj;
use Illuminate\Http\Request;

class FsjController extends Controller
{
    public $type_name = ['','浮生记','舔狗日记'];
    public function show(Request $request){
        $type= $request->input('type', 1);
    	// 创建一个查询构造器
        //$builder = Fsj::query()->where('online', true);
        $info = Fsj::getList($type);
        /*foreach ($info as $key => $value) {
        	$info[$key]['cc'] = strip_tags($value['content']);
        }*/
    	return view('fsj.fsj',  [
            'info' => $info,
            'title' => $this->type_name[$type]
        ]);
    }
}
