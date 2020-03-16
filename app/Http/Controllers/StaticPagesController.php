<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loveword;
use App\Models\Sentence;
use DB;
/*use App\Models\Status;
use Auth;*/

class StaticPagesController extends Controller
{
     public function home()
    {

        return view('static_pages/home');
        /*$feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
        return view('static_pages/home',compact('feed_items'));*/
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
    
    public function support()
    {
        return view('static_pages/support');
    }
    
    public function cx()
    {
        return view('static_pages/cx');
    }

    public function caiji(Sentence $sentence){
        header('content-type:text/html;charset=utf-8');
        $url = "https://pyq.shadiao.app/api.php";
	    for ($i = 0; $i < 100; $i++) {
	    	
	    	$html= file_get_contents($url);
	    	$data['content']=$html;
	    	$data['online']=1;
	    	$data['type']=3;
            $sentence->create($data);
	    }
        echo $html;
    }
}
