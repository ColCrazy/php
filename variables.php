<?php 
	// echo "Hello World";
	// 单行注释:
	#  单行注释   shift+3
	/*
	   多行注释   Alt+command+/
	*/
	# variable   变量

	$output = "hello world";
	/*
		1.前缀 $
		2.以字母数字下划线组成
		3.数字不能开头
		4.大小写敏感
		5.驼峰命名法
	*/
	// echo $output;

	#数据类型
	/*
	string  integer  float  boolean
	array   object   resource(函数)
	*/

	$num = 22;
	$string = "abc";
	$float = 22.22;
	$bool = true;
	// echo "$bool";

	#运算符 
	$num1 = 10;
	$num2 = 20;
	$sum = $num1+$num2;
	// echo $sum;

	#字符串 (在PHP中 '+' 就是+，没有拼接功能 )
	$string1 = "hello";
	$string2 = "world";
	// $greeting = $string1+$string2;
	#字符串拼接
	$greeting = $string1.$string2;
	// echo "$greeting";

	#在php中引号的区别
	// 单引号中的内容是单纯的字符串
	$greeting2 = '$string1 $string2';
	// 双引号中的内容可以正常的被解析
	$greeting3 = "$string1 $string2";


	#转义字符
	$string3 = 'They\'re here';

	$string4 = "They're here";

	echo $string4."<br>";
	printf($string4);//如果成功会有返回值，返回值为1


	#常量  程序运行中不可被改变的量
	// 名字要大写 
	define("GREETING", "what ever");
	# 常量第三个参数是BOOL，true为部分大小写
	define("GREETING", "what ever",true);
	echo GREETING;
	echo greeting;
	var_dump(greeting);
?>








