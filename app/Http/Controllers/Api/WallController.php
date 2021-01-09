<?php


namespace App\Http\Controllers\Api;

use App\Models\Wall;

class WallController extends Controller
{
    public function getWallList(){
        $wallList = Wall::getList();
        return $this->success($wallList);
    }
}
