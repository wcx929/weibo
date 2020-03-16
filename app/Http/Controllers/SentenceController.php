<?php

namespace App\Http\Controllers;
use App\Exceptions\InvalidRequestException;
use Illuminate\Http\Request;
use App\Models\Sentence;
use App\Models\SentenceType;

class SentenceController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(Request $request)
    {
        if ($type = $request->input('type', '')) {
            $map['type'] = $type;
        }else{
            $map['type'] = 0;
        }
		$sentence = Sentence::select('sentence.content', 'sentence.base_content','sentence.type','sentence_types.type_name','sentence_types.logo')->join('sentence_types', 'sentence.type', '=', 'sentence_types.id')->where($map)->inRandomOrder()->first();
        switch ($type) {
            case '1':
                $sentence['bg']='bg-zt';
                break;
            case '2':
                $sentence['bg']='bg-zc';
                break;
            case '3':
                $sentence['bg']='bg-pyq';
                break;
            case '4':
                $sentence['bg']='bg-djt';
                break;
            
            default:
                $sentence['bg']='bg-info';
                break;
        }
        if(empty($sentence)){
             throw new InvalidRequestException("出错了");
        }
    	//var_dump($sentence);die;
        return view('sentence.show', compact('sentence'));
    }

    public function pic()
    {
        return view('sentence.pic');
    }

    //接口随机返回一条数据
    public function words(Request $request)
    {
    	if ($type = $request->input('type', '')) {
            $map['type'] = $type;
        }else{
            $map['type'] = 0;
        }
        $sentence = Sentence::select('content', 'base_content','type')->where($map)->inRandomOrder()->first();
        if(empty($sentence)){
             throw new InvalidRequestException("出错了");
        }
        return response()->json($sentence);
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
        $info = $builder->paginate(20);
    	$sentence_type = SentenceType::all();
    	return view('sentence.sentenceList',  [
            'info' => $info,
            'sentence_type' => $sentence_type,
            'type'=>$type_arr,
            'type_id'=>$type,
            'filters'  => [
                'type'  => $type,
            ],
        ]);	
    }
}
