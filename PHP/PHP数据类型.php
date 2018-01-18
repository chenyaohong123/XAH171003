<?php
//设置PHP文件的编码信息
header('Content-type:text/html;charset=utf-8');

/* php的数据类型：
 * String 字符串
 * Integer 整型
 * Float 浮点
 * Bollean 布尔(逻辑）
 * Array 数组
 * Object 对象
 * NULL 空值 
 * 
 * php获取数据的类型 gettype(数据)；
 */
$a1 = 'i am strong,not xvpang';
echo gettype($a1).'<br>';//string
$a2 = 134;
echo gettype($a2).'<br>';//integer
$bol = true;
echo gettype($bol).'<br>';//boolean
$f = 3.0;
echo gettype($f).'<br>';//double

/*php数组
  索引数组
  $arr = [0,1,2,3];或 $arr = array('a','b','c');
  取值$arr[index];
  关联数组
  $arr = array('name' => '小明','age' => 18);
  取值 $arr[key];
  
  在PHP中，echo和print不能输出数组，var_dump可以
  
  var_dump方法：
  此方法显示关于一个或者多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示结构
  
  
  
  
  
  
  
)
 */
 
$arr  = [1,2,3];
$arr1 = array('a','b','c');
var_dump($arr1);
echo '<br>';
var_dump($arr);
echo '<br>';

//关联数组
$arr2 = array('name' => '哈哈','age' => 18);
var_dump($arr2);
echo'<br>';
echo $arr2['name'];
echo'<br>';
echo gettype($arr1).'<br>';//array
echo gettype($arr2);

$arr = 18;
var_dump($arr);
//echo PHP_EOL;

$arr2['name'] = '校花';//修改数组键对应的内容
var_dump($arr2);
echo '<br>';

$a = 'hello';
$b = &$a;
$b = 100;
$a = '300a';
$b = &$a;
echo $a.'  '.$b.'<br>';
?>