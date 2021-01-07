<?php


namespace App\Service;


class CrawlService
{
    /**
     * 获取舔狗日记
     *
     * @return mixed|string
     *
     * @author Wcx
     * @date 2021/1/4 17:27
     * @version 1.0
     */
    public static function getDogs()
    {
        $url = "https://api.oick.cn/dog/api.php";
        $data = CurlService::curl_request($url);
        $data = json_decode($data, true);
        if( isset($data['code']) &&  $data['code'] == '-1') {
            return '';
        }
        return $data;
    }

    public static function getOneWords()
    {
        $url = "https://api.oick.cn/yiyan/api.php";
        $data = CurlService::curl_request($url);
        $data = json_decode($data, true);
        if( isset($data['code']) &&  $data['code'] == '-1') {
            return '且随疾风前行，身后亦需留心';
        }
        return $data;
    }
}
