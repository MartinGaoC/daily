<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
 echo $m1 = memory_get_usage(); 
 echo "<br />";
 $var_string = "123"; 
 echo $m2 = memory_get_usage()-$m1; 
 echo "<br />";
 $n = 123;
 echo $m3 = memory_get_usage()-$m1-$m2; 
 echo "<br />";
 $f = 123.00;
 echo $m4 = memory_get_usage()-$m1-$m2-$m3; 
 echo "<br />";
 $var_array = array("123"); 
 echo $m5 = memory_get_usage()-$m1-$m2-$m3-$m4; 


//  字符直接覆盖字符串
 $string = "就是就是";
 var_dump($string);
 echo "<br />";
 $string = 9494;
 var_dump($string);
  echo "<br />";

// 判断==类型
  $man = "男";
  $flag = $man == "男";
  echo $flag;
  echo "<br />";
  var_dump($flag);

// 定义整形
  $data_int1 = 123;  //十进制
  echo $data_int1;
  echo "<br />";
  $data_int2 = -123;  //负数
  echo $data_int2;
  echo "<br />";
  $data_int3 = 0123; //八进制
  echo $data_int3; 
  echo "<br />";
  $data_int4 = 0x123;   //十六进制
  echo $data_int4;
  echo "<br />";


//  PHP标量类型-浮点型
$num_float1 = 1.234; //小数点
echo $num_float1;
echo "<br/>";
$num_float2 = 1.2e3; //科学计数法，小写e
echo $num_float2;
echo "<br/>";
$num_float3 = 7.0E-3; //科学计数法，大写E
echo $num_float3;
echo "<br/>";


//PHP标量类型-字符串
$str_string1 = '我是字符串';
$str_string2 = "我也是字符串哦";
echo $str_string1;
echo "<br/>";
echo $str_string2;


// 双引号才能输出变量
$love = "I love you!"; 
$string1 = "慕课网，$love";
$string2 = '慕课网，$love';
echo $string1;
echo "<br />";
echo $string2;


// 用Hcrcdoc结构形式的方法来解决
$string1 = <<<GOD
我有一只小毛驴，我从来也不骑。
有一天我心血来潮，骑着去赶集。
我手里拿着小皮鞭，我心里正得意。
不知怎么哗啦啦啦啦，我摔了一身泥.
GOD;
echo $string1;



// 打开文件
//首先采用“fopen”函数打开文件，得到返回值的就是资源类型
$file_handle = fopen("data.txt","r");

if ($file_handle){
//接着采用while循环
//   （后面语言结构语句中的循环结构会详细介绍）一行行地读取文件，
//   然后输出每行的文字  
    while (!feof($file_handle)){ //feof判断是否到最后一行
        $line = fgets($file_handle);  //fgets只读取到一行文本
        echo $line;  //输出一行文本 
        echo"<br />"; 
        $link = fread($file_handle,filesize("data.txt"));
        echo $link;
    }
}
fclose($file_handle); // 关闭文件
 ?> 
 <P>
 请选择出生年份：
 <select name="" id="">
  <?php  
    for($i = 1930; $i <= 2016; $i++) {
  ?>
     <option value=""><?php echo $i; ?></option> 
   <?php  
    }
    ?>
 </select>
 </P>
 <?php
  echo "<select>";
  for ($i = 1997; $i < 2017; $i++) {
    echo '<option>';
    echo $i;
    echo '</option>';
  } 
  echo "</select>";
 ?>

 <?php
  $web1704_changquery = 14;
  function showChangQuery() {
    global $web1704_changquery;   //global  关键字  引入变量
    echo $web1704_changquery;
  }
  showChangQuery();
  echo "<br />";
  echo 3 + 8 * 5 /2 % 8;
  echo "<br />";
  echo 3 . "8" * 2;
  echo "<br />";
  echo 3 . "8" + 2;
  echo "<br />";
  $age = 17;
  $newage = $age++ + ++$age + $age;
  echo $newage; // 17 + 19 + 19;


  //数组
  $classes = array('1', '2', '3', '4');
  var_dump($classes);
  echo "<pre>";
  print_r( $classes );
  echo "</pre>";
  echo count ($classes);

  for ($i = 0; $i < count($classes); $i++){
    echo "<li>$i</li>";
  }
 ?>
</body>
</html>



