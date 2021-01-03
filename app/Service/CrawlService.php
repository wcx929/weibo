<?php


namespace App\Service;


class CrawlService
{
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
}
