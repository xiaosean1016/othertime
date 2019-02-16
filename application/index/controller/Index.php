<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        //http://player.youku.com/embed/XNDA2MjkyMzI0MA==
        return $this->fetch();
    }
}
