<?php

#array:数组 -- 存储一堆数据的集合
/*
下标数组：下标以0开始
关联数组：以第一个添加的名字开头
 */

#下标数组
// $people = array("kevin", "Hemiah", "Herry");
// echo $people[1];

// $people[3] = "Crazy";
// echo $people[3];
// 打印数组个数
// echo count($people);

// 打印数组的方法
// print_r($people);

#万能打印方法
#var_dump($people);

#  关联数组

$people = array("herry" => 35, "bukcy" => 25, "crazy" => 20);
echo $people["crazy"];
$ids = [22=> "Herry", 25=> "BUkcy"];
echo $ids[22];

$ids[35] = "Emily";
echo $ids[35];

# 观察
$ids[] = "John";

$people[] = 55;

print_r($ids);
print_r($people);

#  多维数组
$cars = array(

	array("Honda", 20, 10),
	array("dz", 20, 20),
	array('Ford', 15, 10)

);

echo $cars[2][1];

?>