<?php


namespace App\Service;


class wxAppletService
{
    private $app;
    public function __construct()
    {
        $this->app = \EasyWeChat::miniProgram();
    }

    /**
     * 微信内容安全验证
     *
     * @param string $content
     * @return mixed
     *
     * Author:wcx
     * DateTime:2021/1/9 17:59
     */
    public static function contentSecurity(string $content)
    {
        $app = \EasyWeChat::miniProgram();
        return $app->content_security->checkText($content);
    }
}
