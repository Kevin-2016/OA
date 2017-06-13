<?php

//echo '123';die;

//1、设置字符集
header('Content-Type:text/html;charset=utf-8');

//echo '123';die;

//2、设置项目目录
define('APP_PATH','./App/');


//3、打开调试模式
define('APP_DEBUG','true');

//echo '123';die;

//4、引入框架的核心文件
require './ThinkPHP/ThinkPHP.php';

//echo '123';


?>