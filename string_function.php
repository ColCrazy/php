<?php

# string functin: 处理字符串的函数
# 返回字符串的一部分 substr
// $output = "Hello World ";
// $output = substr($output, 1, 5);
// echo $output;
# 返回给定的字符串 string 的长度  strlen
// echo strlen($output);
# 查找字符串首次出现的位置 strpos
// echo strpos($output, "o");
# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
// echo strrpos($output, "l");
# 去除首尾空格trim
// $out = " hello  world";
// $end = trim($out);
// echo $end;
// echo strlen($end);
# 将字符串转为大写 strtoupper
// $big = strtoupper($out);
// echo $big;
# 将字符串转为小写 strtolower
// $smaller = strtolower($big);
// echo $smaller;
# 将每个单词首字母大写 ucwords
// $first = ucwords($smaller);
// echo $first;
# 替换所有匹配的内容  str_replace
// $chang = str_replace("world", "everbody", $out);
// echo $chang;

# 判断是否是字符串  is_string
// $val = "true";
// $out = is_string($val);
// echo $out;

# 过滤掉数组中非字符串的值

$values = array(true, false, "hello", 32, "23.4", "32.4", '', ' ', 0, '0');
foreach ($values as $value) {
	#判断value是否是字符串，如果是则输出
	if (is_string($value)) {
		echo $value." is a string!<br>";
	}
}

# 压缩字符串  gzcompress
// $string = "一大堆文字";
// $cheng  = gzcompress($string);
// echo $cheng;
# 解压字符串gzuncompress
// $un = gzuncompress($cheng);
// echo $un;
?>