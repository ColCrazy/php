<?php

#echo date();//至少要给一个参数
echo date('d');//day
echo date('m');#month
echo date('Y');#year  Y=>2017  y=>17
echo date('l');#day of week 星期几
echo date('Y/m/d');# 年月  日
echo date('d-m-Y');

#时分秒
echo date('h');// hour
echo date('i');// minutes
echo date('s');// seconds
echo date('a');#  am/pm

# 设置时区
date_default_timezone_set('Asia/Shanghai');
echo "<hr>";
echo date('h:i:a');
echo "<hr>";

# mktime（制作）
$timestamp = mktime(03, 22, 12, 3, 23, 1990);
// echo $timestamp;

# 完整的时间
echo date("m/d/Y h:i:sa", $timestamp);
echo "<hr>";

#字符串转时间
$timestamp2 = strtotime("7:00pm March 22 2016");
$timestamp3 = strtotime("tomorrow");
$timestamp4 = strtotime("next sunday");
echo date("m/d/Y h:i:sa", $timestamp4);

?>