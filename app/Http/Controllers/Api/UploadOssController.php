<?php


namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadOssController extends Controller
{
    public function uploadOss(Request $request)
    {
        //dd($request->avatar);
        $path = 'avatar/' . date("Ym/d", time());
        $image_path = upload_image($path, $request->avatar);
        dd($image_path);
    }

    public  function zipImg()
    {
        $img = Image::make('./img/img_7.jpg')->widen(120)->save('./img/wcx.png');
        $url = $img->basePath();

        //$data = file_get_contents($url);
        //dd($data);
        //$img = (string)Image::make('./img/img_7.jpg')->widen(120)->encode('png', 75);
        //$base64_encode = 'data:image/png;base64,' . base64_encode($img);

        //dd($url);
        //dd($img);
        //$path = 'avatar/' . date("Ym/d", time());
        //$res = Storage::disk('oss')->put($path.'/a.jpg', $img);
        //$url = Storage::disk('oss')->url($path);
        //$resource = $img->stream()->__toString();
        //$image = $img->encode('data-url');
        //var_dump($image);die;
        //dd($resource);
        $res = $this->wcx($url);
        unlink('./img/wcx.png');
        dd($res);
    }

    public function wcx($img)
    {
        $path = 'avatar/' . date("Ym/d", time());
        $image_path = upload_image($path, $img);
        return $image_path;
    }
}
