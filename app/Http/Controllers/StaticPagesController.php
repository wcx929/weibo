<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loveword;
use App\Models\Sentence;
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

    public function caiji(){
        $url = "https://pyq.shadiao.app/api.php";
        $html= file_get_contents($url);
        $html = $html."\r\n";
        $writeFilePath = "./wcx.txt";
        $file_write = file_put_contents($writeFilePath,$html);
        /*$data=[
            'content'=>$html,
            'type'=>3,
            'created_at'=>date('Y-m-d H:i:s',time()),
            'updated_at'=>date('Y-m-d H:i:s',time())
        ];
        Sentence::insert($data);*/
        echo$html;
    }
}
