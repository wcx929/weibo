<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sentence;
use App\Models\SentenceType;

class SentenceController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show()
    {
    	$total = Sentence::count() - 1;
		$skip = mt_rand(0, $total);
		$sentence = Sentence::select('content', 'base_content')->skip($skip)->take(1)->first();
    	//print_r($item);die;
        return view('sentence.show', compact('sentence'));
    }

    public function pic()
    {
        return view('sentence.pic');
    }

    //接口随机返回一条数据
    public function words()
    {
    	$total = Sentence::count() - 1;
		$skip = mt_rand(0, $total);
		$Sentences = Sentence::select('content', 'base_content')->skip($skip)->take(1)->first();
        return response()->json($Sentences);
    }

    public function getSentence()
    {
    	$total = Sentence::count() - 1;
		$skip = mt_rand(0, $total);
		$Sentences = Sentence::select('content', 'base_content')->skip($skip)->take(1)->first();
    	return response()->json($Sentences);
    }
    
    //举子列表
    public function sentenceList(Request $request)
    {
    	// 创建一个查询构造器
        $builder = Sentence::query()->where('online', true);
        $type_arr=[];
        // 是否有提交 type 参数，如果有就赋值给 type 变量
        if ($type = $request->input('type', '')) {
            $builder->where('type',$type);
            $type_arr = SentenceType::find($type);
        }   
        $info = $builder->paginate(11);
    	$sentence_type = SentenceType::all();
    	return view('sentence.sentenceList',  [
            'info' => $info,
            'sentence_type' => $sentence_type,
            'type'=>$type_arr,
            'filters'  => [
                'type'  => $type,
            ],
        ]);	
    }
}
