<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/28
 * Time: 10:27
 */

namespace User\Controller;
use Think\Controller;

class EmptyController  extends Controller{
    public function _empty(){
        echo '你是怎么找到我的？';
    }
}