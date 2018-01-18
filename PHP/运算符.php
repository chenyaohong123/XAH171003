<?php
/*运算符:
 * x+y 加
 * x-y 减
 * x*y 乘
 * x/y 除
 * x%y 取余
 * -x  取反
 * a.b 并置(连接两个字符串)
 * 
 * +运算符的特殊情况
 * 字符串和数字(int，float)相加直接返回数字的值
 * 字符串和boolean,返回布尔值代表的数字值
 * 数字和布尔，将布尔类型转换成数字(0或1)，再和数字相加
 * 字符串和字符串相加，结果是0
 */
 $a = 'string';
 $b = 12;
 $bol = false;
 echo $a + $b;//12 $b+$a
 echo'<br>';
 echo $a + $bol;// 0
 echo'<br>';
 	
 echo $a + $bol;//0
 echo '<br>';
 echo $b + $bol;//12
 echo '<br>';
 /*
  * 减运算的特殊情况
  * 字符串与数字做减运算，返回数字与数字前紧挨的运算度符
  * 字符串与字符串:0；
  * 字符串与布尔，返回布尔类型的数字值及前面的运算符.(0和-0都为0);
  */
 echo $a - $b;//-12
 echo '<br>';
 echo $b - $a;//12
 echo '<br>';
 $d = 'asfg';
 echo $a - $d;
 echo '<br>';
 echo $a - 0;
 echo '<br>';
 
 echo $a - true;
 echo '<br>';
 /*
  * 字符串和任何类型值相乘，结果都为0；
  * 数字和布尔，布尔转换成数字做运算
  */
 echo $a*$b;
 echo '<br>';
 
 echo $a * true;
 echo '<br>';
 
 echo $b*$bol;
 echo '<br>';
 echo $a*$a;
 echo '<br>';
 	
 /*
  * 除
  * 字符串和布尔的false不能作为被除数
  * 字符串除以数字、布尔、结果都为0.
  */
 echo $a/true;
 echo '<br>'; 
 
 //布尔类型参与并置，true转换成1，false不显示
 echo false.'aa';
 echo '<br>';
 	
 echo $b.'aa';
 echo '<br>';
 /*赋值运算符
  * $x =  $y 将y的值赋值给x
  * $x += $y 等同于$x = $x + $y；
  * $x -= $y 等同于$x = $x - $y；
  * $x* = $y 等同于$x = $x * $y；
  * $x /= $y 等同于$x = $x / $y；
  * $x %= $y 等同于$x = $x % $y；
  * $a .= $b 等同于$a = $a . $b;
  * 
  * 递增/递减运算符
  * ++x  x加1，然后返回x
  * x++  返回x 然后x加1
  * --x  x减1  然后返回x
  * x--  返回x 然后x减1
  */
 /*
  * 比较运算符结果的输出:
  * 如果比较结果为true，echo输出得到1，false什么都没有。
  * var_dump输出，得到的是布尔类型的值(true或false);
  */
 echo (3 === '3').'a';
 echo '<br>';
 echo 3!= '3';
 echo '<br>';
 echo  3 <> 3;
 echo '<br>';
 echo '4' !== 4;
?>