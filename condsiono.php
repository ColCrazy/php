<?php

# 关系运算符
/*   > < = <= >= != == === !==    */
$num = 2;
if ($num <= 4) {
	echo "num的值一定是小于等于4的";
}

if ($num < 4) {
	echo "num的值一定是小于等于4的";
} else {
	echo "num的值一定是大于4的";

}

#逻辑运算符
/*
逻辑与  &&   AND
逻辑非
逻辑或  ||   OR
逻辑异或  XOR
 */

$num = 3;

if ($num > 3 XOR $num < 10) {
	echo "num大于3并且小于10";
}
/*
AND：一假即假
OR：一真即真
XOR：只有一个为真，结果才为真
 */

# switch
$favColor = "green";
switch ($favColor) {
	case 'red':
		echo "angry";
		break;
	case 'yellow':
		echo "happy";
		break;
	case 'blue':
		echo "silence";
		break;
	case 'green':
		echo "forgive";
		break;
	default:
		echo "GUN";
		break;
}

?>



