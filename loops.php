<?php

# loops：循环  --让项目制作的更高效

# 根据某个条件，重复执行某段代码

/*for  while  do...while  foreach(速度快，底层使用枚举)*/

# For 循环
# @params - init，condition --条件，Inc --自增

for ($i = 0; $i < 10; $i++) {
	#echo $i."<br>";
	echo ($i+1)."<br>";
}
echo ($i)."<br>";

#while 循环

# condition

$a = 0;
while ($a <= 10) {
	echo $a."<br>";
	$a++;
}

#do...while
#@params  --  condition
$b = 0;
do {
	echo $b."<br>";
	$b++;
} while ($b <= 10);

#foreach  循环  下标数组
$people = array("p", "b", "c");
foreach ($people as $person) {
	echo $person;
	echo "<br>";
}

# foreach 循环  关联数组
$people1 = array(
	"h" => "h@.com",
	"b" => "b@.com",
	"c" => "c@.com",
);
foreach ($people1 as $person1 => $email) {
	echo $person1.":".$email;
	echo "<br>";
}

?>