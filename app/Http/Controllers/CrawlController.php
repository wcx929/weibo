<?php


namespace App\Http\Controllers;

use App\Service\CrawlService;
use App\Models\Fsj;

class CrawlController extends Controller
{

    public function getDogs()
    {
        for ($i=0;$i<=50;$i++) {
            $content = CrawlService::getDogs();
            if (!empty($content)) {
                Fsj::firstOrCreate(['content' => $content],['content' => $content, 'type' => '2', 'online' => 0]);
                echo 666;
            } else {
                echo 123;
            }
        }
    }
}
