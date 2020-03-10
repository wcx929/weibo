<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loveword;
use App\Models\SentenceType;

class SentenceController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show()
    {
    	//{{ $lovewords->content }} - {{ $lovewords->emo_content }}
    	$total = Loveword::count() - 1;
		$skip = mt_rand(0, $total);
		$lovewords = Loveword::select('content', 'emo_content')->skip($skip)->take(1)->first();
    	//print_r($item);die;
        return view('sentence.show', compact('lovewords'));
    }

    public function pic()
    {
        return view('sentence.pic');
    }

    //接口随机返回一条数据
    public function words()
    {
    	//{{ $lovewords->content }} - {{ $lovewords->emo_content }}
    	$total = Loveword::count() - 1;
		$skip = mt_rand(0, $total);
		$lovewords = Loveword::select('content', 'emo_content')->skip($skip)->take(1)->first();
    	//print_r($item);die;
        return response()->json($lovewords);
    }

    public function getloveword()
    {
    	//{{ $lovewords->content }} - {{ $lovewords->emo_content }}
    	$total = Loveword::count() - 1;
		$skip = mt_rand(0, $total);
		$lovewords = Loveword::select('content', 'emo_content')->skip($skip)->take(1)->first();
    	return response()->json($lovewords);
    }
    
    //举子列表
    public function sentenceList(Request $request)
    {
    	// 创建一个查询构造器
        $builder = Loveword::query()->where('online', true);
        // 是否有提交 type 参数，如果有就赋值给 type 变量
        if ($type = $request->input('type', '')) {
            $builder->where('type',$type);
        }
        
        $info = $builder->paginate(11);
    	//$info = DB::table('facepics')->paginate(15);
    	$sentence_type = SentenceType::all();
    	/*var_dump($builder);die;
    	$info = $builder->limit(2);*/
    	return view('sentence.sentenceList',  [
            'info' => $info,
            'sentence_type' => $sentence_type,
            'type'=>$type,
            'filters'  => [
                'type'  => $type,
            ],
        ]);	
    }
}
