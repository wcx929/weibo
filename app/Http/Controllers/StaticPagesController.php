<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supports;
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

    //捐助
    public function support()
    {
        $supports = Supports::getList();
        return view('static_pages/support',compact('supports'));
    }
    
    public function cx()
    {
        return view('static_pages/cx');
    }

    //留言
    public function message()
    {
        return view('static_pages/message');
    }

}
