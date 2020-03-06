<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loveword;

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
}
