<?php
$arr1 = include './config.ini.php';

$arr2 = array(
	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_CHARSET'=> 'utf8', // 字符集

	
);
return array_merge($arr1,$arr2);
