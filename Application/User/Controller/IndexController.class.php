<?php
namespace User\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function  _before_index(){
        echo "before<hr>";
    }
    public function index(){
        echo 'URL_MODEL '.C("URL_MODEL");
        echo '<hr>';
        echo "<a href=\"".U('index')."\">".U('index');
        echo '<hr>';
        echo "<a href=\"".U('Home/Index/index')."\">".U('Home/Index/index');

        //dump(C(''));

        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function  _after_index(){
        echo '<hr>after';
    }
}