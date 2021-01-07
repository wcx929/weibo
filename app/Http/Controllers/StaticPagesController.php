<?php

namespace App\Http\Controllers;

use App\Service\CrawlService;
use App\Models\Supports;
use DB;

class StaticPagesController extends Controller
{
     public function home()
    {
        $oneWords = CrawlService::getOneWords();

        return view('static_pages/home', compact('oneWords'));
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
