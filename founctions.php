<?php

#function:函数--具有某一功能的代码块
/*
Camel Case  --驼峰       myFunction
Lower Case  --小驼峰		my_founction
Pascal Case  --大驼峰    MyFounction

 */

// 定义函数
function simpleFunction() {
	echo "Hello World";
}

#调用函数
// simpleFunction();

// SIMPLEFUNCTION();

# 有参数  无返回值

function buy($money) {
	echo $money."给了，当没给我买东西！";
}

// buy(30);

# 多参数， 有返回值
function sumValue($num1 = 10, $num2) {
	$sum = $num1+$num2;
	return $sum;
}
$result = sumValue(5, 6);//有两个参数必须要给两个值
// echo $result;

# 无参数，有返回值

function buyDrink() {

	return "饭后的饮料";
}

echo buyDrink();

# 函数传引用

$myNum = 10;
// function addFive($num) {
// 	echo $num+5;
// }
function addFive(&$num) {
	$num += 5;
}
addFive($myNum);

echo $myNum;#拿到了mynum的引用，改变了了内存中的数值

?>