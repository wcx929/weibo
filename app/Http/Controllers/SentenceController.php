<?php
//句子控制器
//@author wanfeng
namespace App\Http\Controllers;
use App\Exceptions\InvalidRequestException;
use Illuminate\Http\Request;
use App\Models\Sentence;
use App\Models\SentenceType;

class SentenceController extends Controller
{
	//句子index
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
        if ($type == 2) {
            $sentence->content = '嘴臭生成器暂时不字词使用(有内鬼';
        }
        return view('sentence.show', compact('sentence'));
    }

    //接口随机返回一条数据
    public function words(Request $request)
    {
        $type = $request->input('type', '1');
    	$sentence = Sentence::getOne($type);
    	if ($type == 2) {
    	    $sentence->content = '嘴臭生成器暂时不字词使用(有内鬼';
        }
        return response()->json($sentence);
    }

    //举子列表
    public function sentenceList(Request $request)
    {
        $list = Sentence::getList($request);
        return view('sentence.sentenceList', $list);
    }
    //举子列表
    public function test(Request $request)
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
    	return response()->json($info);
    }
}
