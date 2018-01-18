<?php

/*
 * 
 */

$a = 1;
if($a){
	echo 'a大于1';
	echo '<br>';
}
else{
	echo '其他情况';
	echo '<br>';
}
//php中获取数组的长度，用count函数
$arr = ['a','b','c'];
for($a = 0;$a <count($arr); $a++){
	echo $arr[$a];
	echo '<br>';
}

foreach ($arr as $value)
{
    echo $value . "<br>";
}
/*
 * 遍历php关联数组，foreach循环
 * foreach($arr as $a => $b){
 * 	  $a : $arr数组中的每个元素的键
 *    $b : $arr数组中的每个元素的值
 * }
 * 
 */
$arr = array('name' => '哈哈','age' => 18,'sex' => '女');
foreach($arr as $key => $value){
	echo '键:'.$key.'值:'.$value;
	echo '<br>';
}
?>