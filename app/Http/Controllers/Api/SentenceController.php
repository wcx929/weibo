<?php
namespace App\Http\Controllers\Api;
use App\Http\Requests\Api\SentenceRequest;
use Illuminate\Http\Request;
use App\Models\Sentence;
use App\Models\SentenceType;
use App\Models\Pictype;
use App\Models\Facepic;
use App\Models\Supports;
use App\Models\Fsj;

class SentenceController extends Controller
{
    //返回一条句子
    public function index(Request $request){
    	$sentence = Sentence::getOne($request->input('type', ''));
    	if(!empty($sentence)){
    		return $this->success($sentence);
    	}else{
    		return $this->failed('数据错误！');
    	}
    }

    public function getList(Request $request){
    	$list = Sentence::getList($request);
    	return $this->success($list);
    }

    //返回图片分类
    public function getPicType(){
        $pictype = Pictype::all()->where('online', true);
        return $this->success($pictype);
    }

    //返回图片列表
    public function getPicList(Request $request){
        $piclist = Facepic::getList($request);
        return $this->success($piclist);
    }

    //返回捐助列表
    public function getSupportsList(){
        $supports = Supports::getList();
        return $this->success($supports);
    }

    //返回浮生记列表
    public function getFsjList(Request $request){
        $type= $request->input('type', 1);
        $fsjs = Fsj::getList($type);
        return $this->success($fsjs);
    }

    public function pinyin(Request $request)
    {
        $content = $request->input('content');
        $pinyin = app('pinyin');
        return $this->success($pinyin->sentence($content, PINYIN_TONE));
    }
}
