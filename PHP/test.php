<?php
echo 'hello world'.'<br>';

/*php的注释:
 * 单行注释：//
 * 块注释: /* *\/

 * PHP：(全称：Hypertext Preprocessor)(超文本预处理器)
 *           Personsl Homepage
 * php代码要运行在服务器上
 * 
 */
/*声明一个变量
 php 声明变量需要使用$符号
 php的变量在被赋值的同时被声明，并确定类型。
 
 使用变量可以直接调其变量名。
 双引号里出现变量名 还是会将其作为一个变量去使用(获取变量值)
 单引号里出现变量名  会将变量名当做一个字符串
 
 在php里，字符转拼接用(.)
 
 php 变量命名规则：
 1. 要用$符号，后面跟变量分名称
 2.只能以数字，字母，下划线构成
 3.不能以数字开头
 4.区分大小写
 
 php的输出：
 echo：
 echo('输出内容')；
 echo'输出内容1'，'输出内容2'，'输出内容3';
  
  print:
  print('输出类容')；
  print('输出内容'；)//print只能输出一个字符串
  echo 的输出速度比print快一点
  print返回值为1，echo没有返回值
  
  var_dump();
  输出数据的具体信息以及数据
* */
$txt = '你好 世界';
echo $txt.'<br>';

$txt2 = '你去 吃饭';
echo $txt2.'<br>';//

$inp = '<input value = "this is a input"/>';
echo $inp.'<br>';//input 框

echo "$txt2".'<br>';//你去 吃饭
echo "hhhh $txt2 <br>";//haha 你去 吃饭
echo '$txt2 <br>';//$txt2 
	
echo('你好');//输出一个
echo $text,$text2.'<br>';

print($txt.'这是print的输出 <br>');
print'这是print的第二个输出.<br>';

//printf： 输出格式化的字符，将数据进行简单的处理之后再输出

 $str = 'hello';
 var_dump($str);

echo '<br>';
$int1 = 134;
var_dump($int1);
?>

