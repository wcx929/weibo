<?php
namespace App\Http\Controllers\Api;
use App\Http\Requests\Api\SentenceRequest;
use Illuminate\Http\Request;
use App\Models\Sentence;
use App\Models\SentenceType;

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
}
