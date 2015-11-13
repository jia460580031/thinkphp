<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/31
 * Time: 9:46
 */
function getTestData(){
    $data=array();
    for($i=0;$i<10;$i++){
        $data[$i]['name']='user-'.$i;
        $data[$i]['age']=rand(18.90);
    }
    return $data;
}