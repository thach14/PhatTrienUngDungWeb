<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>(^_^)</title>
</head>
<body>
	<div class="jumbotron text-center">
 <h1>Đặng Ngọc Thạch</h1>
  <p>Tổng hợp các bài lab phát triển ứng dụng web</p>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">thach14</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="lt1.php">Practical 1</a></li>
          <li><a href="lt2.php">Practical 2</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exercise
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="bt1.php">Bai 1</a></li>
          <li><a href="bt2.php">Bai 2</a></li>
          <li><a href="bt3.php">Bai 3</a></li>
          <li><a href="bt4.php">Bai 4</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
<div class="container">
<h1> Bài 1: Hello world </h1>
<?php
echo "Hello world!"
?>
<h1> Bài 2: Maximum</h1>
<?php
$a = 1;
$b = 4;
$c = 3;
if($a > $b)
{
if($a > $c)
echo "Maximum num a = $a";
else
echo "Maximum num c = $c";
}
else
{
if($c > $b)
echo "Maximum num c = $c";
else
echo "Maximum num b = $b";
}
?>
<h1>Bài 3: Swapping</h1>
<?php
$a = 10;
$b = 20;
echo "a = $a"."<br>"."b = $b"."<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "<b>After Swapping"."<br>"." a = $a"."<br>"."b = $b<b>";
?>
<h1>Bài 4: Type of Value</h1>
<?php
$no = 5;
$value = 13.5;
$name = "Bipin R. Prajapati";
$var = true;
$myarray= array(110,45," Bipin",1.5,true);
echo gettype($no)."<br/>";
echo gettype($value)."<br/>";
echo gettype($name)."<br/>";
echo gettype($var)."<br/>";
echo gettype($myarray)."<br/>";
echo "<hr/>";
$data = array(1,1.5,null,"Bipin",new stdclass,true);
foreach($data as $value)
{
echo gettype($value)." | ";
}
?>
<h1>Bài 5: Substring</h1>

<b>If the start is non-negative, the returned string will start at the start'th position
in string, start from 0.</b><br/><br/>
<?php
echo "Substring with positive start:".substr("abcdef",2)."<br/>";
?>
<br/>
<b>If the start is negative, the returned string will start at the start'th character in
string, from the end of the string.</b><br/><br/>
<?php
echo "Substring with negative start:".substr("abcdef",-2)."<br/>";
?>
<br/>
<b>If the start is less than or equal to start characters long, false will
return</b><br/><br/>
<?php
echo "start is <= string".substr("abcdef",7)."<br/><br/>";
echo "Finish";
?>
<h1>Bài 6: String compare</h1>
<?php
$str1 = 'a';
$str2 = 'b';
echo strcmp($str1, $str2)."<br/>";
$str3 = 'b';
$str4 = 'b';
echo strcmp($str3, $str4)."<br/>";
$str5 = "Anil";
$str6 = "anil";
echo strcmp($str5, $str6)."<br/>";
?>
</div>
</body>
</html>