<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
haha
<br>
</body>
</html>
    <div><?php echo (strtoupper($user["name"])); ?></div>
    <br>
    <div><?php echo ((isset($user["mobile"]) && ($user["mobile"] !== ""))?($user["mobile"]):"没有手机号码"); ?></div>
    <br>
    <div><?php echo (date("y-m-d",strtotime(date('Y-m-d g:i a',time())))); ?></div>
    <br>
    <div><?php echo date('Y-m-d',strtotime($Think.now));?></div>
</body>
    <script type="text/javascript" src="/thinkphp/Public/jquery.js"></script><!-- import 自动定位到Public目录-->
    <script type="text/javascript" src="/thinkphp/Public/jquery.js"></script>
</html>