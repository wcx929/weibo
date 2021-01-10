<?php


namespace App\Http\Controllers\Api;

use App\Models\Wall;
use Illuminate\Http\Request;
use App\Service\wxAppletService;

class WallController extends Controller
{
    public function getWallList(){
        $wallList = Wall::getList();
        return $this->success($wallList);
    }

    public function wallAdd(Request $request)
    {
        $uid = $request->post('uid', 1);
        $content = $request->post('content');
        $res = wxAppletService::contentSecurity($content);
        if ($res['errcode'] == 87014) {
            return $this->internalError('内容违规');
        }
        $wall = new Wall;

        $wall->content = $content;
        $wall->uid = $uid;
        $wall->online = 1;

        $wall->save();

        return $this->success('操作成功');
    }

}
