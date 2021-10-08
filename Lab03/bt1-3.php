
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Đặng Ngọc Thạch (1812843)</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="practical1-1.php" target="_blank">Practical 1.1</a></li>
          <li><a href="practical1-2.php" target="_blank">Practical 1.2</a></li>
          <li><a href="practical1-3.php" target="_blank">Practical 1.3</a></li>
          <li><a href="practical1-4.php" target="_blank">Practical 1.4</a></li>
          <li><a href="practical1-5.php" target="_blank">Practical 1.5</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical 2
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="practical2-1.php" target="_blank">Practical 2.1</a></li>
          <li><a href="practical2-2.php" target="_blank">Practical 2.2</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical 3
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="practical3-1.php" target="_blank">Practical 3.1</a></li>
          <li><a href="practical3-2.php" target="_blank">Practical 3.2</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bài tập 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="bt1-1.php" target="_blank">Phương trình bậc nhất</a></li>
          <li><a href="bt1-2.php" target="_blank">Phương trình bậc hai</a></li>
          <li><a href="bt1-3.php" target="_blank">Kiểm tra tam giác</a></li>
          <li><a href="bt1-4.php" target="_blank">Bảng cửu chương</a></li>
          <li><a href="bt1-5.php" target="_blank">Ước chung bội chung</a></li>
        </ul>
      </li>
      <li class="active"><a href="bt2-1.php" target="_blank">Bài 2</a></li>
      <li class="active"><a href="bt3-1.php" target="_blank">Bài 3</a></li>
      <li class="active"><a href="bt4-1.php" target="_blank">Bài 4</a></li>
      <li class="active"><a href="bt5-1.php" target="_blank">Bài 5</a></li>
    </ul>
  </div>
</nav>
<div class="container"> 
<h2>Thử độ dài 3 cạnh của tam giác</h2>
<form action="bt1-3.php" method="POST">
<input type="number" name="txtA" placeholder="Cạnh a =" class="form-control">
<input type="number" name="txtB" placeholder="Cạnh b =" class="form-control">
<input type="number" name="txtC" placeholder="Cạnh c =" class="form-control">
<input type="submit" name="submit" class="btn btn-success">
<br>
</form>
<br>
<?php
if(isset($_POST["txtA"]) && isset($_POST["txtB"]) && isset($_POST["txtC"]))
{
	$a = $_POST["txtA"];
	$b = $_POST["txtB"];
	$c = $_POST["txtC"];
	if ( ($a+$b)<=$c || ($a+$c)<=$b || ($c+$b)<=$a )
		echo "Độ dài 3 cạnh không thể tạo thành 1 tam giác";
	else {
		if ($a==$b && $b==$c && $a==$c)
			echo "Tam giác đều";
		else if ($a==$b || $b==$c || $a==$c)
			echo "Tam giác cân";
		else if (( $a*$a + $b*$b == $c*$c || $a*$a + $c*$c == $b*$b || $c*$c + $b*$b == $a*$a )&&($a==$b || $b==$c || $a==$c))
			echo "Tam giác vuông cân";
		else if ( $a*$a + $b*$b == $c*$c || $a*$a + $c*$c == $b*$b || $c*$c + $b*$b == $a*$a )
			echo "Tam giác vuông";
		else echo "Tam giác thường";
	}
	
}
?>
</div>  
</body>
</html>