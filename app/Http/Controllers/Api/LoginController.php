<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Models\wxAppUser;

class LoginController extends Controller
{
    private $app;
    public function __construct()
    {
        $this->app = \EasyWeChat::miniProgram();
    }

    /**
     * 登录
     *
     * @param Request $request
     * @return mixed
     *
     * Author:wcx
     * DateTime:2021/1/9 0:42
     */
    public function login(Request $request)
    {
        $code = $request->get('code');
        //$code = '053BW20w3P2kDV2q5X0w30nl9W3BW20W';
        $data = $this->app->auth->session($code);
        /*$iv = 'ixk39jVmRMdT2x8ofRFedA==';
        $encryptedData = "YUcS2eO465gN6EHLc6TFn3sCyD1olElJ3yDXvKAEj423xF20FXNQd/m69dXek12ehxTFIImem2B5TkVkoZlMkPAFagRwtrEWM9b8Joiq2h7SBNT75wh7Pz3SpxKMBD2LIlejfEScyALXiXP0bbTw0qWpMRGNGXRaOeD+a6p6Rvxm1xkHgAVOszsVrXDybljd5rsqwisC4UpxRBrPrbn3VPt/nJEKDgvEwGzpQ/sitLQTcy7WZmtomZgLuDSLdjSXqrsYFvT0gGra8h5aqaBf0y7ecSR5C7rlFVvqwK7IzXsjJbNhLVY6QhYMZN4iqIGNieW9q28L4ODOYgjWyuftB6SLcW0VM2E9hU340i6HYFMx/iMVc/xVCZRfn2Va2E/8NOJKWBAkjVuX+t5mSkvmu+o8BsTfYT6rrNPutJta/qRnGwSM4IM7epciY2CFKeA1jqnVG1qvdjYO+qaYTSa70pJykmPtKx4ix4wGHlnQziY=";
        $res = $this->getUserInfo($data['session_key'], $iv, $encryptedData);*/
        return $this->success($data);
    }

    /**
     * 解密用户信息，存入数据库
     * @param Request $request
     * @param wxAppUser $wxAppUser
     * @return mixed
     * Author:wcx
     * DateTime:2021/1/9 17:50
     */
    public function getUserInfo(Request $request, wxAppUser $wxAppUser)
    {
        $sessionKey    = $request->get('sessionKey');
        $iv            = $request->get('iv');
        $encryptedData = $request->get('encryptedData');
        $userInfo      = $this->app->encryptor->decryptData($sessionKey, $iv, $encryptedData);
        $res = wxAppUser::firstOrCreate(['wxapp_openid' => $userInfo['openId']],
            [
                'wxapp_openid' => $userInfo['openId'],
                'wxapp_name'   => $userInfo['nickName'],
                'wxapp_avatar' => $userInfo['avatarUrl'],

            ]);
        $userInfo['uid'] = $res->id;
        return $this->success($userInfo);
        //return $this->app->encryptor->decryptData($sessionKey, $iv, $encryptedData);
    }
}
