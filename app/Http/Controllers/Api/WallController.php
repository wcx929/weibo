<?php


namespace App\Http\Controllers\Api;

use App\Models\Wall;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function getWallList(){
        $wallList = Wall::getList();
        return $this->success($wallList);
    }

    public function wallAdd(Request $request)
    {
        $uid = $request->post('uid', 1);
        $content = $request->post('content', 1);
        $wall = new Wall;

        $wall->content = $content;
        $wall->uid = $uid;
        $wall->online = 1;

        $wall->save();

        return $this->success('操作成功');
    }
}
